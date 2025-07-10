<x-layout>
    <x-header :title="'Halaman Beranda Baru'" /> {{-- Menggunakan komponen header Anda --}}

    <div class="max-w-4xl mx-auto py-10 px-4">
        <h1 class="text-2xl font-bold mb-4">Ini Adalah Halaman Beranda Tambahan</h1>
        <p class="text-gray-700 leading-relaxed">
            Halaman ini dibuat sebagai contoh halaman terpisah yang tidak muncul di navigasi utama.
            Anda bisa menggunakan halaman ini untuk tujuan khusus, seperti halaman promo,
            halaman landing, atau informasi event tertentu.
        </p>
        <p class="mt-4 text-gray-700 leading-relaxed">
            URL untuk halaman ini akan unik dan bisa dibagikan secara langsung.
        </p>
        {{-- Tambahkan konten lain yang Anda inginkan di sini --}}
    </div>
</x-layout>