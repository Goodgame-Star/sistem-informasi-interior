<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Kategori;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function katalog(Request $request)
    {
        // Mengambil semua kategori untuk filter
        $kategori = Kategori::all();
        
        // Mengambil produk, bisa difilter berdasarkan pencarian atau kategori nantinya
        $produk = Produk::with('kategori')->get(); 

        return view('katalog', compact('kategori', 'produk'));
    }

    public function pemesanan()
    {
        // Mengambil produk untuk diletakkan di dropdown form pemesanan
        $produk = Produk::all();
        return view('pemesanan', compact('produk'));
    }
}