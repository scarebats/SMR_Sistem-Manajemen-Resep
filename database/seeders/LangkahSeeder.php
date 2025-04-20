<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LangkahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('langkah')->insert([
            // Resep 1
            ['resep_id' => 1, 'urutan' => 1, 'deskripsi' => 'Panaskan minyak goreng di wajan.', 'created_at' => now(), 'updated_at' => now()],
            ['resep_id' => 1, 'urutan' => 2, 'deskripsi' => 'Tumis bawang putih sampai harum.', 'created_at' => now(), 'updated_at' => now()],
            ['resep_id' => 1, 'urutan' => 3, 'deskripsi' => 'Masukkan telur, orak-arik hingga matang.', 'created_at' => now(), 'updated_at' => now()],
            ['resep_id' => 1, 'urutan' => 4, 'deskripsi' => 'Tambahkan nasi, aduk rata.', 'created_at' => now(), 'updated_at' => now()],
            ['resep_id' => 1, 'urutan' => 5, 'deskripsi' => 'Tuang kecap manis, aduk kembali dan sajikan.', 'created_at' => now(), 'updated_at' => now()],
            
            // Resep 2
            ['resep_id' => 2, 'urutan' => 1, 'deskripsi' => 'Haluskan bawang putih dan ketumbar, lalu lumuri ayam.', 'created_at' => now(), 'updated_at' => now()],
            ['resep_id' => 2, 'urutan' => 2, 'deskripsi' => 'Rebus ayam sampai empuk dan bumbu meresap.', 'created_at' => now(), 'updated_at' => now()],
            ['resep_id' => 2, 'urutan' => 3, 'deskripsi' => 'Campurkan air rebusan ayam dengan tepung beras.', 'created_at' => now(), 'updated_at' => now()],
            ['resep_id' => 2, 'urutan' => 4, 'deskripsi' => 'Panaskan minyak, goreng ayam hingga kuning keemasan.', 'created_at' => now(), 'updated_at' => now()],
            ['resep_id' => 2, 'urutan' => 5, 'deskripsi' => 'Goreng adonan kremes hingga renyah, sajikan dengan ayam.', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
