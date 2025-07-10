<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
})->name('home');


Route::get('/profile', function () {
    return view('profile', ['title' => 'Profile']);
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

// Profil (Submenu)
Route::view('/profile/sejarah', 'profile.sejarah')->name('profile.sejarah');
Route::view('/profile/pewakaf', 'profile.pewakaf')->name('profile.pewakaf');
Route::view('/profile/visi-misi', 'profile.visi-misi')->name('profile.visi');
Route::view('/profile/struktural', 'profile.struktural')->name('profile.struktural'); 
Route::view('/profile/imam-muadzin', 'profile.imam-muadzin')->name('profile.imam');

// Prima (Submenu)
Route::view('/prima/sejarah', 'prima.sejarah')->name('prima.sejarah');
Route::view('/prima/visi-misi', 'prima.visi-misi')->name('prima.visi-misi');
Route::view('/prima/pengurus', 'prima.pengurus')->name('prima.pengurus');

// Kegiatan
Route::view('/kegiatan/kuliah-subuh', 'kegiatan.kuliah-subuh')->name('kegiatan.kuliah-subuh'); 
Route::view('/kegiatan/ibu-ibu', 'kegiatan.ibu-ibu')->name('kegiatan.ibu-ibu');
Route::view('/kegiatan/hari-besar', 'kegiatan.hari-besar')->name('kegiatan.hari-besar');

// Layanan
Route::view('/layanan/akad-nikah', 'layanan.akad-nikah')->name('layanan.akad-nikah');
Route::view('/layanan/muallaf', 'layanan.muallaf')->name('layanan.muallaf');

// Dokumentasi
Route::view('/dokumentasi/video', 'dokumentasi.video')->name('dokumentasi.video');

Route::view('/profile/sejarah', 'profile.sejarah')->name('profile.sejarah');

// Route untuk halaman beranda tambahan (tidak di navbar)
Route::view('/beranda-baru', 'halaman-beranda')->name('halaman.beranda.baru');

//Route::view('/kegiatan-masjid-al-ikhlash', 'kegiatan-masjid-al-ikhlash')->name('kegiatan-masjid-al-ikhlash');
