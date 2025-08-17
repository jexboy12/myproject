<!DOCTYPE html>
<html lang="en" class="h-full bg-green-200">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Tambahkan link Google Fonts untuk font 'Inter' di sini --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" scrossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/5.4.3/photoswipe.min.css">

    {{-- Ini mengimpor Inter dengan ketebalan 400 (normal), 500 (medium), 600 (semibold), 700 (bold) --}}

    @vite('resources/css/app.css')

    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    {{-- Gaya untuk tombol gulir ke atas --}}
    <style>
        #scrollToTopBtn {
            position: fixed; /* Tetap di posisi yang sama saat menggulir */
            bottom: 20px; /* Jarak dari bawah */
            right: 20px; /* Jarak dari kanan */
            z-index: 1000; /* Pastikan di atas elemen lain */
            background-color: #10B981; /* Warna hijau Tailwind 500 */
            color: white; /* Warna ikon putih */
            border: none; /* Tanpa border */
            border-radius: 9999px; /* Bentuk lingkaran penuh */
            padding: 15px; /* Padding di sekitar ikon */
            cursor: pointer; /* Tunjukkan bahwa itu bisa diklik */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Bayangan lembut */
            
            /* Properti untuk animasi */
            opacity: 0; /* Mulai dengan tidak terlihat */
            transform: translateY(100px); /* Mulai dari bawah */
            transition: opacity 0.3s ease-out, transform 0.3s ease-out; /* Transisi halus untuk muncul/sembunyi */
            pointer-events: none; /* Tidak bisa diklik saat tidak terlihat */

            /* Menggunakan flexbox untuk memusatkan ikon SVG */
            display: flex; 
            align-items: center;
            justify-content: center;
            width: 50px; /* Ukuran tombol */
            height: 50px; /* Ukuran tombol */
        }

        #scrollToTopBtn.scroll-to-top-show {
            opacity: 1; /* Tampilkan */
            transform: translateY(0); /* Kembali ke posisi asli */
            pointer-events: auto; /* Bisa diklik */
        }

        #scrollToTopBtn:hover {
            background-color: #059669; /* Warna hijau lebih gelap saat hover */
            transform: translateY(-2px); /* Efek sedikit naik saat hover */
        }

        #scrollToTopBtn svg {
            width: 24px; /* Ukuran ikon SVG */
            height: 24px; /* Ukuran ikon SVG */
            stroke: currentColor; /* Menggunakan warna teks tombol untuk stroke SVG */
            stroke-width: 2; /* Ketebalan garis SVG */
            fill: none; /* Tidak ada isian untuk ikon panah */
        }
    </style>
</head>
<body class="h-full font-sans bg-green-200 overflow-x-hidden">

<div class="min-h-full">

    <header class="bg-white py-4 shadow-sm hidden md:block border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between">
            {{-- Logo Besar --}}
            <div class="flex-shrink-0">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('img/logo.png') }}" alt="Logo Masjid" class="h-20">
                </a>
            </div>

            {{-- Informasi Kontak (Alamat, Waktu, Telepon) --}}
            <div class="flex space-x-16">
                <div class="flex items-center space-x-2 text-gray-700">
                    {{-- Ikon Lokasi Baru --}}
                    <img src="{{ asset('img/lokasi.png') }}" alt="Ikon Lokasi" class="h-14 w-14">
                    <div>
                        <div class="font-semibold">Jl. Usman, Randu I, RT 05 / RW 04</div>
                        <div class="text-sm">Jakarta Timur</div>
                    </div>
                </div>

                <div class="flex items-center space-x-2 text-gray-700">
                    {{-- Ikon Waktu Baru --}}
                    <img src="{{ asset('img/jam.png') }}" alt="Ikon Waktu" class="h-10 w-10">
                    <div>
                        <div class="font-semibold">08.00 WIB - 18.00 WIB</div>
                        <div class="text-sm">Senin- Jumat</div>
                    </div>
                </div>

                <div class="flex items-center space-x-2 text-gray-700">
                    {{-- Ikon Telepon Baru --}}
                    <img src="{{ asset('img/phone.png') }}" alt="Ikon Telepon" class="h-12 w-12">
                    <div>
                        <div class="font-semibold">+62 821-2367-8056</div>
                        <div class="text-sm">Call / Whatsapp</div>
                    </div>
                </div>
            </div>
        </div>
    </header>

 <x-navbar></x-navbar>

  <main>
    <div class="mx-auto max-w-7xl px-4 py-0 sm:px-6 lg:px-8">
       {{ $slot }}
    </div>
  </main>

  {{-- LETAKKAN KOMPONEN FOOTER ANDA DI SINI --}}
  <x-footer></x-footer>

</div>

{{-- Tombol Gulir ke Atas --}}
<button id="scrollToTopBtn" title="Gulir ke Atas">
    {{-- Ikon panah ke atas menggunakan SVG --}}
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 10.5L12 3m0 0l7.5 7.5M12 3v18" />
    </svg>
</button>

<script>
    const scrollToTopBtn = document.getElementById("scrollToTopBtn");
    let lastScrollTop = 0; // Variabel untuk menyimpan posisi gulir terakhir

    window.addEventListener("scroll", function() {
        const currentScrollTop = window.pageYOffset || document.documentElement.scrollTop;

        // Tentukan arah gulir
        if (currentScrollTop < lastScrollTop && currentScrollTop > 20) {
            // Menggulir ke atas dan tidak di paling atas
            scrollToTopBtn.classList.add('scroll-to-top-show'); // Tambahkan kelas untuk menampilkan animasi
        } else {
            // Menggulir ke bawah atau di paling atas
            scrollToTopBtn.classList.remove('scroll-to-top-show'); // Hapus kelas untuk menyembunyikan animasi
        }
        lastScrollTop = currentScrollTop <= 0 ? 0 : currentScrollTop; // Update posisi gulir terakhir
    });

    // Ketika pengguna mengklik tombol, gulir ke atas dokumen
    scrollToTopBtn.addEventListener("click", function() {
        window.scrollTo({
            top: 0,
            behavior: "smooth" // Gulir halus
        });
    });
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/5.4.3/photoswipe.umd.min.js">
</script>

</body>
</html>