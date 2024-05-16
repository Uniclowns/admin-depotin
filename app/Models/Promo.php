<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    use HasFactory;

    protected $table = 'promo';

    protected $guarded = ['id'];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('nama_promo', 'like', '%' . $search . '%')
                ->orWhere('deskripsi_promo', 'like', '%' . $search . '%')
                ->orWhere('syarat_ketentuan', 'like', '%' . $search . '%')
                ->orWhere('masa_berlaku', 'like', '%' . $search . '%')
                ->orWhere('min_belanja', 'like', '%' . $search . '%');
        });
    }
}
