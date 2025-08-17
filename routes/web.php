<?php

use App\Http\Controllers\AdminRagamInfoController;
use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\RagamInfoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DokumentasiController;
use App\Http\Controllers\PublicProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminGalleryController;

/*
|--------------------------------------------------------------------------
| Rute Publik (Bisa Diakses Siapa Saja)
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/profile', function () {
    return view('profile.sejarah', ['title' => 'Profil Masjid']);
})->name('profile');

Route::get('/prima', function () {
    return view('prima', ['title' => 'Prima']);
})->name('prima');

Route::get('/kegiatan', function () {
    return view('kegiatan', ['title' => 'Kegiatan']);
})->name('kegiatan');

Route::get('/layanan', function () {
    return view('layanan', ['title' => 'Layanan']);
})->name('layanan');

Route::get('/kontak', function () {
    return view('kontak', ['title' => 'Kontak']);
})->name('kontak');


// --- Rute untuk Ragam Info (Publik) ---
Route::get('/ragam-info', [RagamInfoController::class, 'index'])->name('ragam.info');
Route::get('/ragam-info/{ragamInfo}', [RagamInfoController::class, 'show'])->name('ragam.info.show');
Route::get('/profile', [PublicProfileController::class, 'index'])->name('profile');

// --- Rute untuk Galeri Video (Publik) ---
Route::get('/dokumentasi/video', [DokumentasiController::class, 'index'])->name('dokumentasi.video');

// --- Rute untuk Submenu (Publik) ---
Route::view('/profile/sejarah', 'profile.sejarah')->name('profile.sejarah');
Route::view('/profile/pewakaf', 'profile.pewakaf')->name('profile.pewakaf');
Route::view('/profile/visi-misi', 'profile.visi-misi')->name('profile.visi');
Route::view('/profile/struktural', 'profile.struktural')->name('profile.struktural');
Route::view('/profile/imam-muadzin', 'profile.imam-muadzin')->name('profile.imam');
Route::view('/prima/sejarah', 'prima.sejarah')->name('prima.sejarah');
Route::view('/prima/visi-misi', 'prima.visi-misi')->name('prima.visi-misi');
Route::view('/prima/pengurus', 'prima.pengurus')->name('prima.pengurus');
Route::view('/kegiatan/kuliah-subuh', 'kegiatan.kuliah-subuh')->name('kegiatan.kuliah-subuh');
Route::view('/kegiatan/ibu-ibu', 'kegiatan.ibu-ibu')->name('kegiatan.ibu-ibu');
Route::view('/kegiatan/hari-besar', 'kegiatan.hari-besar')->name('kegiatan.hari-besar');
Route::view('/layanan/akad-nikah', 'layanan.akad-nikah')->name('layanan.akad-nikah');
Route::view('/layanan/muallaf', 'layanan.muallaf')->name('layanan.muallaf');
Route::view('/beranda-baru', 'halaman-beranda')->name('halaman.beranda.baru');


/*
|--------------------------------------------------------------------------
| Rute yang Membutuhkan Login
|--------------------------------------------------------------------------
*/

// --- Rute untuk semua pengguna yang sudah login (termasuk admin) ---
// Ini adalah rute profil umum yang bisa diakses oleh setiap pengguna yang login (termasuk admin)
// Jika /admin/profile tidak lagi diperlukan karena admin akan menggunakan /dashboard untuk profilnya,
// maka bagian ini bisa dihapus atau disesuaikan. Untuk saat ini, kita anggap tetap ada untuk non-admin.
Route::middleware('auth')->group(function () {
    Route::get('/admin/profile', [AdminProfileController::class, 'edit'])->name('admin.profile.edit');
    Route::patch('/admin/profile', [AdminProfileController::class, 'update'])->name('admin.profile.update');
    Route::delete('/admin/profile', [AdminProfileController::class, 'destroy'])->name('admin.profile.destroy');
});


// --- Rute yang hanya bisa diakses oleh ADMIN ---
Route::middleware(['auth', 'verified', 'is_admin'])->group(function () {
    // Dashboard utama admin (sekarang menjadi halaman profil admin)
    // URI /dashboard kini mengarah ke halaman profil admin.
    Route::get('/dashboard', [AdminProfileController::class, 'edit'])->name('dashboard');
    Route::patch('/dashboard/profile', [AdminProfileController::class, 'update'])->name('dashboard.profile.update'); // Update profile via new dashboard path
    Route::delete('/dashboard/profile', [AdminProfileController::class, 'destroy'])->name('dashboard.profile.destroy'); // Delete profile via new dashboard path

    // Rute untuk manajemen Galeri
    Route::prefix('admin/gallery')->name('admin.gallery.')->group(function () {
        Route::get('/', [AdminGalleryController::class, 'index'])->name('index');
        Route::post('/', [AdminGalleryController::class, 'store'])->name('store');
        Route::delete('/{galleryPost}', [AdminGalleryController::class, 'destroy'])->name('destroy');
    });

    // Grup untuk semua rute manajemen Ragam Info
    // Rute index Ragam Info dipindahkan ke sini
    Route::prefix('admin/ragam-info')->name('admin.ragam-info.')->group(function () {
        Route::get('/', [AdminRagamInfoController::class, 'index'])->name('index'); // New path for Ragam Info Management
        Route::get('/create', [AdminRagamInfoController::class, 'create'])->name('create');
        Route::post('/store', [AdminRagamInfoController::class, 'store'])->name('store');
        Route::get('/{ragamInfo}/edit', [AdminRagamInfoController::class, 'edit'])->name('edit');
        Route::patch('/{ragamInfo}', [AdminRagamInfoController::class, 'update'])->name('update');
        Route::delete('/{ragamInfo}', [AdminRagamInfoController::class, 'destroy'])->name('destroy');
    });
});

// Ini memuat semua rute bawaan untuk login, register, lupa password, dll.
require __DIR__.'/auth.php';