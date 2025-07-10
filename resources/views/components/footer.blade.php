{{-- FOOTER SECTION (Sesuai Gambar Referensi) --}}
<footer class="bg-gray-900 text-white py-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row justify-between items-center md:items-start space-y-8 md:space-y-0">

        {{-- Bagian Kiri: Logo dan Deskripsi Teks --}}
        <div class="flex flex-col items-center md:items-start text-center md:text-left">
            <a href="{{ route('home') }}" class="mb-4">
                {{-- Pastikan img/logo.png ada, atau sesuaikan path-nya --}}
                <img src="{{ asset('img/logo.png') }}" alt="Logo Masjid" class="h-20 w-auto">
            </a>
            <h2 class="text-3xl font-bold text-white mb-2">MASJID JAMI' AL-IKHLASH</h2>
            <p class="text-gray-400 text-base">Media Masjid - Sejarah - Informasi - Kegiatan</p>
        </div>

        {{-- Bagian Kanan: Sosial Media Icons (Gambar Kustom) --}}
        <div class="flex space-x-4 md:space-x-6">
            {{-- Facebook --}}
            <a href="https://facebook.com/YOUR_FACEBOOK_PAGE" target="_blank" class="hover:opacity-75 transition-opacity duration-200">
                <img src="{{ asset('img/facebook.jpg') }}" alt="Facebook" class="h-8 w-8 object-contain">
            </a>
            {{-- X / Twitter --}}
            <a href="https://x.com/YOUR_X_USERNAME" target="_blank" class="hover:opacity-75 transition-opacity duration-200">
                <img src="{{ asset('img/x.jpg') }}" alt="X" class="h-8 w-8 object-contain">
            </a>
            {{-- WhatsApp --}}
            <a href="https://wa.me/6282123678056" target="_blank" class="hover:opacity-75 transition-opacity duration-200">
                <img src="{{ asset('img/whatsapp.jpg') }}" alt="WhatsApp" class="h-8 w-8 object-contain">
            </a>
            {{-- Instagram --}}
            <a href="https://www.instagram.com/" target="_blank" class="hover:opacity-75 transition-opacity duration-200">
                <img src="{{ asset('img/instagram.jpg') }}" alt="Telegram" class="h-8 w-8 object-contain">
            </a>
        </div>
    </div>

    {{-- Copyright --}}
    <div class="mt-8 pt-4 border-t border-gray-700 text-center text-gray-500 text-xs">
        © {{ date('Y') }} Masjid Jami' Al-Ikhlash. By Muhammad Rijal Fuadi
    </div>
</footer>