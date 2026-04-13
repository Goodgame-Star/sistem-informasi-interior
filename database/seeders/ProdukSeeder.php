<?php

namespace Database\Seeders;

use App\Models\Produk;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    public function run(): void
    {
        // Asumsi ID Kategori berdasarkan urutan di DatabaseSeeder:
        // 1: Ruang Tamu, 2: Kamar Tidur, 3: Ruang Makan, 4: Lemari & Rak, 5: Aksesoris

        $produk = [
            [
                'kategori_id' => 1,
                'nama_produk' => 'Sofa Minimalis 3 Dudukan',
                'deskripsi' => 'Sofa kayu jati dengan bantalan busa premium, cocok untuk ruang tamu modern minimalis.',
                'harga' => 3200000,
                'gambar' => '🛋️', // Disimpan sebagai teks/ikon untuk sementara sesuai HTML
                'status_label' => 'Terlaris',
                'spesifikasi' => [
                    'Material' => 'Kayu Jati',
                    'Dimensi' => '200 x 85 x 75 cm',
                    'Warna' => 'Coklat Natural',
                    'Finishing' => 'Melamine Doff',
                    'Garansi' => '6 bulan'
                ]
            ],
            [
                'kategori_id' => 2,
                'nama_produk' => 'Lemari Pakaian 3 Pintu',
                'deskripsi' => 'Lemari kayu dengan 3 pintu geser, dilengkapi cermin dan rak-rak yang luas dan praktis.',
                'harga' => 2800000,
                'gambar' => '🚪',
                'status_label' => null,
                'spesifikasi' => [
                    'Material' => 'Kayu Mahoni',
                    'Dimensi' => '150 x 55 x 200 cm',
                    'Pintu' => '3 Pintu Geser',
                    'Cermin' => 'Included',
                    'Garansi' => '6 bulan'
                ]
            ],
            [
                'kategori_id' => 3,
                'nama_produk' => 'Meja Makan Set 6 Kursi',
                'deskripsi' => 'Set meja makan kayu solid lengkap dengan 6 kursi berdesain elegan untuk keluarga besar.',
                'harga' => 5500000,
                'gambar' => '🍽️',
                'status_label' => 'New',
                'spesifikasi' => [
                    'Material' => 'Kayu Trembesi',
                    'Dimensi' => '180 x 90 x 76 cm',
                    'Kursi' => '6 unit',
                    'Kapasitas' => '6-8 orang',
                    'Garansi' => '6 bulan'
                ]
            ],
            [
                'kategori_id' => 2,
                'nama_produk' => 'Tempat Tidur Queen Size',
                'deskripsi' => 'Ranjang kayu solid dengan headboard ukiran indah, cocok untuk kamar tidur utama.',
                'harga' => 4200000,
                'gambar' => '🛏️',
                'status_label' => null,
                'spesifikasi' => [
                    'Material' => 'Kayu Jati',
                    'Ukuran' => '160 x 200 cm',
                    'Headboard' => 'Ukiran Custom',
                    'Laci' => '2 unit',
                    'Garansi' => '6 bulan'
                ]
            ],
            [
                'kategori_id' => 4,
                'nama_produk' => 'Rak Buku Minimalis 5 Susun',
                'deskripsi' => 'Rak buku kayu minimalis 5 susun dengan desain simpel dan modern, cocok untuk ruang kerja.',
                'harga' => 1200000,
                'gambar' => '📚',
                'status_label' => null,
                'spesifikasi' => [
                    'Material' => 'Kayu Pinus',
                    'Dimensi' => '80 x 30 x 180 cm',
                    'Susun' => '5 level',
                    'Beban' => 'Maks. 10 kg/susun',
                    'Garansi' => '3 bulan'
                ]
            ],
            [
                'kategori_id' => 5,
                'nama_produk' => 'Meja Kerja dengan Laci',
                'deskripsi' => 'Meja kerja kayu dengan 3 laci samping dan lubang kabel, ideal untuk home office modern.',
                'harga' => 1850000,
                'gambar' => '🪑',
                'status_label' => 'New',
                'spesifikasi' => [
                    'Material' => 'Kayu MDF Premium',
                    'Dimensi' => '120 x 60 x 75 cm',
                    'Laci' => '3 unit',
                    'Kabel' => 'Cable hole',
                    'Garansi' => '3 bulan'
                ]
            ],
            [
                'kategori_id' => 1,
                'nama_produk' => 'Kursi Santai Kayu Rotan',
                'deskripsi' => 'Kursi santai dengan anyaman rotan natural, ringan dan nyaman untuk bersantai.',
                'harga' => 950000,
                'gambar' => '🪑',
                'status_label' => null,
                'spesifikasi' => [
                    'Material' => 'Kayu + Rotan',
                    'Dimensi' => '65 x 70 x 90 cm',
                    'Berat' => '5 kg',
                    'Kapasitas' => '120 kg',
                    'Garansi' => '3 bulan'
                ]
            ],
            [
                'kategori_id' => 2,
                'nama_produk' => 'Nakas Set 2 Laci',
                'deskripsi' => 'Nakas mini dengan 2 laci untuk samping tempat tidur, desain bersih dan fungsional.',
                'harga' => 680000,
                'gambar' => '🗃️',
                'status_label' => null,
                'spesifikasi' => [
                    'Material' => 'Kayu Mahoni',
                    'Dimensi' => '45 x 35 x 55 cm',
                    'Laci' => '2 unit',
                    'Handel' => 'Brass finish',
                    'Garansi' => '3 bulan'
                ]
            ],
            [
                'kategori_id' => 1,
                'nama_produk' => 'Meja Tamu Kaca Kayu',
                'deskripsi' => 'Meja tamu kombinasi kayu dan kaca tempered, tampilan modern dan elegan.',
                'harga' => 1450000,
                'gambar' => '🧊',
                'status_label' => null,
                'spesifikasi' => [
                    'Material' => 'Kayu + Kaca 8mm',
                    'Dimensi' => '100 x 55 x 40 cm',
                    'Kaca' => 'Tempered 8mm',
                    'Style' => 'Modern Minimalis',
                    'Garansi' => '6 bulan'
                ]
            ],
        ];

        foreach ($produk as $item) {
            Produk::create($item);
        }
    }
}