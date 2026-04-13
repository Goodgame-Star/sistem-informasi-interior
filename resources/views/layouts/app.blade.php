<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') — UD. Ivan Interior</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        /* Salalin semua CSS dari file ivan-interior.html di sini */
        :root {
            --bg: #F5F0E8; --bg2: #EDE7D6; --surface: #FDFAF4; --wood: #8B5E3C;
            --wood-dark: #5C3A1E; --wood-light: #C49A6C; --accent: #2C4A2E;
            --accent2: #4A7C59; --text: #1A1208; --text2: #5A4A35;
            --text3: #8A7A65; --border: rgba(139,94,60,0.15); --white: #FFFEF9;
        }
        /* ... sisa CSS lainnya ... */
    </style>
</head>
<body>

<nav>
    <div class="nav-logo" onclick="window.location='{{ route('home') }}'" style="cursor:pointer">
        <div class="nav-logo-icon">
            <svg viewBox="0 0 24 24"><path d="M5 3h14a2 2 0 012 2v14a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2zm7 4a1 1 0 00-1 1v4H7a1 1 0 000 2h4v4a1 1 0 002 0v-4h4a1 1 0 000-2h-4V8a1 1 0 00-1-1z"/></svg>
        </div>
        <div class="nav-brand">UD. Ivan <span>Interior</span></div>
    </div>
    <div class="nav-links">
        <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'nav-active' : '' }}">Beranda</a>
        <a href="{{ route('katalog') }}" class="{{ request()->routeIs('katalog') ? 'nav-active' : '' }}">Katalog</a>
        <a href="{{ route('pemesanan') }}" class="{{ request()->routeIs('pemesanan') ? 'nav-active' : '' }}">Pemesanan</a>
        <a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'nav-active' : '' }}">Dashboard Admin</a>
    </div>
    <div style="display:flex;align-items:center;gap:1rem">
        <div class="nav-cart">🛒 <div class="cart-badge">0</div></div>
        <a href="{{ route('pemesanan') }}" class="btn btn-primary">Pesan Sekarang</a>
    </div>
</nav>

<main>
    @yield('content')
</main>

<footer>
    <div class="footer-bottom">
        <span>© 2026 UD. Ivan Interior. Semua hak dilindungi.</span>
        <span>Sistem Informasi Penjualan Interior — Muhammad Ramadhaniar Saputra</span>
    </div>
</footer>

@yield('scripts')
</body>
</html>