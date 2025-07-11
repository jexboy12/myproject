<?php

use App\Http\Controllers\AdminRagamInfoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RagamInfoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Rute Publik (Bisa Diakses Siapa Saja)
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
})->name('home');

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
Route::view('/dokumentasi/video', 'dokumentasi.video')->name('dokumentasi.video');
Route::view('/beranda-baru', 'halaman-beranda')->name('halaman.beranda.baru');


/*
|--------------------------------------------------------------------------
| Rute yang Membutuhkan Login
|--------------------------------------------------------------------------
*/

// --- Rute yang hanya bisa diakses oleh ADMIN ---
Route::middleware(['auth', 'verified', 'is_admin'])->group(function () {
    // Dasbor utama admin
    Route::get('/dashboard', [AdminRagamInfoController::class, 'index'])->name('dashboard');

    // Grup untuk semua rute manajemen Ragam Info
    Route::prefix('admin/ragam-info')->name('admin.ragam-info.')->group(function () {
        Route::get('/create', [AdminRagamInfoController::class, 'create'])->name('create');
        Route::post('/store', [AdminRagamInfoController::class, 'store'])->name('store');
        Route::get('/{ragamInfo}/edit', [AdminRagamInfoController::class, 'edit'])->name('edit');
        Route::patch('/{ragamInfo}', [AdminRagamInfoController::class, 'update'])->name('update');
        Route::delete('/{ragamInfo}', [AdminRagamInfoController::class, 'destroy'])->name('destroy');
    });
});

// --- Rute untuk semua pengguna yang sudah login (termasuk admin) ---
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Ini memuat semua rute bawaan untuk login, register, lupa password, dll.
require __DIR__.'/auth.php';