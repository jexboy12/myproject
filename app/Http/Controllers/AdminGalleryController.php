<?php

namespace App\Http\Controllers;

use App\Models\GalleryPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminGalleryController extends Controller
{
    // Menampilkan halaman manajemen galeri
    public function index()
    {
        $galleryPosts = GalleryPost::orderBy('order')->get();
        return view('admin.gallery.index', compact('galleryPosts'));
    }

    // Menyimpan gambar baru
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'title' => 'nullable|string|max:255',
        ]);

        $imagePath = $request->file('image')->store('gallery-images', 'public');

        GalleryPost::create([
            'title' => $request->title,
            'image_path' => $imagePath,
        ]);

        return back()->with('success', 'Gambar berhasil diunggah!');
    }

    // Menghapus gambar
    public function destroy(GalleryPost $galleryPost)
    {
        // Hapus file gambar dari storage
        Storage::disk('public')->delete($galleryPost->image_path);
        // Hapus record dari database
        $galleryPost->delete();

        return back()->with('success', 'Gambar berhasil dihapus!');
    }
}