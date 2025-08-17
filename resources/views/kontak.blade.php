<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-header
        :title="'Kontak'" {{-- Judul utama untuk header --}}
        :currentPageTitle="'Kontak'" {{-- Judul halaman saat ini untuk breadcrumb (akan menjadi Home / Kontak) --}}
    />

    {{-- Hero Section dengan Gambar Masjid --}}
    <div class="relative w-full h-96 overflow-hidden rounded-b-lg"> {{-- Menambahkan overflow-hidden untuk gambar --}}
        <img src="{{ asset('img/foto_kontak.png') }}" {{-- Ganti dengan path gambar masjid Anda --}}
             alt="Gambar Masjid"
             class="w-full h-full object-cover object-center"> {{-- Gambar akan memenuhi div --}}
        <div class="absolute inset-0 bg-black opacity-40 rounded-b-lg flex items-center justify-center"> {{-- Overlay dan teks di atas gambar --}}
            <h1 class="text-4xl md:text-5xl font-extrabold leading-tight text-white text-center">Hubungi Kami</h1>
        </div>
    </div>

    <div class="mx-auto max-w-7xl px-4 py-8 sm:px-6 lg:px-8">
        <div class="bg-white p-8 rounded-lg shadow-xl -mt-16 relative z-20">
            <h2 class="text-3xl font-bold text-gray-900 mb-6 border-b-2 border-green-600 pb-2 text-center">Informasi Kontak</h2>

            {{-- Bagian Tiga Kolom Berjajar --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center mb-12">
                {{-- Kolom 1: Alamat --}}
                <div class="flex flex-col items-center p-6 bg-gray-50 rounded-lg shadow-sm">
                    <div class="mb-4 text-green-600">
                        {{-- Ikon Lokasi --}}
                        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.727A8 8 0 0120 12c0-4.418-3.582-8-8-8S4 7.582 4 12c0 2.972 1.636 5.617 4.015 7.042C8.75 20.25 9.875 21 11.25 21h1.5c1.375 0 2.5-.75 3.235-1.958z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 12a3 3 0 100-6 3 3 0 000 6z"></path></svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Lokasi Kami</h3>
                    <p class="text-gray-700">Jalan Usman RT. 005 RW. 004 Kelapa Dua Wetan – Ciracas, Jakarta Timur 13730</p>
                </div>

                {{-- Kolom 2: Nomor Telepon (WhatsApp) --}}
                <div class="flex flex-col items-center p-6 bg-gray-50 rounded-lg shadow-sm">
                    <div class="mb-4 text-green-600">
                        {{-- Ikon Telepon --}}
                        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Telepon Kami</h3>
                    <a href="https://wa.me/6282123678056" target="_blank" class="text-blue-600 hover:underline">0821-2367-8056</a> {{-- Link WhatsApp --}}
                </div>

                {{-- Kolom 3: Email --}}
                <div class="flex flex-col items-center p-6 bg-gray-50 rounded-lg shadow-sm">
                    <div class="mb-4 text-green-600">
                        {{-- Ikon Email --}}
                        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Email Kami</h3>
                    <p class="text-gray-700">masjid.jamialikhlas@gmail.com</p>
                </div>
            </div>

            {{-- Bagian Peta --}}
           
            <h2 class="text-3xl font-bold text-gray-900 mb-6 border-b-2 border-green-600 pb-2 text-center mt-12">Lokasi Kami di Peta</h2>
            <div class="aspect-w-16 aspect-h-9 rounded-lg overflow-hidden shadow-lg">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!4v1754740874157!6m8!1m7!1sNhWdiloUu1QChSOju5UKBg!2m2!1d-6.334815108473601!2d106.8840513628845!3f336.221031332427!4f-1.700652127285423!5f0.7820865974627469"  {{-- Ganti dengan link embed Google Maps yang benar --}}
                    width="100%"
                    height="450"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
            
        </div>
    </div>
</x-layout>