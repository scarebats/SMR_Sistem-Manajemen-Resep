<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResepSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('resep')->insert([
            [
                'id' => 1,
                'judul' => 'Nasi Goreng Sederhana',
                'deskripsi' => 'Resep nasi goreng sederhana yang enak dan mudah dibuat.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'judul' => 'Ayam Goreng Kremes',
                'deskripsi' => 'Ayam goreng dengan kremesan gurih dan renyah.',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
