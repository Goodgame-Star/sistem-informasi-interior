@extends('layouts.app')

@section('content')
<div class="container" style="margin-top:120px; max-width: 600px;">
    @if(session('success'))
        <div style="background: #d4edda; color: #155724; padding: 1rem; border-radius: 8px; margin-bottom: 1rem;">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('pemesanan.store') }}" method="POST">
        @csrf
        <h3>Form Pemesanan Interior</h3>
        <input type="text" name="nama_pelanggan" placeholder="Nama Lengkap" required class="form-input">
        <input type="text" name="no_telepon" placeholder="Nomor WhatsApp" required class="form-input">
        <textarea name="alamat_pengiriman" placeholder="Alamat Lengkap" required class="form-input"></textarea>
        
        <select name="produk_id" required class="form-input">
            <option value="">Pilih Produk</option>
            @foreach($produk as $p)
                <option value="{{ $p->id }}">{{ $p->nama_produk }} - Rp {{ number_format($p->harga) }}</option>
            @endforeach
        </select>

        <input type="number" name="jumlah" value="1" min="1" class="form-input">
        
        <button type="submit" class="btn btn-primary" style="width: 100%;">Kirim Pesanan</button>
    </form>
</div>
@endsection