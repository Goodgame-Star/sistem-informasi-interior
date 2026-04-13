@extends('layouts.app')

@section('title', 'Katalog Digital')

@section('content')
<div class="container" style="margin-top:100px; padding: 2rem;">
    <div class="section-head">
        <div class="section-tag">Katalog Digital</div>
        <h2 class="section-title">Semua Produk</h2>
    </div>

    <div class="produk-filter">
        <button class="filter-btn active">Semua</button>
        @foreach($kategori as $kat)
            <button class="filter-btn">{{ $kat->nama_kategori }}</button>
        @endforeach
    </div>

    <div class="produk-grid">
        @foreach($produk as $p)
        <div class="produk-card">
            <div class="produk-img">
                <span style="font-size:5rem">{{ $p->ikon ?? '🛋️' }}</span>
                @if($p->status_label)
                    <div class="produk-badge">{{ $p->status_label }}</div>
                @endif
            </div>
            <div class="produk-body">
                <div class="produk-cat">{{ $p->kategori->nama_kategori }}</div>
                <div class="produk-name">{{ $p->nama_produk }}</div>
                <div class="produk-desc">{{ Str::limit($p->deskripsi, 80) }}</div>
                <div class="produk-footer">
                    <div class="produk-price">Rp {{ number_format($p->harga, 0, ',', '.') }}</div>
                    <button class="btn btn-primary btn-cart">+ Keranjang</button>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection