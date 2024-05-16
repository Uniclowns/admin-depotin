<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Pesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $today = date('Y-m-d');
        $yesterday = date('Y-m-d', strtotime('-1 day'));

        $userToday = User::whereDate('created_at', $today)->count();
        $userYesterday = User::whereDate('created_at', $yesterday)->count();
        $pesananToday = Pesanan::whereDate('created_at', $today)->count();
        $pesananYesterday = Pesanan::whereDate('created_at', $yesterday)->count();
        $penjualanToday = Pesanan::whereDate('created_at', $today)->sum('total_harga');
        $penjualanYesterday = Pesanan::whereDate('created_at', $yesterday)->sum('total_harga');
        $pendapatanHarian = Pesanan::whereDate('created_at', $today)->sum('total_harga');
        $pendapatanYesterday = Pesanan::whereDate('created_at', $yesterday)->sum('total_harga');

        if($userYesterday > 0)
        {
            $userCount = (($userToday - $userYesterday) / $userYesterday) * 100;
        }
        else
        {
            $userCount = 0;
        }

        if($pesananYesterday > 0)
        {
            $pesananCount = (($pesananToday - $pesananYesterday) / $pesananYesterday) * 100;
        }
        else
        {
            $pesananCount = 0;
        }

        if($penjualanYesterday > 0)
        {
            $penjualanCount = (($penjualanToday - $penjualanYesterday) / $penjualanYesterday) * 100;
        }
        else
        {
            $penjualanCount = 0;
        }

        if($pendapatanYesterday > 0)
        {
            $pendapatanCount = (($pendapatanHarian - $pendapatanYesterday) / $pendapatanYesterday) * 100;
        }
        else
        {
            $pendapatanCount = 0;
        }

        return view('dashboard.index', [
            'active' => 'beranda',
            'user' => Auth::guard('admin')->user(),
            'admin' => Admin::all(),
            'total_pesanan' => Pesanan::all()->count(),
            'total_penjualan' => Pesanan::sum('total_harga'),
            'pendapatan_harian' => $pendapatanHarian,
            'users' => User::all()->count(),
            'usersYesterday' => $userYesterday,
            'usersToday' => $userToday,
            'pesananToday' =>$pesananToday,
            'pesananYesterday' => $pesananYesterday,
            'penjualanToday' => $penjualanToday,
            'penjualanYesterday' => $penjualanYesterday,
            'pendapatanYesterday' => $pendapatanYesterday,
            'userCount' => $userCount,
            'pesananCount' => $pesananCount,
            'penjualanCount' => $penjualanCount,
            'pendapatanCount' => $pendapatanCount,
        ]);
    }
}
