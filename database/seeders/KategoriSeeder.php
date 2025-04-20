<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['kategori_kode' => 'FLG', 'kategori_nama' => 'Flagship Android'],
            ['kategori_kode' => 'MID', 'kategori_nama' => 'Mid-Range Android'],
            ['kategori_kode' => 'ENT', 'kategori_nama' => 'Entry-Level Android'],
            ['kategori_kode' => 'IPH', 'kategori_nama' => 'iPhone'],
            ['kategori_kode' => 'GMG', 'kategori_nama' => 'Gaming Phone'],
        ];

        DB::table('m_kategori')->insert($data);
    }
}
