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
        Schema::table('gallery_posts', function (Blueprint $table) {
            // Menambahkan kolom 'user_id' sebagai kunci asing yang merujuk ke tabel 'users'
            // Metode constrained() akan otomatis membuat foreign key ke kolom 'id' di tabel 'users'
            // onDelete('cascade') memastikan bahwa jika seorang user dihapus,
            // semua gambar yang diunggahnya juga akan ikut terhapus.
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('gallery_posts', function (Blueprint $table) {
            // Menghapus foreign key terlebih dahulu
            $table->dropForeign(['user_id']);
            // Menghapus kolom 'user_id'
            $table->dropColumn('user_id');
        });
    }
};