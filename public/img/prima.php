<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="relative bg-cover bg-center h-96 md:h-screen flex items-center justify-center text-white"
        style="background-image: url('{{ asset('img/masjid_utama.jpg') }}');">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="relative z-10 text-center px-4">
            <h1 class="text-4xl md:text-6xl font-bold mb-4 animate-fade-in-up">
                Selamat Datang di Masjid Jami Al-Ikhlas
            </h1>
            <p class="text-lg md:text-xl mb-8 animate-fade-in-up delay-200">
                Dari Masjid, Membangun Masyarakat Madani
            </p>
            <a href="{{ route('profile') }}"
                class="bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-6 rounded-full text-lg transition duration-300 ease-in-out animate-fade-in-up delay-400">
                Jelajahi Masjid Kami
            </a>
        </div>
    </div>

    <section class="container mx-auto px-4 py-12 md:py-20">
        <div class="flex flex-col md:flex-row items-center gap-8">
            <div class="md:w-1/2">
                <img src="{{ asset('img/masjid_detail.jpg') }}" alt="Interior Masjid Jami Al-Ikhlas"
                    class="rounded-lg shadow-lg w-full h-auto object-cover">
            </div>
            <div class="md:w-1/2 text-center md:text-left">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
                    Sejarah Singkat Masjid Jami Al-Ikhlas
                </h2>
                <p class="text-gray-700 leading-relaxed text-lg mb-4">
                    Masjid Jami Al-Ikhlas berdiri tegak sebagai mercusuar spiritual di tengah-tengah lingkungan kami sejak tahun 19xx. Didirikan atas dasar semangat kebersamaan dan keikhlasan, masjid ini telah menjadi pusat kegiatan ibadah, pendidikan, dan sosial bagi seluruh jamaah. Kami berkomitmen untuk terus menjadi wadah pembinaan umat dan penyebar nilai-nilai Islam yang rahmatan lil 'alamin.
                </p>
                <p class="text-gray-700 leading-relaxed text-lg">
                    Dari generasi ke generasi, Al-Ikhlas tidak hanya sekadar tempat sholat, namun juga rumah bagi berbagai kegiatan keagamaan, kajian ilmu, dan pertemuan komunitas yang mempererat tali silaturahmi. Kami mengundang Anda untuk menjadi bagian dari perjalanan berkah ini.
                </p>
                <a href="{{ route('profile.sejarah') }}"
                    class="mt-6 inline-block text-green-600 hover:text-green-800 font-semibold text-lg transition duration-300 ease-in-out">
                    Baca Sejarah Lengkap &rarr;
                </a>
            </div>
        </div>
    </section>

    </x-layout>