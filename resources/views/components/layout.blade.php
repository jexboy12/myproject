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
<body class="h-full font-sans bg-green-200">

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
                    <svg class="h-6 w-6 text-green-600" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M11.54 22.351l.07.04.028.016.035.02a.76.76 0 00.791.002l.024-.014.034-.02c.114-.067.279-.188.472-.356A13.655 13.655 0 0016.417 14c1.476-1.746 2.026-3.807 1.98-6.006A9 9 0 008 5a9.002 9.002 0 00-1.994 2.016c-.255 1.144-.144 2.309.309 3.404.266.64.585 1.226.96 1.758a13.655 13.655 0 003.535 4.549l.02.02.004.002 2.686 2.686zm-3.89-6.835l.028.016a.76.76 0 00.791.002l.024-.014.034-.02c.114-.067.279-.188.472-.356A13.655 13.655 0 0016.417 14c1.476-1.746 2.026-3.807 1.98-6.006A9 9 0 008 5a9.002 9.002 0 00-1.994 2.016c-.255 1.144-.144 2.309.309 3.404.266.64.585 1.226.96 1.758a13.655 13.655 0 003.535 4.549z" clip-rule="evenodd" />
                        <path d="M12 10a2 2 0 100-4 2 2 0 000 4z" />
                    </svg>
                    <div>
                        <div class="font-semibold">Jl. Usman, Randu I, RT 05 / RW 04</div>
                        <div class="text-sm">Jakarta Timur</div>
                    </div>
                </div>

                <div class="flex items-center space-x-2 text-gray-700">
                    <svg class="h-6 w-6 text-green-600" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10 12a1 1 0 01-1-1V6a1 1 0 112 0v5a1 1 0 01-1 1z" clip-rule="evenodd" />
                        <path fill-rule="evenodd" d="M.002 12A12 12 0 0012 24 12 12 0 0024 12 .002 12 0 00.002 12zM12 2a10 10 0 100 20 10 10 0 000-20z" clip-rule="evenodd" />
                    </svg>
                    <div>
                        <div class="font-semibold">08.00 WIB - 18.00 WIB</div>
                        <div class="text-sm">Senin- Jumat</div>
                    </div>
                </div>

                <div class="flex items-center space-x-2 text-gray-700">
                    <svg class="h-6 w-6 text-green-600" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M7 2a2 2 0 00-2 2v1a2 2 0 002 2h3.586l1.293-1.293a1 1 0 011.414 0L15.414 7H19a2 2 0 012 2v2a2 2 0 01-2 2h-1v6a2 2 0 01-2 2H6a2 2 0 01-2-2v-6H3a2 2 0 01-2-2V9a2 2 0 012-2h1.586L7 4.586A1 1 0 018.414 4H17zM17 9H7a1 1 0 00-1 1v2a1 1 0 001 1h10a1 1 0 001-1v-2a1 1 0 00-1-1zm-4-3a1 1 0 011-1h.01a1 1 0 010 2H14a1 1 0 01-1-1z" clip-rule="evenodd" />
                        <path fill-rule="evenodd" d="M12 2a1 1 0 00-1 1v4a1 1 0 002 0V3a1 1 0 00-1-1z" clip-rule="evenodd" />
                    </svg>
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
</body>
</html>
