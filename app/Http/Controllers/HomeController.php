<?php

namespace App\Http\Controllers;

use App\Models\GalleryPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index()
    {
        // ID Kota untuk Jakarta (Anda bisa cari ID kota lain di Fathimah.id)
        $cityId = '1301'; 
        $today = Carbon::now()->format('Y/m/d');
        $cacheKey = "jadwal_sholat_{$cityId}_{$today}";

        $jadwal = Cache::remember($cacheKey, 43200, function () use ($cityId, $today) {
            try {
                $response = Http::get("https://api.myquran.com/v2/sholat/jadwal/{$cityId}/{$today}");

                if ($response->successful() && $response->json()['status']) {
                    return $response->json()['data']['jadwal'];
                }
                return null;
            } catch (\Exception $e) {
                return null;
            }
        });

        // REVISI: Format tanggalnya di sini
        $formattedDate = null;
        if ($jadwal) {
            // Mengubah '2025-07-11' menjadi 'Jumat, 11/07/2025'
            // Pastikan locale Indonesia sudah di-set di AppServiceProvider untuk 'Jumat'
            $formattedDate = Carbon::parse($jadwal['date'])->translatedFormat('l, d/m/Y');
        }

        $galleryPosts = GalleryPost::latest()->take(3)->get();

        return view('home', [
            'title' => 'Home',
            'jadwal' => $jadwal,
            'tanggalFormatted' => $formattedDate, // Kirim tanggal yang sudah diformat
            'galleryPosts' => $galleryPosts,
        ]);
    }
}