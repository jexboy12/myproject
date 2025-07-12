<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <x-header :title="'Mengenal Masjid Jami Al-Ikhlash Lebih Dekat'" />

    <div class="mx-auto max-w-7xl px-4 py-4 sm:px-6 lg:px-8">
        <div class="bg-white p-8 rounded-xl shadow-xl mt-8">
            <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 mb-8 text-center">Profile Masjid</h2>
            <p class="text-lg text-gray-700 text-center mb-10 max-w-3xl mx-auto">
                Jelajahi sejarah, visi, struktur, serta para imam dan muadzin yang menjadi pilar di Masjid Jami' Al-Ikhlash.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                <a href="{{ route('profile.sejarah') }}" class="block"><div class="bg-gray-50 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden"><img src="{{ asset('img/profile-sejarah.jpg') }}" onerror="this.onerror=null;this.src='https://placehold.co/600x400/E5E7EB/1F2937?text=Sejarah';" alt="Sejarah Masjid" class="w-full h-48 object-cover"><div class="p-6"><h3 class="text-xl font-bold text-gray-900 mb-2">Sejarah Masjid</h3><p class="text-gray-700 text-sm">Perjalanan panjang berdirinya masjid kebanggaan kita bersama.</p><span class="mt-4 inline-block text-green-600 hover:text-green-700 font-semibold">Lihat Selengkapnya &rarr;</span></div></div></a>
                <a href="{{ route('profile.pewakaf') }}" class="block"><div class="bg-gray-50 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden"><img src="{{ asset('img/profile-pewakaf.jpg') }}" onerror="this.onerror=null;this.src='https://placehold.co/600x400/E5E7EB/1F2937?text=Pewakaf';" alt="Pewakaf Masjid" class="w-full h-48 object-cover"><div class="p-6"><h3 class="text-xl font-bold text-gray-900 mb-2">Pewakaf Masjid</h3><p class="text-gray-700 text-sm">Mengenal sosok dermawan yang telah mewakafkan hartanya.</p><span class="mt-4 inline-block text-green-600 hover:text-green-700 font-semibold">Lihat Selengkapnya &rarr;</span></div></div></a>
                <a href="{{ route('profile.visi') }}" class="block"><div class="bg-gray-50 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden"><img src="{{ asset('img/profile-visi.jpg') }}" onerror="this.onerror=null;this.src='https://placehold.co/600x400/E5E7EB/1F2937?text=Visi+Misi';" alt="Visi dan Misi" class="w-full h-48 object-cover"><div class="p-6"><h3 class="text-xl font-bold text-gray-900 mb-2">Visi dan Misi</h3><p class="text-gray-700 text-sm">Arah dan tujuan jangka panjang dalam memakmurkan masjid.</p><span class="mt-4 inline-block text-green-600 hover:text-green-700 font-semibold">Lihat Selengkapnya &rarr;</span></div></div></a>
                <a href="{{ route('profile.struktural') }}" class="block"><div class="bg-gray-50 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden"><img src="{{ asset('img/profile-struktur.jpg') }}" onerror="this.onerror=null;this.src='https://placehold.co/600x400/E5E7EB/1F2937?text=Struktur';" alt="Struktur Organisasi" class="w-full h-48 object-cover"><div class="p-6"><h3 class="text-xl font-bold text-gray-900 mb-2">Struktural Organisasi</h3><p class="text-gray-700 text-sm">Susunan kepengurusan Dewan Kemakmuran Masjid (DKM).</p><span class="mt-4 inline-block text-green-600 hover:text-green-700 font-semibold">Lihat Selengkapnya &rarr;</span></div></div></a>
                <a href="{{ route('profile.imam') }}" class="block"><div class="bg-gray-50 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden"><img src="{{ asset('img/profile-imam.jpg') }}" onerror="this.onerror=null;this.src='https://placehold.co/600x400/E5E7EB/1F2937?text=Imam';" alt="Imam dan Muadzin" class="w-full h-48 object-cover"><div class="p-6"><h3 class="text-xl font-bold text-gray-900 mb-2">Imam dan Muadzin</h3><p class="text-gray-700 text-sm">Para imam dan muadzin yang bertugas memimpin ibadah di masjid.</p><span class="mt-4 inline-block text-green-600 hover:text-green-700 font-semibold">Lihat Selengkapnya &rarr;</span></div></div></a>

            </div>
        </div>
    </div>
</x-layout>