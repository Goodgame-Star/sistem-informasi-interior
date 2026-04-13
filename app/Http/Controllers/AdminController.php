<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use App\Models\Produk;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        // Menghitung metrik untuk ditampilkan di dashboard admin
        $totalPesanan = Pesanan::count();
        $totalPendapatan = Pesanan::where('status_pesanan', 'Selesai')->sum('total_harga');
        $produkAktif = Produk::count();
        $totalPelanggan = User::where('role', 'pelanggan')->count();

        // Mengambil 5 pesanan terbaru
        $pesananTerbaru = Pesanan::orderBy('created_at', 'desc')->take(5)->get();

        return view('admin.dashboard', compact(
            'totalPesanan', 
            'totalPendapatan', 
            'produkAktif', 
            'totalPelanggan', 
            'pesananTerbaru'
        ));
    }
}