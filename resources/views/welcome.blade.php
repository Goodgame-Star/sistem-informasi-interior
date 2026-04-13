<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>UD. Ivan Interior — Katalog Digital</title>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
<style>
  :root {
    --bg: #F5F0E8;
    --bg2: #EDE7D6;
    --surface: #FDFAF4;
    --wood: #8B5E3C;
    --wood-dark: #5C3A1E;
    --wood-light: #C49A6C;
    --accent: #2C4A2E;
    --accent2: #4A7C59;
    --text: #1A1208;
    --text2: #5A4A35;
    --text3: #8A7A65;
    --border: rgba(139,94,60,0.15);
    --white: #FFFEF9;
  }
  * { margin:0; padding:0; box-sizing:border-box; }
  body { font-family:'DM Sans',sans-serif; background:var(--bg); color:var(--text); overflow-x:hidden; }

  /* NAV */
  nav {
    position:fixed; top:0; width:100%; background:var(--white);
    border-bottom:1px solid var(--border); z-index:1000;
    display:flex; align-items:center; justify-content:space-between;
    padding:0 2rem; height:64px;
  }
  .nav-logo { display:flex; align-items:center; gap:12px; }
  .nav-logo-icon {
    width:36px; height:36px; background:var(--wood-dark); border-radius:6px;
    display:flex; align-items:center; justify-content:center;
  }
  .nav-logo-icon svg { width:20px; height:20px; fill:var(--white); }
  .nav-brand { font-family:'Playfair Display',serif; font-size:17px; font-weight:700; color:var(--wood-dark); }
  .nav-brand span { color:var(--accent); }
  .nav-links { display:flex; gap:2rem; align-items:center; }
  .nav-links a { text-decoration:none; font-size:14px; color:var(--text2); font-weight:500; transition:color .2s; }
  .nav-links a:hover { color:var(--wood); }
  .nav-links a.active { color:var(--wood-dark); font-weight:600; border-bottom:2px solid var(--wood); padding-bottom:2px; }
  .btn { display:inline-flex; align-items:center; gap:8px; padding:10px 20px; border-radius:8px; font-size:14px; font-weight:500; cursor:pointer; border:none; transition:all .2s; text-decoration:none; font-family:'DM Sans',sans-serif; }
  .btn-primary { background:var(--wood-dark); color:var(--white); }
  .btn-primary:hover { background:var(--wood); transform:translateY(-1px); }
  .btn-outline { background:transparent; color:var(--wood-dark); border:1.5px solid var(--wood-dark); }
  .btn-outline:hover { background:var(--wood-dark); color:var(--white); }
  .btn-accent { background:var(--accent); color:var(--white); }
  .btn-accent:hover { background:var(--accent2); }
  .nav-cart { position:relative; cursor:pointer; }
  .cart-badge {
    position:absolute; top:-6px; right:-6px; background:var(--wood);
    color:var(--white); font-size:10px; font-weight:700;
    width:18px; height:18px; border-radius:50%; display:flex; align-items:center; justify-content:center;
  }

  /* HERO */
  .hero {
    margin-top:64px; min-height:88vh;
    display:grid; grid-template-columns:1fr 1fr; gap:0;
    background:var(--wood-dark); overflow:hidden; position:relative;
  }
  .hero-left {
    padding:6rem 4rem; display:flex; flex-direction:column; justify-content:center; gap:2rem;
    background:var(--wood-dark);
  }
  .hero-tag {
    display:inline-flex; align-items:center; gap:8px;
    background:rgba(255,255,255,0.1); padding:8px 16px; border-radius:999px;
    font-size:12px; color:var(--wood-light); font-weight:500; letter-spacing:.05em; text-transform:uppercase;
    width:fit-content;
  }
  .hero-tag::before { content:''; width:6px; height:6px; background:var(--wood-light); border-radius:50%; }
  .hero-title {
    font-family:'Playfair Display',serif; font-size:clamp(2.5rem,4vw,3.8rem);
    color:var(--white); line-height:1.1; font-weight:700;
  }
  .hero-title em { color:var(--wood-light); font-style:italic; }
  .hero-desc { font-size:16px; color:rgba(255,255,255,0.7); line-height:1.7; max-width:420px; }
  .hero-cta { display:flex; gap:1rem; flex-wrap:wrap; }
  .hero-stats { display:flex; gap:2.5rem; padding-top:2rem; border-top:1px solid rgba(255,255,255,0.1); }
  .hero-stat .num { font-family:'Playfair Display',serif; font-size:2rem; color:var(--wood-light); font-weight:700; }
  .hero-stat .lbl { font-size:12px; color:rgba(255,255,255,0.5); text-transform:uppercase; letter-spacing:.05em; }
  .hero-right {
    background:var(--bg2); position:relative; overflow:hidden;
    display:flex; align-items:center; justify-content:center;
  }
  .hero-img-grid {
    display:grid; grid-template-columns:1fr 1fr; gap:16px;
    padding:3rem 2rem 3rem 2rem; width:100%;
  }
  .hero-card {
    background:var(--white); border-radius:16px; overflow:hidden;
    aspect-ratio:3/4; position:relative;
  }
  .hero-card img { width:100%; height:100%; object-fit:cover; }
  .hero-card-label {
    position:absolute; bottom:12px; left:12px; right:12px;
    background:rgba(255,254,249,0.92); backdrop-filter:blur(8px);
    border-radius:10px; padding:10px 12px;
  }
  .hero-card-label strong { font-size:13px; font-weight:600; color:var(--wood-dark); display:block; }
  .hero-card-label span { font-size:11px; color:var(--text3); }
  .hero-card:first-child { transform:translateY(2rem); }
  .hero-deco {
    position:absolute; top:2rem; right:2rem;
    background:var(--wood-dark); color:var(--white);
    padding:12px 16px; border-radius:12px; font-size:12px; font-weight:600; text-align:center;
  }
  .hero-deco .big { font-family:'Playfair Display',serif; font-size:22px; color:var(--wood-light); display:block; }

  /* SECTION */
  section { padding:5rem 2rem; }
  .container { max-width:1200px; margin:0 auto; }
  .section-head { text-align:center; margin-bottom:3rem; }
  .section-tag {
    display:inline-block; background:var(--bg2); color:var(--wood);
    font-size:12px; font-weight:600; text-transform:uppercase; letter-spacing:.08em;
    padding:6px 14px; border-radius:999px; margin-bottom:1rem;
    border:1px solid var(--border);
  }
  .section-title { font-family:'Playfair Display',serif; font-size:clamp(1.8rem,3vw,2.5rem); color:var(--wood-dark); margin-bottom:.75rem; }
  .section-desc { color:var(--text2); font-size:15px; max-width:500px; margin:0 auto; line-height:1.7; }

  /* KATEGORI */
  .kategori-grid { display:grid; grid-template-columns:repeat(4,1fr); gap:16px; }
  .kat-card {
    background:var(--white); border-radius:16px; padding:2rem 1.5rem;
    border:1px solid var(--border); text-align:center; cursor:pointer;
    transition:all .25s; text-decoration:none; color:inherit;
    display:block;
  }
  .kat-card:hover { transform:translateY(-4px); border-color:var(--wood-light); box-shadow:0 12px 32px rgba(139,94,60,.1); }
  .kat-icon {
    width:64px; height:64px; border-radius:16px; margin:0 auto 1rem;
    display:flex; align-items:center; justify-content:center;
    font-size:28px; background:var(--bg);
  }
  .kat-card h3 { font-size:15px; font-weight:600; color:var(--wood-dark); margin-bottom:.4rem; }
  .kat-card p { font-size:13px; color:var(--text3); }

  /* PRODUK */
  .produk-filter { display:flex; gap:10px; margin-bottom:2rem; flex-wrap:wrap; }
  .filter-btn {
    padding:8px 18px; border-radius:999px; font-size:13px; font-weight:500;
    border:1.5px solid var(--border); cursor:pointer; transition:all .2s;
    background:var(--white); color:var(--text2); font-family:'DM Sans',sans-serif;
  }
  .filter-btn.active, .filter-btn:hover { background:var(--wood-dark); color:var(--white); border-color:var(--wood-dark); }
  .produk-grid { display:grid; grid-template-columns:repeat(3,1fr); gap:24px; }
  .produk-card {
    background:var(--white); border-radius:20px; overflow:hidden;
    border:1px solid var(--border); transition:all .25s; cursor:pointer;
  }
  .produk-card:hover { transform:translateY(-4px); box-shadow:0 16px 40px rgba(139,94,60,.12); }
  .produk-img {
    position:relative; aspect-ratio:4/3; overflow:hidden;
    background:linear-gradient(135deg, var(--bg2) 0%, var(--bg) 100%);
    display:flex; align-items:center; justify-content:center; font-size:4rem;
  }
  .produk-badge {
    position:absolute; top:12px; left:12px;
    background:var(--wood); color:var(--white);
    font-size:11px; font-weight:600; padding:4px 10px; border-radius:999px;
  }
  .produk-badge.new { background:var(--accent); }
  .produk-wishlist {
    position:absolute; top:10px; right:10px;
    background:var(--white); width:32px; height:32px; border-radius:50%;
    display:flex; align-items:center; justify-content:center; font-size:16px;
    border:1px solid var(--border); cursor:pointer; transition:all .2s;
  }
  .produk-wishlist:hover { background:var(--bg); }
  .produk-body { padding:1.25rem; }
  .produk-cat { font-size:11px; color:var(--wood); font-weight:600; text-transform:uppercase; letter-spacing:.05em; margin-bottom:.3rem; }
  .produk-name { font-family:'Playfair Display',serif; font-size:17px; font-weight:600; color:var(--wood-dark); margin-bottom:.4rem; line-height:1.3; }
  .produk-desc { font-size:13px; color:var(--text3); margin-bottom:1rem; line-height:1.5; }
  .produk-footer { display:flex; align-items:center; justify-content:space-between; padding-top:.75rem; border-top:1px solid var(--border); }
  .produk-price { font-family:'Playfair Display',serif; font-size:20px; font-weight:700; color:var(--wood-dark); }
  .produk-price small { font-family:'DM Sans',sans-serif; font-size:11px; color:var(--text3); display:block; font-weight:400; }
  .btn-cart { padding:9px 16px; font-size:13px; border-radius:8px; }

  /* FITUR */
  .fitur-section { background:var(--white); }
  .fitur-grid { display:grid; grid-template-columns:repeat(3,1fr); gap:24px; }
  .fitur-card { padding:2rem; border-radius:16px; background:var(--bg); border:1px solid var(--border); }
  .fitur-icon { font-size:2rem; margin-bottom:1rem; }
  .fitur-card h3 { font-size:16px; font-weight:600; color:var(--wood-dark); margin-bottom:.5rem; }
  .fitur-card p { font-size:14px; color:var(--text2); line-height:1.6; }

  /* CTA BANNER */
  .cta-banner {
    background:var(--wood-dark); border-radius:24px;
    padding:4rem; display:flex; align-items:center; justify-content:space-between; gap:2rem;
    overflow:hidden; position:relative;
  }
  .cta-banner::before {
    content:''; position:absolute; right:-80px; top:-80px;
    width:300px; height:300px; background:rgba(196,154,108,.1); border-radius:50%;
  }
  .cta-text h2 { font-family:'Playfair Display',serif; font-size:2rem; color:var(--white); margin-bottom:.75rem; }
  .cta-text p { color:rgba(255,255,255,.65); font-size:15px; max-width:400px; line-height:1.7; }
  .cta-btns { display:flex; gap:12px; flex-shrink:0; }

  /* MODAL */
  .modal-overlay {
    display:none; position:fixed; inset:0; background:rgba(26,18,8,.6);
    z-index:2000; align-items:center; justify-content:center; padding:2rem;
  }
  .modal-overlay.open { display:flex; }
  .modal {
    background:var(--white); border-radius:24px; width:100%; max-width:700px;
    max-height:85vh; overflow-y:auto; padding:2.5rem;
  }
  .modal-close { float:right; background:none; border:none; font-size:24px; cursor:pointer; color:var(--text3); }
  .modal-grid { display:grid; grid-template-columns:1fr 1fr; gap:2rem; margin-top:1.5rem; }
  .modal-img {
    aspect-ratio:1; background:var(--bg); border-radius:16px;
    display:flex; align-items:center; justify-content:center; font-size:6rem;
  }
  .modal-cat { font-size:12px; color:var(--wood); font-weight:600; text-transform:uppercase; letter-spacing:.05em; }
  .modal-name { font-family:'Playfair Display',serif; font-size:1.8rem; color:var(--wood-dark); margin:.5rem 0; }
  .modal-price { font-family:'Playfair Display',serif; font-size:2rem; color:var(--wood); font-weight:700; }
  .modal-desc { font-size:14px; color:var(--text2); line-height:1.7; margin:1rem 0; }
  .modal-specs { border-top:1px solid var(--border); padding-top:1rem; margin-top:1rem; }
  .modal-spec-row { display:flex; justify-content:space-between; padding:6px 0; font-size:14px; border-bottom:1px solid var(--border); }
  .modal-spec-row:last-child { border:none; }
  .modal-spec-row .key { color:var(--text3); }
  .modal-spec-row .val { color:var(--wood-dark); font-weight:500; }
  .qty-ctrl { display:flex; align-items:center; gap:12px; margin:1.5rem 0; }
  .qty-btn { width:36px; height:36px; border-radius:8px; border:1.5px solid var(--border); background:var(--bg); cursor:pointer; font-size:18px; font-family:'DM Sans',sans-serif; font-weight:500; color:var(--wood-dark); transition:all .2s; }
  .qty-btn:hover { border-color:var(--wood); background:var(--white); }
  .qty-num { font-size:18px; font-weight:600; color:var(--wood-dark); min-width:32px; text-align:center; }

  /* CART SIDEBAR */
  .cart-sidebar {
    position:fixed; right:-400px; top:64px; bottom:0; width:380px;
    background:var(--white); border-left:1px solid var(--border); z-index:900;
    transition:right .3s ease; display:flex; flex-direction:column;
    box-shadow:-8px 0 32px rgba(0,0,0,.08);
  }
  .cart-sidebar.open { right:0; }
  .cart-head { padding:1.5rem; border-bottom:1px solid var(--border); display:flex; justify-content:space-between; align-items:center; }
  .cart-head h3 { font-family:'Playfair Display',serif; font-size:1.2rem; color:var(--wood-dark); }
  .cart-close { background:none; border:none; font-size:22px; cursor:pointer; color:var(--text3); }
  .cart-items { flex:1; overflow-y:auto; padding:1.5rem; display:flex; flex-direction:column; gap:1rem; }
  .cart-item { display:flex; gap:12px; align-items:center; padding:12px; background:var(--bg); border-radius:12px; }
  .cart-item-icon { width:52px; height:52px; background:var(--bg2); border-radius:10px; display:flex; align-items:center; justify-content:center; font-size:24px; flex-shrink:0; }
  .cart-item-info { flex:1; min-width:0; }
  .cart-item-info strong { font-size:14px; color:var(--wood-dark); display:block; white-space:nowrap; overflow:hidden; text-overflow:ellipsis; }
  .cart-item-info span { font-size:12px; color:var(--text3); }
  .cart-item-price { font-weight:700; color:var(--wood); font-size:14px; white-space:nowrap; }
  .cart-item-remove { background:none; border:none; cursor:pointer; font-size:16px; color:var(--text3); }
  .cart-footer { padding:1.5rem; border-top:1px solid var(--border); }
  .cart-total { display:flex; justify-content:space-between; align-items:center; margin-bottom:1rem; }
  .cart-total span { font-size:15px; color:var(--text2); }
  .cart-total strong { font-family:'Playfair Display',serif; font-size:1.4rem; color:var(--wood-dark); }
  .cart-empty { text-align:center; padding:3rem 0; color:var(--text3); font-size:15px; }
  .cart-empty .emo { font-size:3rem; display:block; margin-bottom:1rem; }

  /* PEMESANAN */
  .pemesanan-section { background:var(--bg2); }
  .pesan-grid { display:grid; grid-template-columns:1fr 1fr; gap:3rem; align-items:start; }
  .pesan-form { background:var(--white); border-radius:20px; padding:2rem; border:1px solid var(--border); }
  .form-group { margin-bottom:1.25rem; }
  .form-group label { display:block; font-size:13px; font-weight:600; color:var(--text2); margin-bottom:.4rem; text-transform:uppercase; letter-spacing:.04em; }
  .form-group input, .form-group select, .form-group textarea {
    width:100%; padding:12px 14px; border-radius:10px;
    border:1.5px solid var(--border); background:var(--bg);
    font-family:'DM Sans',sans-serif; font-size:14px; color:var(--text);
    transition:border-color .2s; outline:none;
  }
  .form-group input:focus, .form-group select:focus, .form-group textarea:focus { border-color:var(--wood); background:var(--white); }
  .form-group textarea { resize:vertical; min-height:100px; }
  .form-row { display:grid; grid-template-columns:1fr 1fr; gap:12px; }
  .pesan-info { display:flex; flex-direction:column; gap:1.5rem; }
  .info-card { background:var(--white); border-radius:16px; padding:1.5rem; border:1px solid var(--border); }
  .info-card h4 { font-family:'Playfair Display',serif; font-size:1.1rem; color:var(--wood-dark); margin-bottom:1rem; }
  .step-list { list-style:none; display:flex; flex-direction:column; gap:.75rem; }
  .step-list li { display:flex; gap:12px; align-items:flex-start; }
  .step-num { width:24px; height:24px; background:var(--wood-dark); color:var(--white); border-radius:50%; font-size:11px; font-weight:700; display:flex; align-items:center; justify-content:center; flex-shrink:0; margin-top:2px; }
  .step-list li span { font-size:14px; color:var(--text2); line-height:1.5; }

  /* ADMIN DASHBOARD */
  .admin-section { background:var(--surface); }
  .admin-section .section-tag { background:var(--bg); }
  .stats-grid { display:grid; grid-template-columns:repeat(4,1fr); gap:16px; margin-bottom:2.5rem; }
  .stat-card { background:var(--white); border-radius:16px; padding:1.5rem; border:1px solid var(--border); }
  .stat-card .st-label { font-size:12px; font-weight:600; text-transform:uppercase; letter-spacing:.05em; color:var(--text3); margin-bottom:.5rem; }
  .stat-card .st-val { font-family:'Playfair Display',serif; font-size:1.8rem; color:var(--wood-dark); font-weight:700; }
  .stat-card .st-change { font-size:12px; margin-top:.25rem; }
  .stat-card .st-change.up { color:var(--accent2); }
  .stat-card .st-change.down { color:#C0392B; }
  .admin-grid { display:grid; grid-template-columns:2fr 1fr; gap:24px; }
  .admin-card { background:var(--white); border-radius:16px; padding:1.5rem; border:1px solid var(--border); }
  .admin-card h4 { font-size:15px; font-weight:600; color:var(--wood-dark); margin-bottom:1.25rem; padding-bottom:.75rem; border-bottom:1px solid var(--border); }
  .order-table { width:100%; border-collapse:collapse; font-size:13px; }
  .order-table th { text-align:left; font-size:11px; text-transform:uppercase; letter-spacing:.05em; color:var(--text3); padding:0 .75rem .75rem; font-weight:600; }
  .order-table td { padding:.75rem; border-bottom:1px solid var(--border); color:var(--text2); }
  .order-table tr:last-child td { border:none; }
  .status-badge { display:inline-block; padding:3px 10px; border-radius:999px; font-size:11px; font-weight:600; }
  .status-badge.pending { background:#FEF3C7; color:#92400E; }
  .status-badge.proses { background:#DBEAFE; color:#1E40AF; }
  .status-badge.selesai { background:#D1FAE5; color:#065F46; }
  .status-badge.batal { background:#FEE2E2; color:#991B1B; }
  .top-produk { display:flex; flex-direction:column; gap:1rem; }
  .top-p-row { display:flex; align-items:center; gap:12px; }
  .top-p-icon { width:40px; height:40px; background:var(--bg); border-radius:10px; display:flex; align-items:center; justify-content:center; font-size:20px; flex-shrink:0; }
  .top-p-info { flex:1; min-width:0; }
  .top-p-info strong { font-size:13px; color:var(--wood-dark); display:block; }
  .top-p-info span { font-size:11px; color:var(--text3); }
  .top-p-val { font-size:13px; font-weight:600; color:var(--wood); white-space:nowrap; }
  .bar-wrap { height:4px; background:var(--bg2); border-radius:2px; margin-top:4px; }
  .bar-fill { height:100%; background:var(--wood); border-radius:2px; transition:width .5s; }

  /* TOAST */
  .toast {
    position:fixed; bottom:2rem; right:2rem; z-index:3000;
    background:var(--wood-dark); color:var(--white); padding:14px 20px;
    border-radius:12px; font-size:14px; font-weight:500;
    transform:translateY(100px); opacity:0; transition:all .3s;
    display:flex; align-items:center; gap:10px; max-width:300px;
  }
  .toast.show { transform:translateY(0); opacity:1; }

  /* FOOTER */
  footer {
    background:var(--wood-dark); color:rgba(255,255,255,.7);
    padding:4rem 2rem 2rem;
  }
  .footer-grid { display:grid; grid-template-columns:2fr 1fr 1fr 1fr; gap:3rem; max-width:1200px; margin:0 auto; }
  .footer-brand { font-family:'Playfair Display',serif; font-size:20px; color:var(--white); margin-bottom:.75rem; }
  .footer-desc { font-size:14px; line-height:1.7; color:rgba(255,255,255,.55); }
  .footer-col h4 { color:var(--white); font-size:14px; font-weight:600; margin-bottom:1rem; text-transform:uppercase; letter-spacing:.05em; }
  .footer-col ul { list-style:none; display:flex; flex-direction:column; gap:.6rem; }
  .footer-col ul li a { font-size:14px; color:rgba(255,255,255,.55); text-decoration:none; transition:color .2s; }
  .footer-col ul li a:hover { color:var(--wood-light); }
  .footer-bottom { max-width:1200px; margin:3rem auto 0; padding-top:1.5rem; border-top:1px solid rgba(255,255,255,.1); display:flex; justify-content:space-between; font-size:13px; align-items:center; }
  .footer-contact { font-size:14px; color:rgba(255,255,255,.55); display:flex; flex-direction:column; gap:.5rem; margin-top:1.25rem; }
  .footer-contact a { color:var(--wood-light); text-decoration:none; }

  /* ACTIVE NAV LOGIC */
  .page { display:none; }
  .page.active { display:block; }
  .nav-active { color:var(--wood-dark) !important; font-weight:600 !important; border-bottom:2px solid var(--wood) !important; padding-bottom:2px !important; }

  /* SCROLL REVEAL */
  .reveal { opacity:0; transform:translateY(30px); transition:opacity .6s ease, transform .6s ease; }
  .reveal.visible { opacity:1; transform:none; }

  @media (max-width:768px) {
    .hero { grid-template-columns:1fr; }
    .hero-right { display:none; }
    .kategori-grid, .produk-grid, .fitur-grid { grid-template-columns:repeat(2,1fr); }
    .stats-grid, .admin-grid { grid-template-columns:1fr; }
    .pesan-grid { grid-template-columns:1fr; }
    .footer-grid { grid-template-columns:1fr 1fr; }
  }
</style>
</head>
<body>

<!-- NAVBAR -->
<nav>
  <div class="nav-logo" onclick="showPage('home')" style="cursor:pointer">
    <div class="nav-logo-icon">
      <svg viewBox="0 0 24 24"><path d="M5 3h14a2 2 0 012 2v14a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2zm7 4a1 1 0 00-1 1v4H7a1 1 0 000 2h4v4a1 1 0 002 0v-4h4a1 1 0 000-2h-4V8a1 1 0 00-1-1z"/></svg>
    </div>
    <div>
      <div class="nav-brand">UD. Ivan <span>Interior</span></div>
    </div>
  </div>
  <div class="nav-links">
    <a href="#" id="nav-home" class="nav-active" onclick="showPage('home');return false">Beranda</a>
    <a href="#" id="nav-katalog" onclick="showPage('katalog');return false">Katalog</a>
    <a href="#" id="nav-pesan" onclick="showPage('pesan');return false">Pemesanan</a>
    <a href="#" id="nav-admin" onclick="showPage('admin');return false">Dashboard Admin</a>
  </div>
  <div style="display:flex;align-items:center;gap:1rem">
    <div class="nav-cart" onclick="toggleCart()">
      🛒
      <div class="cart-badge" id="cartCount">0</div>
    </div>
    <a href="#" class="btn btn-primary" onclick="showPage('pesan');return false">Pesan Sekarang</a>
  </div>
</nav>

<!-- CART SIDEBAR -->
<div class="cart-sidebar" id="cartSidebar">
  <div class="cart-head">
    <h3>Keranjang Belanja</h3>
    <button class="cart-close" onclick="toggleCart()">✕</button>
  </div>
  <div class="cart-items" id="cartItems">
    <div class="cart-empty"><span class="emo">🛒</span>Keranjang masih kosong</div>
  </div>
  <div class="cart-footer">
    <div class="cart-total">
      <span>Total Harga</span>
      <strong id="cartTotal">Rp 0</strong>
    </div>
    <button class="btn btn-primary" style="width:100%;justify-content:center;padding:14px" onclick="showPage('pesan');toggleCart()">Lanjut ke Pemesanan →</button>
  </div>
</div>

<!-- TOAST -->
<div class="toast" id="toast">✓ <span id="toastMsg">Produk ditambahkan!</span></div>

<!-- PAGE: HOME -->
<div class="page active" id="page-home">
  <!-- HERO -->
  <div class="hero">
    <div class="hero-left">
      <div class="hero-tag">Katalog Digital Terlengkap</div>
      <h1 class="hero-title">Furnitur <em>Premium</em> untuk Hunian Impianmu</h1>
      <p class="hero-desc">UD. Ivan Interior menghadirkan koleksi furnitur kayu berkualitas tinggi dengan harga terjangkau. Temukan ribuan pilihan untuk ruang tamu, kamar, dan dapur Anda.</p>
      <div class="hero-cta">
        <a href="#" class="btn btn-primary" onclick="showPage('katalog');return false">Lihat Katalog</a>
        <a href="#" class="btn btn-outline" style="color:rgba(255,255,255,.8);border-color:rgba(255,255,255,.3)" onclick="showPage('pesan');return false">Hubungi Kami</a>
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

  <!-- KATEGORI -->
  <section style="background:var(--bg)">
    <div class="container">
      <div class="section-head reveal">
        <div class="section-tag">Kategori Produk</div>
        <h2 class="section-title">Temukan Produk Sesuai Kebutuhanmu</h2>
        <p class="section-desc">Kami menyediakan berbagai kategori produk interior dari bahan kayu pilihan berkualitas tinggi.</p>
      </div>
      <div class="kategori-grid reveal">
        <a href="#" class="kat-card" onclick="showPage('katalog');return false">
          <div class="kat-icon">🛋️</div>
          <h3>Ruang Tamu</h3>
          <p>45 produk</p>
        </a>
        <a href="#" class="kat-card" onclick="showPage('katalog');return false">
          <div class="kat-icon">🛏️</div>
          <h3>Kamar Tidur</h3>
          <p>38 produk</p>
        </a>
        <a href="#" class="kat-card" onclick="showPage('katalog');return false">
          <div class="kat-icon">🍽️</div>
          <h3>Ruang Makan</h3>
          <p>29 produk</p>
        </a>
        <a href="#" class="kat-card" onclick="showPage('katalog');return false">
          <div class="kat-icon">🚪</div>
          <h3>Pintu & Lemari</h3>
          <p>52 produk</p>
        </a>
      </div>
    </div>
  </section>

  <!-- FITUR -->
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

  <!-- CTA -->
  <section style="background:var(--bg)">
    <div class="container">
      <div class="cta-banner reveal">
        <div class="cta-text">
          <h2>Siap Memperindah Rumahmu?</h2>
          <p>Konsultasikan kebutuhan interior rumahmu bersama kami. Tim kami siap membantu menemukan produk yang tepat sesuai budget dan selera Anda.</p>
        </div>
        <div class="cta-btns">
          <a href="#" class="btn btn-outline" style="color:rgba(255,255,255,.8);border-color:rgba(255,255,255,.3)" onclick="showPage('katalog');return false">Lihat Katalog</a>
          <a href="https://wa.me/628123456789" class="btn btn-accent">WhatsApp Kami</a>
        </div>
      </div>
    </div>
  </section>
</div>

<!-- PAGE: KATALOG -->
<div class="page" id="page-katalog" style="margin-top:64px;padding:3rem 2rem;background:var(--bg);min-height:100vh">
  <div class="container">
    <div style="margin-bottom:2rem;display:flex;align-items:center;justify-content:space-between">
      <div>
        <div class="section-tag" style="text-align:left;display:inline-block">Katalog Digital</div>
        <h2 class="section-title" style="text-align:left;margin-top:.5rem">Semua Produk</h2>
      </div>
      <div style="display:flex;gap:12px;align-items:center">
        <input placeholder="🔍  Cari produk..." style="padding:10px 14px;border-radius:10px;border:1.5px solid var(--border);background:var(--white);font-family:'DM Sans',sans-serif;font-size:14px;outline:none;width:220px" oninput="filterSearch(this.value)">
      </div>
    </div>

    <div class="produk-filter" id="filterBtns">
      <button class="filter-btn active" onclick="filterKat('Semua',this)">Semua</button>
      <button class="filter-btn" onclick="filterKat('Ruang Tamu',this)">Ruang Tamu</button>
      <button class="filter-btn" onclick="filterKat('Kamar Tidur',this)">Kamar Tidur</button>
      <button class="filter-btn" onclick="filterKat('Ruang Makan',this)">Ruang Makan</button>
      <button class="filter-btn" onclick="filterKat('Lemari & Rak',this)">Lemari & Rak</button>
      <button class="filter-btn" onclick="filterKat('Aksesoris',this)">Aksesoris</button>
    </div>

    <div class="produk-grid" id="produkGrid">
      <!-- Rendered by JS -->
    </div>
  </div>
</div>

<!-- PAGE: PESAN -->
<div class="page" id="page-pesan" style="margin-top:64px;min-height:100vh">
  <section class="pemesanan-section">
    <div class="container">
      <div class="section-head">
        <div class="section-tag">Pemesanan</div>
        <h2 class="section-title">Form Pemesanan Produk</h2>
        <p class="section-desc">Isi form di bawah ini untuk memesan produk. Tim kami akan menghubungi Anda dalam 1×24 jam.</p>
      </div>
      <div class="pesan-grid">
        <div class="pesan-form">
          <h3 style="font-family:'Playfair Display',serif;font-size:1.3rem;color:var(--wood-dark);margin-bottom:1.5rem">Detail Pemesanan</h3>
          <div class="form-row">
            <div class="form-group">
              <label>Nama Lengkap</label>
              <input type="text" placeholder="Masukkan nama Anda">
            </div>
            <div class="form-group">
              <label>No. Telepon</label>
              <input type="tel" placeholder="08xx-xxxx-xxxx">
            </div>
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="email" placeholder="email@contoh.com">
          </div>
          <div class="form-group">
            <label>Alamat Pengiriman</label>
            <textarea placeholder="Jl. Contoh No. 123, Batam..."></textarea>
          </div>
          <div class="form-row">
            <div class="form-group">
              <label>Produk yang Dipesan</label>
              <select>
                <option value="">-- Pilih Produk --</option>
                <option>Sofa Minimalis 3 Dudukan</option>
                <option>Lemari Pakaian 3 Pintu</option>
                <option>Meja Makan Set 6 Kursi</option>
                <option>Tempat Tidur Queen Size</option>
                <option>Rak Buku Minimalis</option>
                <option>Meja Kerja dengan Laci</option>
              </select>
            </div>
            <div class="form-group">
              <label>Jumlah (unit)</label>
              <input type="number" placeholder="1" min="1" value="1">
            </div>
          </div>
          <div class="form-group">
            <label>Catatan Tambahan</label>
            <textarea placeholder="Warna, ukuran custom, atau catatan lain..."></textarea>
          </div>
          <div class="form-group">
            <label>Metode Pembayaran</label>
            <select>
              <option>Transfer Bank (BCA / Mandiri)</option>
              <option>Bayar di Tempat (COD)</option>
              <option>QRIS</option>
            </select>
          </div>
          <button class="btn btn-primary" style="width:100%;justify-content:center;padding:14px;font-size:15px" onclick="submitPesan()">
            Kirim Pesanan →
          </button>
        </div>
        <div class="pesan-info">
          <div class="info-card">
            <h4>Alur Pemesanan</h4>
            <ul class="step-list">
              <li><div class="step-num">1</div><span>Isi form pemesanan dengan data lengkap dan produk yang diinginkan</span></li>
              <li><div class="step-num">2</div><span>Tim kami menghubungi Anda untuk konfirmasi pesanan dan perhitungan biaya</span></li>
              <li><div class="step-num">3</div><span>Lakukan pembayaran sesuai metode yang dipilih</span></li>
              <li><div class="step-num">4</div><span>Produk diproses dan diproduksi dalam 7-14 hari kerja</span></li>
              <li><div class="step-num">5</div><span>Pengiriman ke alamat Anda dengan penanganan profesional</span></li>
            </ul>
          </div>
          <div class="info-card">
            <h4>Informasi Toko</h4>
            <div style="font-size:14px;color:var(--text2);display:flex;flex-direction:column;gap:.75rem">
              <div>📍 <strong style="color:var(--wood-dark)">Alamat:</strong> Batam, Kepulauan Riau</div>
              <div>📞 <strong style="color:var(--wood-dark)">Telepon:</strong> <a href="tel:08123456789" style="color:var(--wood)">0812-3456-789</a></div>
              <div>💬 <strong style="color:var(--wood-dark)">WhatsApp:</strong> <a href="https://wa.me/628123456789" style="color:var(--wood)">Chat Sekarang</a></div>
              <div>🕐 <strong style="color:var(--wood-dark)">Jam Kerja:</strong> Senin–Sabtu, 08.00–17.00 WIB</div>
            </div>
          </div>
          <div class="info-card" style="background:var(--wood-dark);border:none">
            <h4 style="color:var(--white)">Garansi Kami</h4>
            <div style="font-size:14px;color:rgba(255,255,255,.7);display:flex;flex-direction:column;gap:.6rem">
              <div>✅ Material kayu berkualitas terjamin</div>
              <div>✅ Pengerjaan rapi dan presisi</div>
              <div>✅ Garansi kerusakan 6 bulan</div>
              <div>✅ Revisi desain gratis 1x</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<!-- PAGE: ADMIN -->
<div class="page" id="page-admin" style="margin-top:64px;min-height:100vh">
  <section class="admin-section">
    <div class="container">
      <div style="margin-bottom:2.5rem;display:flex;align-items:center;justify-content:space-between">
        <div>
          <div class="section-tag">Panel Admin</div>
          <h2 class="section-title" style="text-align:left;margin-top:.4rem">Dashboard Manajemen</h2>
        </div>
        <div style="display:flex;gap:12px">
          <button class="btn btn-outline" style="font-size:13px">📦 Tambah Produk</button>
          <button class="btn btn-primary" style="font-size:13px">📊 Laporan</button>
        </div>
      </div>

      <div class="stats-grid">
        <div class="stat-card">
          <div class="st-label">Total Pesanan</div>
          <div class="st-val">128</div>
          <div class="st-change up">↑ 12% bulan ini</div>
        </div>
        <div class="stat-card">
          <div class="st-label">Total Pendapatan</div>
          <div class="st-val">Rp 86 Jt</div>
          <div class="st-change up">↑ 8% bulan ini</div>
        </div>
        <div class="stat-card">
          <div class="st-label">Produk Aktif</div>
          <div class="st-val">164</div>
          <div class="st-change up">↑ 5 produk baru</div>
        </div>
        <div class="stat-card">
          <div class="st-label">Pelanggan</div>
          <div class="st-val">521</div>
          <div class="st-change up">↑ 23 baru</div>
        </div>
      </div>

      <div class="admin-grid">
        <div class="admin-card">
          <h4>Daftar Pesanan Terbaru</h4>
          <table class="order-table">
            <thead>
              <tr>
                <th>No. Pesanan</th>
                <th>Pelanggan</th>
                <th>Produk</th>
                <th>Total</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              <tr><td>#ORD-0128</td><td>Andi Pratama</td><td>Sofa Minimalis</td><td>Rp 3.200.000</td><td><span class="status-badge proses">Diproses</span></td></tr>
              <tr><td>#ORD-0127</td><td>Sari Dewi</td><td>Lemari 3 Pintu</td><td>Rp 2.800.000</td><td><span class="status-badge pending">Pending</span></td></tr>
              <tr><td>#ORD-0126</td><td>Budi Santoso</td><td>Meja Makan Set</td><td>Rp 5.500.000</td><td><span class="status-badge selesai">Selesai</span></td></tr>
              <tr><td>#ORD-0125</td><td>Rina Marlina</td><td>Tempat Tidur</td><td>Rp 4.200.000</td><td><span class="status-badge selesai">Selesai</span></td></tr>
              <tr><td>#ORD-0124</td><td>Doni Rahman</td><td>Rak Buku</td><td>Rp 1.200.000</td><td><span class="status-badge batal">Dibatalkan</span></td></tr>
            </tbody>
          </table>
        </div>
        <div class="admin-card">
          <h4>Produk Terlaris</h4>
          <div class="top-produk">
            <div class="top-p-row">
              <div class="top-p-icon">🛋️</div>
              <div class="top-p-info">
                <strong>Sofa Minimalis</strong>
                <span>38 terjual</span>
                <div class="bar-wrap"><div class="bar-fill" style="width:90%"></div></div>
              </div>
              <div class="top-p-val">Rp 3,2 Jt</div>
            </div>
            <div class="top-p-row">
              <div class="top-p-icon">🚪</div>
              <div class="top-p-info">
                <strong>Lemari 3 Pintu</strong>
                <span>32 terjual</span>
                <div class="bar-wrap"><div class="bar-fill" style="width:75%"></div></div>
              </div>
              <div class="top-p-val">Rp 2,8 Jt</div>
            </div>
            <div class="top-p-row">
              <div class="top-p-icon">🍽️</div>
              <div class="top-p-info">
                <strong>Meja Makan Set</strong>
                <span>24 terjual</span>
                <div class="bar-wrap"><div class="bar-fill" style="width:60%"></div></div>
              </div>
              <div class="top-p-val">Rp 5,5 Jt</div>
            </div>
            <div class="top-p-row">
              <div class="top-p-icon">🛏️</div>
              <div class="top-p-info">
                <strong>Tempat Tidur</strong>
                <span>19 terjual</span>
                <div class="bar-wrap"><div class="bar-fill" style="width:45%"></div></div>
              </div>
              <div class="top-p-val">Rp 4,2 Jt</div>
            </div>
            <div class="top-p-row">
              <div class="top-p-icon">📚</div>
              <div class="top-p-info">
                <strong>Rak Buku</strong>
                <span>15 terjual</span>
                <div class="bar-wrap"><div class="bar-fill" style="width:35%"></div></div>
              </div>
              <div class="top-p-val">Rp 1,2 Jt</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<!-- MODAL PRODUK -->
<div class="modal-overlay" id="modalOverlay" onclick="closeModal(event)">
  <div class="modal" id="modalContent">
    <button class="modal-close" onclick="closeModal()">✕</button>
    <div id="modalBody"></div>
  </div>
</div>

<!-- FOOTER -->
<footer>
  <div class="footer-grid">
    <div>
      <div class="footer-brand">UD. Ivan Interior</div>
      <p class="footer-desc">Menyediakan furnitur kayu berkualitas tinggi untuk hunian impian Anda sejak 2021. Berbasis di Batam, Kepulauan Riau.</p>
      <div class="footer-contact">
        <span>📞 0812-3456-789</span>
        <a href="mailto:ivan.interior@email.com">✉️ ivan.interior@email.com</a>
        <span>📍 Batam, Kepulauan Riau</span>
      </div>
    </div>
    <div class="footer-col">
      <h4>Produk</h4>
      <ul>
        <li><a href="#">Ruang Tamu</a></li>
        <li><a href="#">Kamar Tidur</a></li>
        <li><a href="#">Ruang Makan</a></li>
        <li><a href="#">Lemari & Rak</a></li>
      </ul>
    </div>
    <div class="footer-col">
      <h4>Layanan</h4>
      <ul>
        <li><a href="#">Custom Order</a></li>
        <li><a href="#">Konsultasi Desain</a></li>
        <li><a href="#">Pemasangan</a></li>
        <li><a href="#">Garansi</a></li>
      </ul>
    </div>
    <div class="footer-col">
      <h4>Informasi</h4>
      <ul>
        <li><a href="#">Tentang Kami</a></li>
        <li><a href="#">Cara Pemesanan</a></li>
        <li><a href="#">Syarat & Ketentuan</a></li>
        <li><a href="#">Kontak</a></li>
      </ul>
    </div>
  </div>
  <div class="footer-bottom">
    <span>© 2026 UD. Ivan Interior. Semua hak dilindungi.</span>
    <span>Sistem Informasi Penjualan Interior — Muhammad Ramadhaniar Saputra</span>
  </div>
</footer>

<script>
const produkData = [
  { id:1, nama:'Sofa Minimalis 3 Dudukan', kat:'Ruang Tamu', harga:3200000, ikon:'🛋️', badge:'Terlaris', desc:'Sofa kayu jati dengan bantalan busa premium, cocok untuk ruang tamu modern minimalis.', spek:{Material:'Kayu Jati',Dimensi:'200 x 85 x 75 cm',Warna:'Coklat Natural',Finishing:'Melamine Doff',Garansi:'6 bulan'} },
  { id:2, nama:'Lemari Pakaian 3 Pintu', kat:'Kamar Tidur', harga:2800000, ikon:'🚪', badge:'', desc:'Lemari kayu dengan 3 pintu geser, dilengkapi cermin dan rak-rak yang luas dan praktis.', spek:{Material:'Kayu Mahoni',Dimensi:'150 x 55 x 200 cm',Pintu:'3 Pintu Geser',Cermin:'Included',Garansi:'6 bulan'} },
  { id:3, nama:'Meja Makan Set 6 Kursi', kat:'Ruang Makan', harga:5500000, ikon:'🍽️', badge:'New', desc:'Set meja makan kayu solid lengkap dengan 6 kursi berdesain elegan untuk keluarga besar.', spek:{Material:'Kayu Trembesi',Dimensi:'180 x 90 x 76 cm',Kursi:'6 unit',Kapasitas:'6-8 orang',Garansi:'6 bulan'} },
  { id:4, nama:'Tempat Tidur Queen Size', kat:'Kamar Tidur', harga:4200000, ikon:'🛏️', badge:'', desc:'Ranjang kayu solid dengan headboard ukiran indah, cocok untuk kamar tidur utama.', spek:{Material:'Kayu Jati',Ukuran:'160 x 200 cm',Headboard:'Ukiran Custom',Laci:'2 unit',Garansi:'6 bulan'} },
  { id:5, nama:'Rak Buku Minimalis 5 Susun', kat:'Lemari & Rak', harga:1200000, ikon:'📚', badge:'', desc:'Rak buku kayu minimalis 5 susun dengan desain simpel dan modern, cocok untuk ruang kerja.', spek:{Material:'Kayu Pinus',Dimensi:'80 x 30 x 180 cm',Susun:'5 level',Beban:'Maks. 10 kg/susun',Garansi:'3 bulan'} },
  { id:6, nama:'Meja Kerja dengan Laci', kat:'Aksesoris', harga:1850000, ikon:'🪑', badge:'New', desc:'Meja kerja kayu dengan 3 laci samping dan lubang kabel, ideal untuk home office modern.', spek:{Material:'Kayu MDF Premium',Dimensi:'120 x 60 x 75 cm',Laci:'3 unit',Kabel:'Cable hole',Garansi:'3 bulan'} },
  { id:7, nama:'Kursi Santai Kayu Rotan', kat:'Ruang Tamu', harga:950000, ikon:'🪑', badge:'', desc:'Kursi santai dengan anyaman rotan natural, ringan dan nyaman untuk bersantai.', spek:{Material:'Kayu + Rotan',Dimensi:'65 x 70 x 90 cm',Berat:'5 kg',Kapasitas:'120 kg',Garansi:'3 bulan'} },
  { id:8, nama:'Nakas Set 2 Laci', kat:'Kamar Tidur', harga:680000, ikon:'🗃️', badge:'', desc:'Nakas mini dengan 2 laci untuk samping tempat tidur, desain bersih dan fungsional.', spek:{Material:'Kayu Mahoni',Dimensi:'45 x 35 x 55 cm',Laci:'2 unit',Handel:'Brass finish',Garansi:'3 bulan'} },
  { id:9, nama:'Meja Tamu Kaca Kayu', kat:'Ruang Tamu', harga:1450000, ikon:'🧊', badge:'', desc:'Meja tamu kombinasi kayu dan kaca tempered, tampilan modern dan elegan.', spek:{Material:'Kayu + Kaca 8mm',Dimensi:'100 x 55 x 40 cm',Kaca:'Tempered 8mm',Style:'Modern Minimalis',Garansi:'6 bulan'} },
];

let cart = [];
let currentFilter = 'Semua';
let searchQuery = '';

function formatRp(n) {
  return 'Rp ' + n.toLocaleString('id-ID');
}

function renderProduk() {
  const grid = document.getElementById('produkGrid');
  let data = produkData;
  if (currentFilter !== 'Semua') data = data.filter(p => p.kat === currentFilter);
  if (searchQuery) data = data.filter(p => p.nama.toLowerCase().includes(searchQuery.toLowerCase()));
  if (!data.length) { grid.innerHTML = '<div style="grid-column:1/-1;text-align:center;padding:4rem;color:var(--text3)">Produk tidak ditemukan.</div>'; return; }
  grid.innerHTML = data.map(p => `
    <div class="produk-card reveal" onclick="openModal(${p.id})">
      <div class="produk-img">
        <span style="font-size:5rem">${p.ikon}</span>
        ${p.badge ? `<div class="produk-badge ${p.badge==='New'?'new':''}">${p.badge}</div>` : ''}
        <div class="produk-wishlist" onclick="event.stopPropagation();wishlist(${p.id})">♡</div>
      </div>
      <div class="produk-body">
        <div class="produk-cat">${p.kat}</div>
        <div class="produk-name">${p.nama}</div>
        <div class="produk-desc">${p.desc.substring(0,80)}...</div>
        <div class="produk-footer">
          <div class="produk-price">${formatRp(p.harga)}<small>/ unit</small></div>
          <button class="btn btn-primary btn-cart" onclick="event.stopPropagation();addCart(${p.id})">+ Keranjang</button>
        </div>
      </div>
    </div>
  `).join('');
  setTimeout(() => {
    document.querySelectorAll('.reveal').forEach(el => {
      const ob = new IntersectionObserver(e => { if(e[0].isIntersecting) { el.classList.add('visible'); ob.disconnect(); } }, {threshold:.1});
      ob.observe(el);
    });
  }, 50);
}

function filterKat(kat, btn) {
  currentFilter = kat;
  document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
  btn.classList.add('active');
  renderProduk();
}

function filterSearch(val) {
  searchQuery = val;
  renderProduk();
}

function openModal(id) {
  const p = produkData.find(x => x.id === id);
  if (!p) return;
  const spekRows = Object.entries(p.spek).map(([k,v]) => `<div class="modal-spec-row"><span class="key">${k}</span><span class="val">${v}</span></div>`).join('');
  document.getElementById('modalBody').innerHTML = `
    <div class="modal-grid">
      <div class="modal-img"><span style="font-size:8rem">${p.ikon}</span></div>
      <div>
        <div class="modal-cat">${p.kat}</div>
        <div class="modal-name">${p.nama}</div>
        <div class="modal-price">${formatRp(p.harga)}</div>
        <div class="modal-desc">${p.desc}</div>
        <div class="modal-specs">${spekRows}</div>
        <div class="qty-ctrl">
          <button class="qty-btn" onclick="changeQty(-1)">−</button>
          <div class="qty-num" id="qtyNum">1</div>
          <button class="qty-btn" onclick="changeQty(1)">+</button>
          <span style="font-size:14px;color:var(--text3)">unit</span>
        </div>
        <div style="display:flex;gap:12px">
          <button class="btn btn-primary" style="flex:1;justify-content:center;padding:13px" onclick="addCartModal(${p.id})">+ Tambah ke Keranjang</button>
          <button class="btn btn-outline" style="padding:13px 16px" onclick="wishlist(${p.id})">♡</button>
        </div>
      </div>
    </div>
  `;
  document.getElementById('modalOverlay').classList.add('open');
}

let modalQty = 1;
function changeQty(d) {
  modalQty = Math.max(1, modalQty + d);
  document.getElementById('qtyNum').textContent = modalQty;
}

function closeModal(e) {
  if (!e || e.target === document.getElementById('modalOverlay')) {
    document.getElementById('modalOverlay').classList.remove('open');
    modalQty = 1;
  }
}

function addCart(id) {
  const p = produkData.find(x => x.id === id);
  const existing = cart.find(c => c.id === id);
  if (existing) existing.qty++;
  else cart.push({...p, qty:1});
  updateCartUI();
  showToast('✓ ' + p.nama + ' ditambahkan ke keranjang!');
}

function addCartModal(id) {
  const p = produkData.find(x => x.id === id);
  const existing = cart.find(c => c.id === id);
  if (existing) existing.qty += modalQty;
  else cart.push({...p, qty:modalQty});
  updateCartUI();
  closeModal();
  showToast('✓ ' + p.nama + ' x' + modalQty + ' ditambahkan!');
}

function updateCartUI() {
  document.getElementById('cartCount').textContent = cart.reduce((a,c) => a+c.qty, 0);
  const items = document.getElementById('cartItems');
  if (!cart.length) {
    items.innerHTML = '<div class="cart-empty"><span class="emo">🛒</span>Keranjang masih kosong</div>';
    document.getElementById('cartTotal').textContent = 'Rp 0';
    return;
  }
  items.innerHTML = cart.map(c => `
    <div class="cart-item">
      <div class="cart-item-icon">${c.ikon}</div>
      <div class="cart-item-info">
        <strong>${c.nama}</strong>
        <span>${formatRp(c.harga)} × ${c.qty}</span>
      </div>
      <div class="cart-item-price">${formatRp(c.harga * c.qty)}</div>
      <button class="cart-item-remove" onclick="removeCart(${c.id})">✕</button>
    </div>
  `).join('');
  const total = cart.reduce((a,c) => a + c.harga * c.qty, 0);
  document.getElementById('cartTotal').textContent = formatRp(total);
}

function removeCart(id) {
  cart = cart.filter(c => c.id !== id);
  updateCartUI();
}

function toggleCart() {
  document.getElementById('cartSidebar').classList.toggle('open');
}

function wishlist(id) {
  const p = produkData.find(x => x.id === id);
  showToast('♡ ' + p.nama + ' disimpan ke wishlist!');
}

function showToast(msg) {
  const t = document.getElementById('toast');
  document.getElementById('toastMsg').textContent = msg;
  t.classList.add('show');
  setTimeout(() => t.classList.remove('show'), 3000);
}

function submitPesan() {
  showToast('✓ Pesanan berhasil dikirim! Kami akan segera menghubungi Anda.');
}

function showPage(page) {
  document.querySelectorAll('.page').forEach(p => p.classList.remove('active'));
  document.getElementById('page-' + page).classList.add('active');
  document.querySelectorAll('.nav-links a').forEach(a => a.classList.remove('nav-active'));
  document.getElementById('nav-' + page).classList.add('nav-active');
  window.scrollTo(0, 0);
  if (page === 'katalog') renderProduk();
}

// Scroll reveal
const observer = new IntersectionObserver((entries) => {
  entries.forEach(e => { if (e.isIntersecting) { e.target.classList.add('visible'); observer.unobserve(e.target); } });
}, { threshold: 0.1 });
document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

// Init
renderProduk();
</script>
</body>
</html>
