<x-layout>
    <x-slot name="title">{{ $title ?? 'Visi dan Misi' }}</x-slot>

    {{-- panggil komponen x-header  --}}
    <x-header
        :title="'Visi dan Misi PRIMA'" 
        :currentPageTitle="'Visi Misi'" 
    />

    <div class="mx-auto max-w-7xl px-4 py-3 sm:px-6 lg:px-8">
        <div class="bg-white p-8 rounded-xl shadow-xl mt-8">
            <h2 class="text-3xl font-bold text-gray-900 mb-6 border-b-2 border-green-600 pb-2">Visi</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-start mb-8">
                {{-- Kolom Kiri: Teks Visi --}}
                <div class="md:col-span-2 prose max-w-none">
                    <p>
                        Menjadi pusat peradaban Islam yang rahmatan lil 'alamin, mewujudkan masyarakat madani yang beriman, bertakwa, berakhlak mulia, berilmu, dan peduli sosial.
                    </p>
                    <p class="italic text-gray-600">
                        Visi ini menjadi landasan setiap langkah dan program yang kami jalankan, demi terciptanya masyarakat yang berlandaskan nilai-nilai Islami.
                    </p>
                </div>
                {{-- Kolom Kanan: Foto Visi (ukuran lebih kecil) --}}
                <div class="md:col-span-1 flex justify-center items-center">
                    {{-- Menggunakan max-w-sm untuk mengecilkan gambar --}}
                    <img src="{{ asset('img/kegiatan3.png') }}" alt="Ilustrasi Visi Masjid" class="w-full h-auto max-w-sm rounded-lg shadow-md object-cover">
                </div>
            </div>

            {{-- Bagian Misi dengan Foto di Samping Kanan --}}
            <h2 class="text-3xl font-bold text-gray-900 mt-8 mb-6 border-b-2 border-green-600 pb-2">Misi</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-start mb-8">
                {{-- Kolom Kiri: Teks Misi (tanpa bold) --}}
                <div class="md:col-span-2 prose max-w-none">
                    <ol class="list-decimal list-inside space-y-2">
                        <li>Membina pribadi muslim untuk mencapai akhlaq yang mulia.</li>
                        <li>Mengembangkan potensi kreatif, keilmuan, sosial dan budaya.</li>
                        <li>Mewadahi pengembangan moral, karakter, ilmu pengetahuan, dan teknologi.</li>
                        <li>Memajukan kehidupan Jamaah Masjid dalam mengamalkan dinnul islam dalam kehidupan pribadi, bermasyarakat dan bernegara.</li>
                        <li>Memperkuat ukhuwah Islamiyah dan ukhuwah insaniyah.</li>
                        <li>Berperan aktif dalam menyelesaikan permasalahan umat dan berkontribusi positif bagi kemajuan Jamaah Masjid.</li>
                        <li>Melakukan kegiatan syiar islam untuk mendorong kemajuan umat.</li>
                        <li>Melakukan kegiatan pengajian dan pengkajian terhadap Alquran dan Sunnah untuk dapat diamalkan dalam kehidupan sehari-hari.</li>
                        <li>Mengakrabkan nilai-nilai Islam di kalangan remaja dengan pendekatan yang dinamis.</li>
                    </ol>
                </div>
                {{-- Kolom Kanan: Foto Misi (ukuran lebih kecil) --}}
                <div class="md:col-span-1 flex justify-center items-center">
                    {{-- Menggunakan max-w-sm untuk mengecilkan gambar. Anda bisa mengganti 'masjid-misi.jpg' dengan gambar lain jika ada. --}}
                    <img src="{{ asset('img/kegiatan2.png') }}" alt="Ilustrasi Misi Masjid" class="w-full h-auto max-w-sm rounded-lg shadow-md object-cover">
                </div>
            </div>

        </div>
    </div>
</x-layout>