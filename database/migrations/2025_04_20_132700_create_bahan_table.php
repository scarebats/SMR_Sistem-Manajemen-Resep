<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bahan', function (Blueprint $table) {
            $table->id();  // Untuk kolom 'id' yang auto increment
            $table->unsignedBigInteger('resep_id');  // Kolom 'resep_id' sebagai foreign key
            $table->string('nama_bahan');  // Kolom 'nama_bahan' dengan VARCHAR(255)
            $table->string('jumlah', 100)->nullable();  // Kolom 'jumlah' dengan VARCHAR(100) yang nullable
            $table->timestamps();  // Kolom 'created_at' dan 'updated_at'

            // Definisikan foreign key
            $table->foreign('resep_id')->references('id')->on('resep')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bahan');
    }
};
