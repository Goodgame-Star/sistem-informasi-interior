<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use App\Models\DetailPesanan;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        // 1. Validasi Input
        $request->validate([
            'nama_pelanggan' => 'required|string|max:255',
            'no_telepon' => 'required',
            'alamat_pengiriman' => 'required',
            'produk_id' => 'required|exists:produk,id',
            'jumlah' => 'required|integer|min:1',
        ]);

        // 2. Gunakan Transaction agar data konsisten
        DB::transaction(function () use ($request) {
            $produk = Produk::find($request->produk_id);
            $totalHarga = $produk->harga * $request->jumlah;

            // 3. Simpan ke tabel 'pesanan'
            $pesanan = Pesanan::create([
                'nomor_pesanan' => 'ORD-' . strtoupper(uniqid()),
                'nama_pelanggan' => $request->nama_pelanggan,
                'no_telepon' => $request->no_telepon,
                'alamat_pengiriman' => $request->alamat_pengiriman,
                'total_harga' => $totalHarga,
                'metode_pembayaran' => 'Transfer Bank', // Bisa dibuat dinamis nanti
                'status_pesanan' => 'Pending',
            ]);

            // 4. Simpan ke tabel 'detail_pesanan'
            DetailPesanan::create([
                'pesanan_id' => $pesanan->id,
                'produk_id' => $produk->id,
                'qty' => $request->jumlah,
                'harga_satuan' => $produk->harga,
                'subtotal' => $totalHarga,
            ]);
        });

        return redirect()->back()->with('success', 'Pesanan Anda berhasil dikirim! Admin akan segera menghubungi.');
    }
}