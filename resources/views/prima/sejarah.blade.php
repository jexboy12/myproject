<x-layout>
    <x-slot:title>Sejarah Prima - Masjid Jami' Al-Ikhlash</x-slot:title>

    {{-- panggil x-header dgn properti currentPageTitle --}}
    <x-header
        :title="'Sejarah PRIMA'"
        :currentPageTitle="'Sejarah Prima'" 
    />

    <div class="mx-auto max-w-7xl px-4 py-3 sm:px-6 lg:px-8">
        {{-- Menambahkan background putih dan shadow seperti di visi-misi.blade.php --}}
        <div class="bg-white p-8 rounded-xl shadow-xl mt-8">
            <div class="flex flex-col md:flex-row items-start gap-8">
                {{-- Bagian teks artikel --}}
                <div class="md:w-2/3 text-center md:text-left prose max-w-none text-gray-700 leading-relaxed">
                    <h2 class="text-3xl md:text-2xl font-bold text-gray-900 mb-6">
                        SEKILAS SEJARAH PRIMA
                    </h2>
                    <p class="mb-4">
                        PRIMA (Para Remaja Islam Masjid Al-Ikhlash) adalah komunitas remaja yang dibentuk dua tahun lalu sebagai wadah pembinaan dan pengembangan generasi muda Islam di lingkungan Masjid Al-Ikhlash. Berawal dari diskusi kecil para remaja yang peduli terhadap masjid dan lingkungannya, PRIMA hadir untuk menumbuhkan semangat cinta masjid, mempererat kebersamaan, dan membentuk karakter remaja yang beriman dan berakhlak mulia. Dengan dukungan dari DKM Al-Ikhlash, PRIMA resmi dibentuk dan mulai aktif dalam berbagai kegiatan positif.
                    </p>
                    <p>
                        Di awal perjalanan, PRIMA fokus pada kajian Al-Qur’an, pembinaan akhlak, dan kegiatan bersih-bersih masjid. Seiring waktu, kegiatan berkembang mencakup tadarus, hadroh, peringatan hari besar Islam, hingga menjadi muazin dan menjaga masjid. PRIMA juga mendorong kebiasaan berkumpul (majlas) di masjid sambil menunggu waktu sholat berjamaah. Semua ini menjadi bagian dari upaya menjadikan masjid sebagai rumah kedua bagi para remaja. Dengan semangat kebersamaan, PRIMA terus berkontribusi dalam syiar Islam dan membina generasi muda yang aktif, peduli, dan mencintai masjid.
                    </p>
                    <a href="{{ route('prima.visi-misi') }}"
                        class="mt-6 inline-block text-green-600 hover:text-green-800 font-semibold text-lg transition duration-300 ease-in-out">
                        VISI MISI PRIMA &rarr;
                    </a>
                </div>
    
                {{-- Bagian gambar, tetap di kanan dan dikecilkan --}}
                <div class="md:w-1/3 mt-8 md:mt-0 flex justify-center items-start">
                    <img src="{{ asset('img/prima.png') }}" alt="Gambar Prima"
                         class="rounded-lg w-full h-auto max-w-xs shadow-md object-cover"> {{-- max-w-xs untuk mengecilkan gambar --}}
                </div>
            </div>
        </div>
    </div>
</x-layout>
