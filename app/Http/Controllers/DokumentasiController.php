<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class DokumentasiController extends Controller
{
    public function index()
    {
        // Ambil API key dan Channel ID dari file config
        $apiKey = config('services.youtube.api_key');
        $channelId = config('services.youtube.channel_id');
        $maxResults = 9; // Jumlah video yang ingin ditampilkan

        // Buat kunci unik untuk cache
        $cacheKey = 'youtube_videos_' . $channelId;

        // Cek cache dulu, jika ada, ambil dari cache.
        // Jika tidak, ambil dari API dan simpan ke cache selama 4 jam (14400 detik).
        $videos = Cache::remember($cacheKey, 14400, function () use ($apiKey, $channelId, $maxResults) {
            $apiUrl = "https://www.googleapis.com/youtube/v3/search";

            try {
                $response = Http::get($apiUrl, [
                    'part' => 'snippet',
                    'channelId' => $channelId,
                    'maxResults' => $maxResults,
                    'order' => 'date', // Urutkan berdasarkan tanggal terbaru
                    'type' => 'video',
                    'key' => $apiKey,
                ]);

                if ($response->successful()) {
                    return $response->json()['items'];
                }

                return []; // Kembalikan array kosong jika API call gagal

            } catch (\Exception $e) {
                // Jika terjadi error (misal: tidak ada koneksi internet), kembalikan array kosong
                return [];
            }
        });

        return view('dokumentasi.video', [
            'title' => 'Galeri Video',
            'videos' => $videos
        ]);
    }
}