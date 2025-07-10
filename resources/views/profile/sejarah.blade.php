<x-layout>
    <x-slot name="title">{{ $title ?? 'Profil Masjid' }}</x-slot>

    {{-- INI ADALAH BAGIAN HERO SECTION YANG MENJADI BACKGROUND GAMBAR --}}
    {{-- Pastikan URL gambar di bawah ini mengarah ke file gambar Anda yang ada di public/img/ --}}
    <div class="relative bg-cover bg-center h-96 flex items-center justify-center" style="background-image: url('{{ asset('img/masjid_detail.jpg') }}');">
        <div class="absolute inset-0 bg-black opacity-60"></div> {{-- Overlay gelap untuk teks agar mudah dibaca --}}
        <div class="relative z-10 text-white text-center px-4">
            <h1 class="text-5xl font-extrabold leading-tight mb-4 animate-fade-in-up">Masjid Jami' Al-Ikhlash</h1>
            <p class="text-xl font-light max-w-3xl mx-auto opacity-0 animate-fade-in" style="animation-delay: 0.5s;">
                Menjelajahi Sejarah, Visi, Misi, dan Tokoh-tokoh di Balik Kemakmuran Masjid Kita.
            </p>
        </div>
    </div>

    <div class="mx-auto max-w-7xl px-4 py-8 sm:px-6 lg:px-8">
        {{-- INI ADALAH KOTAK KONTEN PUTIH YANG AKAN OVERLAP DENGAN HERO SECTION --}}
        <div class="bg-white p-8 rounded-lg shadow-xl -mt-24 relative z-20">
            <h2 class="text-3xl font-bold text-gray-900 mb-6 border-b-2 border-green-600 pb-2 text-center">SEJARAH MASJID JAMI' AL-IKHLASH</h2>

            {{-- Menggunakan flexbox untuk menempatkan teks dan gambar bersebelahan --}}
            <div class="flex flex-col md:flex-row items-start md:space-x-8 prose max-w-none text-gray-700 leading-relaxed mb-8">
                {{-- Bagian Teks (akan memenuhi lebar penuh di mobile, 2/3 di desktop) --}}
                <div class="w-full md:w-2/3">
                    <p class="mb-4">
                        Masjid Jami' Al-Ikhlas merupakan masjid yang berlokasi di Jalan Randu I, RT 05 / RW 04, Ciracas, Jakarta Timur. Masjid ini dibangun pada bulan Juni tahun 1996 dan merupakan hasil alokasi dari sebuah mushola wakaf yang sebelumnya berlokasi di Jl. Pedurenan RT 03 / RW 05, Kelurahan Karet Kuningan, Kecamatan Setiabudi, Jakarta Selatan. Semenjak di alokasikan, bangunan ini dijadikan Masjid oleh Pewakaf.
                    </p>
                    <p class="mb-4">
                        Melalui profil ini, Anda akan menemukan informasi menyeluruh mengenai berbagai aspek utama dari Masjid Jami’ Al-Ikhlas. Mulai dari sejarah pembangunannya yang penuh inspirasi, visi dan misi yang menjadi pedoman arah gerak, hingga sosok-sosok pengurus yang berdedikasi, serta para imam dan muadzin yang setia membimbing jamaah dalam setiap pelaksanaan ibadah. Semoga informasi yang tersaji dapat mempererat tali silaturahmi dan meningkatkan kecintaan kita terhadap rumah Allah SWT.
                    </p>
                    
                </div>
                
                {{-- Bagian Gambar (akan memenuhi lebar penuh di mobile, 1/3 di desktop) --}}
                {{-- Menggunakan order-first di mobile untuk gambar di atas teks, dan order-last di desktop untuk gambar di kanan --}}
                <div class="w-full md:w-1/3 flex flex-col items-center mt-6 md:mt-0 order-first md:order-last">
                    <img src="{{ asset('img/masjid_detail.jpg') }}" alt="Gambar ilustrasi profil masjid" class="w-full h-auto rounded-lg shadow-md object-cover">
                    <p class="text-center text-sm text-gray-500 mt-2">Masjid kami senantiasa berbenah demi kenyamanan jamaah.</p>
                </div>
            </div>

            <p class="prose max-w-none text-gray-700 leading-relaxed">
                Terima kasih atas kunjungan Anda. Mari bersama-sama memakmurkan masjid dan memperkuat ukhuwah Islamiyah.
            </p>

            <div class="mt-10 pt-6 border-t border-gray-200">
                <h3 class="text-2xl font-bold text-gray-900 mb-4 text-center">Jelajahi Lebih Lanjut</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                    <a href="{{ route('profile.visi') }}" class="block p-5 bg-green-50 hover:bg-green-100 rounded-lg shadow transition duration-300 ease-in-out transform hover:-translate-y-1">
                        <h4 class="font-semibold text-lg text-green-700 mb-2">Visi & Misi</h4>
                        <p class="text-gray-600 text-sm">Pahami arah dan tujuan kami dalam memakmurkan umat.</p>
                    </a>
                    <a href="{{ route('profile.struktural') }}" class="block p-5 bg-green-50 hover:bg-green-100 rounded-lg shadow transition duration-300 ease-in-out transform hover:-translate-y-1">
                        <h4 class="font-semibold text-lg text-green-700 mb-2">Struktural Organisasi</h4>
                        <p class="text-gray-600 text-sm">Kenali individu-individu di balik pengelolaan masjid.</p>
                    </a>
                    <a href="{{ route('profile.imam') }}" class="block p-5 bg-green-50 hover:bg-green-100 rounded-lg shadow transition duration-300 ease-in-out transform hover:-translate-y-1">
                        <h4 class="font-semibold text-lg text-green-700 mb-2">Imam & Muadzin</h4>
                        <p class="text-gray-600 text-sm">Mengenal para pemimpin ibadah kami.</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-layout>