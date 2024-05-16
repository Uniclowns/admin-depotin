<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Support\Carbon;

class CetakController extends Controller
{
    public function cetak()
    {
        return view('pendapatan.cetak', [
            'active' => 'laporan',
            'today' => Carbon::now()->setTimezone('Asia/Jakarta'),
            'laporans' => Laporan::query()
                ->selectRaw('WEEK(created_at) as week')
                ->selectRaw('SUM(jumlah_pemesanan) as total_pemesanan')
                ->selectRaw('DATE_FORMAT(MIN(created_at), "%Y-%m-%d") as start_date')
                ->selectRaw('DATE_FORMAT(MAX(created_at), "%Y-%m-%d") as end_date')
                ->selectRaw('SUM(total_harga) as total_harga')
                ->selectRaw('COUNT(user_id) as total_user')
                ->groupBy('week')
                ->when(request('month'), function ($query, $month) {
                    return $query->whereMonth('created_at', $month);
                })
                ->when(request('year'), function ($query, $year) {
                    return $query->whereYear('created_at', $year);
                })
                ->paginate(4),
        ]);
    }
}
