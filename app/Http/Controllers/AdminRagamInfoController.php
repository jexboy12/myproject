<?php

namespace App\Http\Controllers;

use App\Models\RagamInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AdminRagamInfoController extends Controller
{
    /**
     * Menampilkan halaman dasbor dengan daftar semua artikel.
     */
    public function index()
    {
        // Diubah dari get() menjadi paginate(10) untuk 10 artikel per halaman di dasbor
        $posts = RagamInfo::with('user')->latest()->paginate(10);

        return view('dashboard', ['posts' => $posts]);
    }

    /**
     * Menampilkan formulir untuk membuat artikel baru.
     */
    public function create()
    {
        return view('admin.ragam-info.create');
    }

    /**
     * Menyimpan artikel baru ke database.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('ragam-info-images', 'public');
            $validated['image'] = $imagePath;
        }

        $validated['user_id'] = Auth::id();
        RagamInfo::create($validated);

        return redirect()->route('dashboard')->with('success', 'Artikel berhasil ditambahkan!');
    }

    /**
     * Menampilkan formulir untuk mengedit artikel.
     */
    public function edit(RagamInfo $ragamInfo)
    {
        return view('admin.ragam-info.edit', ['post' => $ragamInfo]);
    }

    /**
     * Memperbarui artikel di database.
     */
    public function update(Request $request, RagamInfo $ragamInfo)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($ragamInfo->image) {
                Storage::disk('public')->delete($ragamInfo->image);
            }
            $imagePath = $request->file('image')->store('ragam-info-images', 'public');
            $validated['image'] = $imagePath;
        }

        $ragamInfo->update($validated);

        return redirect()->route('dashboard')->with('success', 'Artikel berhasil diperbarui!');
    }

    /**
     * Menghapus artikel dari database.
     */
    public function destroy(RagamInfo $ragamInfo)
    {
        // Hapus gambar dari penyimpanan jika ada
        if ($ragamInfo->image) {
            Storage::disk('public')->delete($ragamInfo->image);
        }

        // Hapus data dari database
        $ragamInfo->delete();

        // Redirect kembali ke dashboard dengan pesan sukses
        return redirect()->route('dashboard')->with('success', 'Artikel berhasil dihapus!');
    }
}
