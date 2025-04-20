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
        Schema::create('resep', function (Blueprint $table) {
            $table->id();  // Untuk kolom 'id' yang auto increment
            $table->string('judul');  // Kolom 'judul' dengan VARCHAR(255)
            $table->text('deskripsi')->nullable();  // Kolom 'deskripsi' nullable
            $table->timestamps();  // Kolom 'created_at' dan 'updated_at'
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resep');
    }
};
