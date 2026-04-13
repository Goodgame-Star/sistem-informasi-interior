@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
<div class="hero">
    <div class="hero-left">
        <div class="hero-tag">Katalog Digital Terlengkap</div>
        <h1 class="hero-title">Furnitur <em>Premium</em> untuk Hunian Impianmu</h1>
        <p class="hero-desc">UD. Ivan Interior menghadirkan koleksi furnitur kayu berkualitas tinggi dengan harga terjangkau. Temukan ribuan pilihan untuk ruang tamu, kamar, dan dapur Anda.</p>
        <div class="hero-cta">
            <a href="{{ route('katalog') }}" class="btn btn-primary">Lihat Katalog</a>
            <a href="{{ route('pemesanan') }}" class="btn btn-outline" style="color:rgba(255,255,255,.8);border-color:rgba(255,255,255,.3)">Hubungi Kami</a>
        </div>
        <div class="hero-stats">
            <div class="hero-stat"><div class="num">200+</div><div class="lbl">Produk</div></div>
            <div class="hero-stat"><div class="num">500+</div><div class="lbl">Pelanggan</div></div>
            <div class="hero-stat"><div class="num">5★</div><div class="lbl">Rating</div></div>
        </div>
    </div>
    <div class="hero-right">
        <div class="hero-deco">
            <span class="big">2021</span>
            Berdiri sejak
        </div>
        <div class="hero-img-grid">
            <div class="hero-card" style="background:linear-gradient(135deg,#D4A574,#8B5E3C)">
                <div style="padding:1.5rem;color:white;">
                    <div style="font-size:3rem">🛋️</div>
                    <div class="hero-card-label"><strong>Sofa Minimalis</strong><span>Kayu Jati Premium</span></div>
                </div>
            </div>
            <div class="hero-card" style="background:linear-gradient(135deg,#A8D5A2,#4A7C59)">
                <div style="padding:1.5rem;color:white;padding-top:3rem">
                    <div style="font-size:3rem">🪑</div>
                    <div class="hero-card-label"><strong>Kursi Makan</strong><span>Set 4 Kursi</span></div>
                </div>
            </div>
        </div>
    </div>
</div>

<section style="background:var(--bg)">
    <div class="container">
        <div class="section-head reveal">
            <div class="section-tag">Kategori Produk</div>
            <h2 class="section-title">Temukan Produk Sesuai Kebutuhanmu</h2>
            <p class="section-desc">Kami menyediakan berbagai kategori produk interior dari bahan kayu pilihan berkualitas tinggi.</p>
        </div>
        <div class="kategori-grid reveal">
            <a href="{{ route('katalog') }}" class="kat-card">
                <div class="kat-icon">🛋️</div>
                <h3>Ruang Tamu</h3>
                <p>Koleksi Ruang Tamu</p>
            </a>
            <a href="{{ route('katalog') }}" class="kat-card">
                <div class="kat-icon">🛏️</div>
                <h3>Kamar Tidur</h3>
                <p>Koleksi Kamar Tidur</p>
            </a>
            <a href="{{ route('katalog') }}" class="kat-card">
                <div class="kat-icon">🍽️</div>
                <h3>Ruang Makan</h3>
                <p>Koleksi Ruang Makan</p>
            </a>
            <a href="{{ route('katalog') }}" class="kat-card">
                <div class="kat-icon">🚪</div>
                <h3>Pintu & Lemari</h3>
                <p>Koleksi Pintu & Lemari</p>
            </a>
        </div>
    </div>
</section>

<section class="fitur-section">
    <div class="container">
        <div class="section-head reveal">
            <div class="section-tag">Mengapa Kami?</div>
            <h2 class="section-title">Keunggulan UD. Ivan Interior</h2>
        </div>
        <div class="fitur-grid reveal">
            <div class="fitur-card">
                <div class="fitur-icon">🪵</div>
                <h3>Material Premium</h3>
                <p>Menggunakan kayu jati, mahoni, dan triplek berkualitas tinggi yang tahan lama dan ramah lingkungan.</p>
            </div>
            <div class="fitur-card">
                <div class="fitur-icon">🎨</div>
                <h3>Desain Custom</h3>
                <p>Setiap produk dapat disesuaikan dengan ukuran dan warna sesuai keinginan pelanggan.</p>
            </div>
            <div class="fitur-card">
                <div class="fitur-icon">🚚</div>
                <h3>Pengiriman Terpercaya</h3>
                <p>Layanan pengiriman ke seluruh Batam dengan penanganan profesional agar produk sampai utuh.</p>
            </div>
        </div>
    </div>
</section>

<section style="background:var(--bg)">
    <div class="container">
        <div class="cta-banner reveal">
            <div class="cta-text">
                <h2>Siap Memperindah Rumahmu?</h2>
                <p>Konsultasikan kebutuhan interior rumahmu bersama kami. Tim kami siap membantu menemukan produk yang tepat sesuai budget dan selera Anda.</p>
            </div>
            <div class="cta-btns">
                <a href="{{ route('katalog') }}" class="btn btn-outline" style="color:rgba(255,255,255,.8);border-color:rgba(255,255,255,.3)">Lihat Katalog</a>
                <a href="https://wa.me/628123456789" class="btn btn-accent">WhatsApp Kami</a>
            </div>
        </div>
    </div>
</section>
@endsection