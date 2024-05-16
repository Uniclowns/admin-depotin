<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;

    protected $table = 'driver';
    protected $guarded = ['id'];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('nama', 'like', '%' . $search . '%')
                ->orWhere('alamat', 'like', '%' . $search . '%')
                ->orWhere('no_hp', 'like', '%' . $search . '%')
                ->orWhere('plat_kendaraan', 'like', '%' . $search . '%');
        });
    }
}
