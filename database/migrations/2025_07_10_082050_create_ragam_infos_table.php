<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('ragam_infos', function (Blueprint $table) {
            $table->id(); // Kolom ID unik untuk setiap info
            $table->string('title'); // Kolom untuk judul artikel
            $table->longText('content'); // Kolom untuk isi artikel yang panjang
            $table->string('image')->nullable(); // Kolom untuk path/nama file gambar (bisa dikosongkan)
            
            // Kolom untuk menghubungkan ke tabel 'users' (admin yang membuat)
            // constrained() akan otomatis mengambil nama tabel dan kolom dari model User
            // onDelete('cascade') berarti jika user dihapus, semua info yang dibuatnya juga akan terhapus
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            
            // Kolom ini otomatis membuat `created_at` (tanggal upload) dan `updated_at`
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('ragam_infos');
    }
};
