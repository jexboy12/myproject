<x-layout>
    <x-slot name="title">{{ $title ?? 'Layanan Jadi Muallaf' }}</x-slot>

    {{-- Hero Section untuk Layanan Jadi Muallaf --}}
    {{-- Tambahkan rounded-b-lg di sini untuk membuat sudut bawah tumpul --}}
    <div class="relative bg-green-600 h-72 flex items-center justify-center"> {{-- Perubahan di sini: rounded-b-lg --}}
        <div class="absolute inset-0 bg-black opacity-30"></div> {{-- Mengurangi opacity overlay agar hijau lebih terlihat --}}
        <div class="relative z-10 text-white text-center px-4">
            <h1 class="text-4xl md:text-5xl font-extrabold leading-tight mb-3">Layanan Pembinaan Muallaf</h1>
            <p class="text-lg md:text-xl font-light max-w-2xl mx-auto">
                Mendampingi langkah awal Anda dalam memeluk Islam dengan bimbingan komprehensif.
            </p>
        </div>
    </div>

    <div class="mx-auto max-w-7xl px-2 py-8 sm:px-6 lg:px-8">
        {{-- Kotak konten putih ini sudah memiliki rounded-lg --}}
        <div class="bg-white p-8 rounded-lg shadow-xl -mt-16 relative z-20">
            <h2 class="text-3xl font-bold text-gray-900 mb-6 border-b-2 border-green-600 pb-2 text-center">Selamat Datang Saudara Baru Kami</h2>

            <div class="prose max-w-none text-gray-700 leading-relaxed mb-8">
                <p class="mb-4">
                    Masjid Jami' Al-Ikhlas berkomitmen penuh untuk mendukung dan membimbing saudara-saudari kita yang baru memeluk agama Islam. Kami memahami bahwa perjalanan spiritual ini membutuhkan pendampingan yang intensif dan lingkungan yang suportif untuk memperkuat iman dan pemahaman Islam.
                </p>
                <p class="mb-4">
                    Layanan pembinaan muallaf kami dirancang untuk memberikan edukasi dasar agama, bimbingan praktis ibadah, serta dukungan sosial agar para muallaf dapat beradaptasi dengan baik dalam komunitas Muslim dan menjalani kehidupan Islami secara kaffah.
                </p>

                <h3 class="text-2xl font-bold text-gray-800 mt-8 mb-4 border-b border-gray-300 pb-2">Pendampingan Komprehensif</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 items-start mb-8">
                    <div class="md:col-span-2">
                        <p class="mb-4">
                            Program pembinaan muallaf kami meliputi berbagai aspek penting dalam kehidupan seorang Muslim. Mulai dari pengenalan dasar-dasar akidah, tata cara bersuci (thaharah), shalat, hingga pemahaman Al-Qur'an dan hadits. Kami menyediakan mentor-mentor yang berpengalaman dan sabar dalam membimbing muallaf satu per satu atau dalam kelompok kecil.
                        </p>
                        <p class="mb-4">
                            Selain materi keagamaan, kami juga memfasilitasi integrasi sosial muallaf dengan komunitas masjid, melalui berbagai kegiatan seperti pengajian rutin, diskusi, dan kegiatan sosial lainnya. Tujuan kami adalah agar para muallaf merasa nyaman, diterima, dan memiliki keluarga baru dalam naungan Islam.
                        </p>
                        <p>
                            Kami percaya bahwa kekuatan komunitas adalah kunci dalam memperkuat keimanan. Oleh karena itu, lingkungan yang hangat dan suportif menjadi prioritas utama dalam layanan kami.
                        </p>
                    </div>

                    <div class="md:col-span-1 flex flex-col space-y-4">
                        <img src="{{ asset('img/diskusi-muallaf.jpg') }}" alt="Diskusi Muallaf" class="w-full h-auto rounded-lg shadow-md object-cover">
                    </div>
                </div>

                <h3 class="text-2xl font-bold text-gray-800 mt-8 mb-4 border-b border-gray-300 pb-2">Materi Pembinaan</h3>
                <ul class="list-disc list-inside mb-4">
                    <li>Pengenalan Syahadat dan Rukun Islam.</li>
                    <li>Tata Cara Thaharah (Bersuci) dan Wudhu.</li>
                    <li>Panduan Shalat Wajib dan Sunnah.</li>
                    <li>Pembacaan Al-Qur'an Dasar (Iqra/Tahsin).</li>
                    <li>Materi Akidah dan Akhlak Islam.</li>
                    <li>Pengenalan Siroh Nabawiyah dan Sejarah Islam.</li>
                    <li>Diskusi interaktif dan sesi tanya jawab.</li>
                </ul>

                <h3 class="text-2xl font-bold text-gray-800 mt-8 mb-4 border-b border-gray-300 pb-2">Persyaratan & Pendaftaran</h3>
                <p class="mb-4">
                    Untuk menjadi bagian dari program pembinaan muallaf kami, calon peserta diharapkan:
                </p>
                <ul class="list-disc list-inside mb-4">
                    <li>Telah mengucapkan syahadat.</li>
                    <li>Memiliki KTP atau identitas diri lainnya.</li>
                    <li>Mengisi formulir pendaftaran muallaf di kantor DKM.</li>
                    <li>Bersedia mengikuti seluruh rangkaian program pembinaan.</li>
                </ul>

                <h3 class="text-2xl font-bold text-gray-800 mt-8 mb-4 border-b border-gray-300 pb-2">Informasi & Kontak</h3>
                <p class="mb-2">
                    Untuk pertanyaan lebih lanjut atau pendaftaran, silakan hubungi kami:
                </p>
                <ul class="list-none mb-4">
                    <li><strong>Nomor Telepon:</strong> 082123678056</li>
                    <li><strong>Email:</strong> masjid.jamialikhlas@gmail.com</li>
                    <li><strong>Jadwal Konsultasi:</strong> Setiap hari kerja, Pukul 09.00 - 15.00 WIB</li>
                </ul>
                <p class="italic text-gray-600">
                    Kami sangat senang dapat menyambut dan mendampingi Anda di jalan Islam.
                </p>
            </div>
        </div>
    </div>
</x-layout>