<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
  
  <x-header :title="'Kegiatan Masjid Jami Al-Ikhlas'"
    />

<div class="mx-auto max-w-7xl px-4 py-4 sm:px-6 lg:px-8">
        <div class="bg-white p-8 rounded-xl shadow-xl mt-8">
            <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 mb-8 text-center">Kegiatan Unggulan Kami</h2>
            <p class="text-lg text-gray-700 text-center mb-10 max-w-3xl mx-auto">
                Masjid Jami' Al-Ikhlash selain memperingati Hari Besar, Santunan anak Yatim, piatu, dan Duafa. ada kegiatan yang dilaksanakan secara rutin guna membina jamaah dalam aspek keagamaan dan sosial. 
            </p>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                {{-- Kartu Kegiatan Kuliah Subuh --}}
                <a href="{{ route('kegiatan.kuliah-subuh') }}" class="block">
                    <div class="bg-gray-50 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden">
                        <img src="{{ asset('img/kuliah-subuh.png') }}" alt="Gambar Kuliah Subuh" class="w-full h-48 object-cover rounded-t-xl">
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Kuliah Subuh</h3>
                            <p class="text-gray-700 text-sm">Mengawali hari dengan ilmu dan kebersamaan, setiap Ahad pagi.</p>
                            <span class="mt-4 inline-block text-green-600 hover:text-green-700 font-semibold">Baca Selengkapnya &rarr;</span>
                        </div>
                    </div>
                </a>

                {{-- Kartu Kegiatan Pengajian Ibu-ibu --}}
                <a href="{{ route('kegiatan.ibu-ibu') }}" class="block">
                    <div class="bg-gray-50 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden">
                        <img src="{{ asset('img/muslimah1.jpg') }}" alt="Gambar Pengajian Ibu-ibu" class="w-full h-48 object-cover rounded-t-xl">
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Pengajian Ibu-ibu</h3>
                            <p class="text-gray-700 text-sm">Menjalin ukhuwah dan menambah ilmu agama khusus ibu-ibu, setiap Jumat siang.</p>
                            <span class="mt-4 inline-block text-green-600 hover:text-green-700 font-semibold">Baca Selengkapnya &rarr;</span>
                        </div>
                    </div>
                </a>

                {{-- Kartu Kegiatan Peringatan Hari Besar Islam --}}
                <a href="{{ route('kegiatan.hari-besar') }}" class="block">
                    <div class="bg-gray-50 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden">
                        <img src="{{ asset('img/hari-besar.jpg') }}" onerror="this.onerror=null;this.src='https://placehold.co/600x400/E5E7EB/1F2937?text=Gambar';" alt="Gambar Hari Besar Islam" class="w-full h-48 object-cover rounded-t-xl">
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Pengajian Bulanan</h3>
                            <p class="text-gray-700 text-sm">Pengajian yang dilaksanakan pada bulan-bulan tertentu.</p>
                            <span class="mt-4 inline-block text-green-600 hover:text-green-700 font-semibold">Baca Selengkapnya &rarr;</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
</div>

</x-layout>
