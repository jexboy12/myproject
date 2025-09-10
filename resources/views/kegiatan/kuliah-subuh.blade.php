<x-layout>
    <x-slot name="title">{{ $title ?? 'Kuliah Subuh' }}</x-slot>

    {{-- Hero Section untuk Layanan Jadi Muallaf --}}
    <div class="relative bg-green-600 h-72 flex items-center justify-center">
        <div class="absolute inset-0 bg-black opacity-30"></div>
        <div class="relative z-10 text-white text-center px-4">
            <h1 class="text-4xl md:text-5xl font-extrabold leading-tight mb-3">Pengajian Kuliah Subuh</h1>
            <p class="text-lg md:text-xl font-light max-w-2xl mx-auto">
                Mengawali Hari dengan Ilmu dan Kebersamaan
            </p>
        </div>
    </div>
    <div class="mx-auto max-w-7xl px-2 py-8 sm:px-6 lg:px-8">
        <div class="bg-white p-8 rounded-lg shadow-xl -mt-16 relative z-20">
            <h2 class="text-3xl font-bold text-gray-900 mb-6 border-b-2 border-green-600 pb-2 text-center">Kegiatan Mingguan Rutin Ahad Subuh</h2>

            <div class="md:flex md:space-x-8"> {{-- Menggunakan flexbox untuk layout dua kolom --}}
                <div class="md:w-2/3 prose max-w-none text-gray-700 leading-relaxed mb-8"> {{-- Konten artikel 2/3 lebar --}}
                    <p class="mb-4">
                        Kuliah Subuh adalah kegiatan rutin di Masjid Jami’ Al-Ikhlas yang dilaksanakan setiap hari Minggu pagi setelah Sholat Subuh. Acara ini terbuka untuk umum dan diikuti oleh jamaah dari berbagai kalangan, baik bapak-bapak maupun ibu-ibu, untuk mengisi pagi dengan ilmu, dzikir, dan kebersamaan.
                    </p>
                    <p class="mb-4">
                        Setiap minggu, masjid mengundang ustadz-ustadz berbeda untuk menyampaikan ceramah seputar keislaman dan kehidupan sehari-hari. Setelah kajian selesai, kegiatan dilanjutkan dengan makan pagi bersama sekitar pukul 06.00 WIB, menciptakan suasana yang akrab dan penuh keberkahan.
                    </p>
                    <p class="mb-4">
                        Kami mengajak seluruh warga untuk ikut meramaikan Kuliah Subuh ini. Mari mulai hari Minggu dengan ilmu dan silaturahim di Masjid Jami’ Al-Ikhlas.
                    </p>
                </div>
                
                <div class="md:w-1/3 mt-8 md:mt-0 flex justify-center items-start"> {{-- Gambar 1/3 lebar, rata kanan secara vertikal --}}
                    <img 
                        src="{{ asset('img/kuliah-subuh.png') }}" {{-- Ganti dengan path gambar Anda --}}
                        alt="Ilustrasi Kuliah Subuh" 
                        class="rounded-lg shadow-md max-w-full h-auto object-cover"
                    >
                </div>
            </div>
        </div>
    </div>
</x-layout>