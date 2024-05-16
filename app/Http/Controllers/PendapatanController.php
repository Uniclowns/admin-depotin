<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use App\Models\Pesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PendapatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        return view('pendapatan.index', [
            'active' => 'laporan',
            'laporans' => Laporan::query()
                ->selectRaw('WEEK(created_at) as week')
                ->selectRaw('SUM(jumlah_pemesanan) as total_pemesanan')
                ->selectRaw('DATE_FORMAT(MIN(created_at), "%Y-%m-%d") as start_date')
                ->selectRaw('DATE_FORMAT(MAX(created_at), "%Y-%m-%d") as end_date')
                ->selectRaw('SUM(total_harga) as total_harga')
                ->selectRaw('COUNT(user_id) as total_user')
                ->selectRaw('CASE WHEN SUM(jumlah_pemesanan) > COUNT(id) THEN (COUNT(id) * 400) + (SUM(jumlah_pemesanan) * 1000) ELSE (SUM(jumlah_pemesanan) * 1000) + (COUNT(id) * 400) END AS keuntungan')
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

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
