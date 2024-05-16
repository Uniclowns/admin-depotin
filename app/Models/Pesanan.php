<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pesanan extends Model
{
    use HasFactory;

    public $table = 'pesanan';
    protected $guarded = ['id'];

    public function scopeByWeek($query)
    {
        return $query->select(DB::raw('WEEK(created_at) as week'));
    }

}
