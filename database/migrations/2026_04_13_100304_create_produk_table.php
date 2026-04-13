<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('produk', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kategori_id')->constrained('kategori')->onDelete('cascade');
            $table->string('nama_produk');
            $table->text('deskripsi');
            $table->json('spesifikasi')->nullable(); // Format JSON agar spesifikasi fleksibel
            $table->decimal('harga', 15, 2); // 15 digit total, 2 angka di belakang koma
            $table->string('gambar')->nullable();
            $table->string('status_label')->nullable(); // Contoh: New, Terlaris
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('produk');
    }
};