<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mitra extends Model
{
    use HasFactory;

    protected $table = 'mitra';
    protected $guarded = ['id'];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('username', 'like', '%' . $search . '%')
                ->orWhere('nama_depot', 'like', '%' . $search . '%')
                ->orWhere('alamat', 'like', '%' . $search . '%');
        });
    }
}
