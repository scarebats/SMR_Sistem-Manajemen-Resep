<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    public function run()
    {
        DB::table('m_barang')->insert([
            // Kategori 1: Flagship Android
            ['kategori_id' => 1, 'barang_kode' => 'HP001', 'barang_nama' => 'Samsung Galaxy S24 Ultra', 'harga_beli' => 18000000, 'harga_jual' => 20000000],
            ['kategori_id' => 1, 'barang_kode' => 'HP002', 'barang_nama' => 'Google Pixel 8 Pro', 'harga_beli' => 16000000, 'harga_jual' => 18000000],

            // Kategori 2: Mid-Range Android
            ['kategori_id' => 2, 'barang_kode' => 'HP003', 'barang_nama' => 'Samsung Galaxy A55', 'harga_beli' => 5500000, 'harga_jual' => 6000000],
            ['kategori_id' => 2, 'barang_kode' => 'HP004', 'barang_nama' => 'Xiaomi Redmi Note 13 Pro', 'harga_beli' => 4500000, 'harga_jual' => 5000000],

            // Kategori 3: Entry-Level Android
            ['kategori_id' => 3, 'barang_kode' => 'HP005', 'barang_nama' => 'Realme C53', 'harga_beli' => 1800000, 'harga_jual' => 2000000],
            ['kategori_id' => 3, 'barang_kode' => 'HP006', 'barang_nama' => 'Infinix Hot 40i', 'harga_beli' => 1600000, 'harga_jual' => 1800000],

            // Kategori 4: iPhone
            ['kategori_id' => 4, 'barang_kode' => 'HP007', 'barang_nama' => 'iPhone 15 Pro Max', 'harga_beli' => 21000000, 'harga_jual' => 23000000],
            ['kategori_id' => 4, 'barang_kode' => 'HP008', 'barang_nama' => 'iPhone 13', 'harga_beli' => 12000000, 'harga_jual' => 13500000],

            // Kategori 5: Gaming Phone
            ['kategori_id' => 5, 'barang_kode' => 'HP009', 'barang_nama' => 'ASUS ROG Phone 8', 'harga_beli' => 16000000, 'harga_jual' => 17500000],
            ['kategori_id' => 5, 'barang_kode' => 'HP010', 'barang_nama' => 'Black Shark 5 Pro', 'harga_beli' => 14000000, 'harga_jual' => 15500000],
        ]);
    }
}
