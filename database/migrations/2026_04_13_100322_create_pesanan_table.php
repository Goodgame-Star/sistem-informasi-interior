<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pesanan', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_pesanan')->unique(); // Contoh: ORD-0128
            $table->string('nama_pelanggan');
            $table->string('no_telepon');
            $table->string('email')->nullable();
            $table->text('alamat_pengiriman');
            $table->decimal('total_harga', 15, 2);
            $table->string('metode_pembayaran'); // Contoh: Transfer Bank, COD, QRIS
            $table->enum('status_pesanan', ['Pending', 'Diproses', 'Selesai', 'Dibatalkan'])->default('Pending');
            $table->text('catatan_tambahan')->nullable();
            $table->timestamp('tanggal_pesanan')->useCurrent();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pesanan');
    }
};