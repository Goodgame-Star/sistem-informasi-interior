@extends('layouts.app')

@section('title', 'Dashboard Admin')

@section('content')
<div class="container" style="margin-top:100px; padding: 2rem;">
    <div class="stats-grid">
        <div class="stat-card">
            <div class="st-label">Total Pesanan</div>
            <div class="st-val">{{ $totalPesanan }}</div>
        </div>
        <div class="stat-card">
            <div class="st-label">Total Pendapatan</div>
            <div class="st-val">Rp {{ number_format($totalPendapatan, 0, ',', '.') }}</div>
        </div>
        <div class="stat-card">
            <div class="st-label">Produk Aktif</div>
            <div class="st-val">{{ $produkAktif }}</div>
        </div>
        <div class="stat-card">
            <div class="st-label">Pelanggan</div>
            <div class="st-val">{{ $totalPelanggan }}</div>
        </div>
    </div>

    <div class="admin-card">
        <h4>Daftar Pesanan Terbaru</h4>
        <table class="order-table">
            <thead>
                <tr>
                    <th>No. Pesanan</th>
                    <th>Pelanggan</th>
                    <th>Total</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pesananTerbaru as $order)
                <tr>
                    <td>{{ $order->nomor_pesanan }}</td>
                    <td>{{ $order->nama_pelanggan }}</td>
                    <td>Rp {{ number_format($order->total_harga, 0, ',', '.') }}</td>
                    <td><span class="status-badge">{{ $order->status_pesanan }}</span></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection