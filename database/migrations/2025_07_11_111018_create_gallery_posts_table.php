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
        Schema::create('gallery_posts', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable(); // Judul/deskripsi singkat gambar
            $table->string('image_path');      // Path untuk menyimpan lokasi gambar
            $table->integer('order')->default(0); // Untuk urutan tampilan
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gallery_posts');
    }
};
