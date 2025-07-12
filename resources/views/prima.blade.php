<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    
    {{-- Menambahkan header seperti di halaman Kegiatan --}}
    <x-header :title="'Mengenal PRIMA (Para Remaja Islam Masjid Al-Ikhlash)'" />

    <div class="mx-auto max-w-7xl px-4 py-4 sm:px-6 lg:px-8">
        <div class="bg-white p-8 rounded-xl shadow-xl mt-8">
            <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 mb-8 text-center">Jelajahi PRIMA</h2>
            <p class="text-lg text-gray-700 text-center mb-10 max-w-3xl mx-auto">
                Wadah bagi generasi muda Islam untuk berkarya, belajar, dan bertumbuh bersama dalam naungan Masjid Jami' Al-Ikhlash.
            </p>

            {{-- Mengadopsi layout grid dari halaman Kegiatan --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                {{-- Kartu untuk Sejarah PRIMA --}}
                <a href="{{ route('prima.sejarah') }}" class="block">
                    <div class="bg-gray-50 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden">
                        {{-- Anda bisa mengganti gambar ini di folder public/img/ --}}
                        <img src="{{ asset('img/prima-sejarah.jpg') }}" onerror="this.onerror=null;this.src='https://placehold.co/600x400/E5E7EB/1F2937?text=Sejarah+PRIMA';" alt="Gambar Sejarah PRIMA" class="w-full h-48 object-cover rounded-t-xl">
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Sejarah PRIMA</h3>
                            <p class="text-gray-700 text-sm">Menelusuri jejak langkah dan awal mula terbentuknya komunitas remaja masjid kami.</p>
                            <span class="mt-4 inline-block text-green-600 hover:text-green-700 font-semibold">Baca Selengkapnya &rarr;</span>
                        </div>
                    </div>
                </a>

                {{-- Kartu untuk Visi & Misi PRIMA --}}
                <a href="{{ route('prima.visi-misi') }}" class="block">
                    <div class="bg-gray-50 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden">
                         {{-- Anda bisa mengganti gambar ini di folder public/img/ --}}
                        <img src="{{ asset('img/prima-visi.jpg') }}" onerror="this.onerror=null;this.src='https://placehold.co/600x400/E5E7EB/1F2937?text=Visi+Misi';" alt="Gambar Visi Misi PRIMA" class="w-full h-48 object-cover rounded-t-xl">
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Visi & Misi</h3>
                            <p class="text-gray-700 text-sm">Memahami tujuan, cita-cita, dan arah gerak organisasi dalam memakmurkan masjid.</p>
                            <span class="mt-4 inline-block text-green-600 hover:text-green-700 font-semibold">Baca Selengkapnya &rarr;</span>
                        </div>
                    </div>
                </a>

                {{-- Kartu untuk Pengurus PRIMA --}}
                <a href="{{ route('prima.pengurus') }}" class="block">
                    <div class="bg-gray-50 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden">
                         {{-- Anda bisa mengganti gambar ini di folder public/img/ --}}
                        <img src="{{ asset('img/prima-pengurus.jpg') }}" onerror="this.onerror=null;this.src='https://placehold.co/600x400/E5E7EB/1F2937?text=Pengurus';" alt="Gambar Pengurus PRIMA" class="w-full h-48 object-cover rounded-t-xl">
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Ketua Pengurus</h3>
                            <p class="text-gray-700 text-sm">Mengenal lebih dekat para penggerak dan anggota yang aktif dalam kepengurusan.</p>
                            <span class="mt-4 inline-block text-green-600 hover:text-green-700 font-semibold">Baca Selengkapnya &rarr;</span>
                        </div>
                    </div>
                </a>

            </div>
        </div>
    </div>

</x-layout>