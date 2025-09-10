<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    {{-- Menambahkan header yang konsisten --}}
    <x-header :title="'Layanan Masjid Jami Al-Ikhlas'" />

    <div class="mx-auto max-w-7xl px-4 py-4 sm:px-6 lg:px-8">
        <div class="bg-white p-8 rounded-xl shadow-xl mt-8">
            <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 mb-8 text-center">Layanan Umat</h2>
            <p class="text-lg text-gray-700 text-center mb-10 max-w-3xl mx-auto">
                Kami berkomitmen untuk melayani dan memfasilitasi kebutuhan jamaah dalam berbagai aspek keagamaan dan sosial.
            </p>

            {{-- Menggunakan layout grid yang sama seperti halaman Kegiatan & Prima --}}
            {{-- Menggunakan lg:grid-cols-2 dan justify-center untuk menengahkan 2 kartu di layar besar --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-8 justify-center">

                {{-- Kartu untuk Layanan Akad Nikah --}}
                <a href="{{ route('layanan.akad-nikah') }}" class="block">
                    <div class="bg-gray-50 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden">
                        {{-- Ganti gambar di folder public/img/ --}}
                        <img src="{{ asset('img/layanan-nikah.png') }}" onerror="this.onerror=null;this.src='https://placehold.co/600x400/E5E7EB/1F2937?text=Akad+Nikah';" alt="Gambar Layanan Akad Nikah" class="w-full h-48 object-cover rounded-t-xl">
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Acara Akad Nikah</h3>
                            <p class="text-gray-700 text-sm">Menyediakan fasilitas dan dukungan untuk menyelenggarakan momen sakral pernikahan yang berkah.</p>
                            <span class="mt-4 inline-block text-green-600 hover:text-green-700 font-semibold">Lihat Detail &rarr;</span>
                        </div>
                    </div>
                </a>

                {{-- Kartu untuk Layanan Muallaf --}}
                <a href="{{ route('layanan.muallaf') }}" class="block">
                    <div class="bg-gray-50 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden">
                        {{-- Ganti gambar di folder public/img/ --}}
                        <img src="{{ asset('img/layanan-muallaf.jpg') }}" onerror="this.onerror=null;this.src='https://placehold.co/600x400/E5E7EB/1F2937?text=Muallaf';" alt="Gambar Layanan Muallaf" class="w-full h-48 object-cover rounded-t-xl">
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Pembinaan Muallaf</h3>
                            <p class="text-gray-700 text-sm">Mendampingi langkah awal saudara baru kami dalam memeluk dan memahami ajaran Islam.</p>
                            <span class="mt-4 inline-block text-green-600 hover:text-green-700 font-semibold">Lihat Detail &rarr;</span>
                        </div>
                    </div>
                </a>

            </div>
        </div>
    </div>

</x-layout>