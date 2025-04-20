<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BahanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bahan')->insert([
            // Resep 1
            ['resep_id' => 1, 'nama_bahan' => 'Nasi putih', 'jumlah' => '1 piring', 'created_at' => now(), 'updated_at' => now()],
            ['resep_id' => 1, 'nama_bahan' => 'Bawang putih', 'jumlah' => '2 siung', 'created_at' => now(), 'updated_at' => now()],
            ['resep_id' => 1, 'nama_bahan' => 'Kecap manis', 'jumlah' => '1 sdm', 'created_at' => now(), 'updated_at' => now()],
            ['resep_id' => 1, 'nama_bahan' => 'Telur', 'jumlah' => '1 butir', 'created_at' => now(), 'updated_at' => now()],
            ['resep_id' => 1, 'nama_bahan' => 'Minyak goreng', 'jumlah' => '2 sdm', 'created_at' => now(), 'updated_at' => now()],
            
            // Resep 2
            ['resep_id' => 2, 'nama_bahan' => 'Ayam potong', 'jumlah' => '500 gram', 'created_at' => now(), 'updated_at' => now()],
            ['resep_id' => 2, 'nama_bahan' => 'Bawang putih', 'jumlah' => '4 siung', 'created_at' => now(), 'updated_at' => now()],
            ['resep_id' => 2, 'nama_bahan' => 'Ketumbar bubuk', 'jumlah' => '1 sdt', 'created_at' => now(), 'updated_at' => now()],
            ['resep_id' => 2, 'nama_bahan' => 'Tepung beras', 'jumlah' => '3 sdm', 'created_at' => now(), 'updated_at' => now()],
            ['resep_id' => 2, 'nama_bahan' => 'Minyak goreng', 'jumlah' => '500 ml', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
