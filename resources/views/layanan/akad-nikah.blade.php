<x-layout>
    <x-slot name="title">{{ $title ?? 'Layanan Akad Nikah' }}</x-slot>

    <div class="relative bg-green-600 h-72 flex items-center justify-center">
        <div class="absolute inset-0 bg-black opacity-30"></div> {{-- Mengurangi opacity overlay agar hijau lebih terlihat --}}
        <div class="relative z-10 text-white text-center px-4">
            <h1 class="text-4xl md:text-5xl font-extrabold leading-tight mb-3">Layanan Acara Akad Nikah</h1>
            <p class="text-lg md:text-xl font-light max-w-2xl mx-auto">
                Wujudkan pernikahan berkah Anda di rumah Allah yang suci.
            </p>
        </div>
    </div>

    <div class="mx-auto max-w-7xl px-2 py-8 sm:px-6 lg:px-8">
        {{-- Kotak konten putih (diubah dari rounded-lg menjadi rounded-xl) --}}
        <div class="bg-white p-8 rounded-xl shadow-xl -mt-16 relative z-20"> {{-- Perubahan di sini: rounded-xl --}}
            <h2 class="text-3xl font-bold text-gray-900 mb-6 border-b-2 border-green-600 pb-2 text-center">Selamat Datang Calon Pengantin</h2>

            <div class="prose max-w-none text-gray-700 leading-relaxed mb-8">
                <p class="mb-4">
                    Masjid Jami' Al-Ikhlas dengan senang hati menyediakan fasilitas dan dukungan untuk penyelenggaraan acara akad nikah yang sakral dan penuh keberkahan. Kami memahami bahwa momen pernikahan adalah salah satu momen terpenting dalam hidup, dan kami berkomitmen untuk membantu Anda mewujudkannya sesuai dengan syariat Islam dan tradisi yang baik.
                </p>
                <p class="mb-4">
                    Dengan suasana masjid yang tenang dan khusyuk, kami berharap akad nikah Anda dapat berjalan lancar dan menjadi awal dari rumah tangga yang sakinah, mawaddah, wa rahmah. Layanan kami dirancang untuk memudahkan calon pengantin dalam mempersiapkan segala kebutuhan administratif dan teknis acara.
                </p>

                <h3 class="text-2xl font-bold text-gray-800 mt-8 mb-4 border-b border-gray-300 pb-2">Persyaratan Umum</h3>
                <ul class="list-disc list-inside mb-4">
                    <li>Surat Pengantar dari RT/RW setempat.</li>
                    <li>Fotokopi KTP calon mempelai dan wali.</li>
                    <li>Fotokopi Kartu Keluarga calon mempelai dan wali.</li>
                    <li>Pas Foto ukuran 2x3 atau 3x4 (latar belakang biru/merah sesuai ketentuan).</li>
                    <li>Surat rekomendasi nikah dari KUA asal (jika berbeda domisili).</li>
                    <li>Sertifikat Kursus Pra-Nikah (jika diwajibkan).</li>
                    <li>Dokumen lain sesuai ketentuan Kantor Urusan Agama (KUA) setempat.</li>
                </ul>
                <p class="mb-4">
                    **Catatan:** Persyaratan dapat bervariasi sesuai kebijakan KUA setempat. Mohon konfirmasi kembali kepada petugas layanan kami.
                </p>

                <h3 class="text-2xl font-bold text-gray-800 mt-8 mb-4 border-b border-gray-300 pb-2">Prosedur Pendaftaran</h3>
                <ol class="list-decimal list-inside mb-4">
                    <li>Calon pengantin menghubungi petugas layanan akad nikah masjid untuk informasi awal dan ketersediaan jadwal.</li>
                    <li>Mengisi formulir pendaftaran yang disediakan oleh masjid.</li>
                    <li>Menyerahkan seluruh dokumen persyaratan yang telah lengkap.</li>
                    <li>Melakukan pembayaran biaya administrasi (jika ada).</li>
                    <li>Konfirmasi jadwal pelaksanaan akad nikah dengan petugas masjid dan KUA.</li>
                    <li>Pelaksanaan akad nikah di masjid sesuai jadwal yang ditentukan.</li>
                </ol>

                <h3 class="text-2xl font-bold text-gray-800 mt-8 mb-4 border-b border-gray-300 pb-2">Fasilitas yang Disediakan</h3>
                <ul class="list-disc list-inside mb-4">
                    <li>Penggunaan ruang utama masjid untuk acara akad nikah.</li>
                    <li>Pengeras suara dan mic.</li>
                    <li>Petugas pendamping dari DKM masjid.</li>
                    <li>Area parkir yang memadai.</li>
                    <li>Toilet dan fasilitas umum.</li>
                    <li>[Tambahkan fasilitas lain seperti: dekorasi sederhana, sound system, dll. jika tersedia]</li>
                </ul>

                <h3 class="text-2xl font-bold text-gray-800 mt-8 mb-4 border-b border-gray-300 pb-2">Informasi & Kontak</h3>
                <p class="mb-2">
                    Untuk informasi lebih lanjut mengenai biaya, ketersediaan jadwal, atau pertanyaan lainnya, silakan hubungi kami:
                </p>
                <ul class="list-none mb-4">
                    <li><strong>Nomor Telepon:</strong> 082123678056</li>
                    <li><strong>Email:</strong> masjid.jamialikhlas@gmail.com</li>
                    <li><strong>Alamat Kantor DKM:</strong> Jl. Usman, Randu I, RT 05 / RW 04</li>
                </ul>
                <p class="italic text-gray-600">
                    Kami sangat menantikan untuk menjadi bagian dari hari bahagia Anda. Jazakumullah Khairan Katsiran.
                </p>
            </div>
        </div>
    </div>
</x-layout>