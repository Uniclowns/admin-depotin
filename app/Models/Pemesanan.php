<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;

    protected $table = 'pesanan';

    public function mitra()
    {
        return $this->belongsTo(Mitra::class);
    }

    public function pelanggan()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function supir()
    {
        return $this->belongsTo(Driver::class, 'driver_id');
    }

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where(function ($query) use ($search) {
                $query->where('created_at', 'like', '%' . $search . '%')
                    ->orWhere('jumlah_pemesanan', 'like', '%' . $search . '%')
                    ->orWhere('total_harga', 'like', '%' . $search . '%')
                    ->orWhere('month', 'like', '%' . $search . '%')
                    ->orWhere('year', 'like', '%' . $search . '%');
            })->orWhereHas('pelanggan', function ($query) use ($search) {
                $query->where('nama', 'like', '%' . $search . '%');
            })->orWhereHas('mitra', function ($query) use ($search) {
                $query->where('nama_depot', 'like', '%' . $search . '%');
            })->orWhereHas('supir', function ($query) use ($search) {
                $query->where('nama', 'like', '%' . $search . '%');
            });
        });

        $query->when($filters['dateBefore'] ?? false, function ($query, $dateBefore) {
            return $query->where('created_at', '>=', $dateBefore)
                ->latest('created_at');
        });
    }
}
