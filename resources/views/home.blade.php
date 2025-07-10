<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    {{-- Bagian Hero Section --}}
    {{-- Menambahkan w-screen dan -ml-[calc(50vw-50%)] untuk membuat gambar penuh lebar --}}
    <div class="relative w-screen h-96 md:h-screen flex items-center justify-center text-white overflow-hidden -ml-[calc(50vw-50%)]">
        {{-- Lapisan Kontainer Slide Utama --}}
        <div id="hero-slides" class="absolute inset-0">

            {{-- Slide 1 --}}
            <div class="hero-slide absolute inset-0 transition-opacity duration-1000 ease-in-out opacity-100">
                {{-- Ini adalah div yang akan menahan pecahan gambar --}}
                <div class="absolute inset-0 overflow-hidden" data-image-url="{{ asset('img/welcome.jpg') }}" id="image-pieces-container-0"></div>
                
                <div class="hero-slide-content relative z-10 text-center px-4 flex flex-col justify-center items-center h-full">
                    <h1 class="text-2xl md:text-5xl font-vibes text-white mb-4 transition-transform-opacity duration-700 ease-out translate-y-8 opacity-0">
                        Selamat Datang di
                    </h1>
                    <h2 class="text-4xl md:text-5xl font-bold font-montserrat text-white mb-4 transition-transform-opacity duration-700 ease-out translate-y-8 opacity-0 delay-100">
                        Masjid Jami' Al-Ikhlash
                    </h2>
                    <p class="text-lg md:text-xl font-montserrat text-white mb-8 transition-transform-opacity duration-700 ease-out translate-y-8 opacity-0 delay-200">
                        Memakmurkan Masjid dan dimakmurkan Masjid
                    </p>
                    <a href="{{ route('kontak') }}"
                        class="bg-yellow-400 hover:bg-yellow-500 text-white font-bold py-3 px-6 rounded-full text-lg transition-transform-opacity duration-700 ease-out translate-y-8 opacity-0 delay-300">
                        Kontak Kami
                    </a>
                </div>
            </div>

            {{-- Slide 2 --}}
            <div class="hero-slide absolute inset-0 transition-opacity duration-1000 ease-in-out opacity-0">
                 {{-- Ini adalah div yang akan menahan pecahan gambar --}}
                <div class="absolute inset-0 overflow-hidden" data-image-url="{{ asset('img/kegiatan2.png') }}" id="image-pieces-container-1"></div>
                
                <div class="hero-slide-content relative z-10 text-center px-4 flex flex-col justify-center items-center h-full">
                    <h1 class="text-2xl md:text-4xl font-vibes text-white mb-4 transition-transform-opacity duration-700 ease-out translate-y-8 opacity-0">
                        Masjid Kami
                    </h1>
                    <h2 class="text-4xl md:text-5xl font-bold font-montserrat text-white mb-4 transition-transform-opacity duration-700 ease-out translate-y-8 opacity-0 delay-100">
                        Megah dan Nyaman
                    </h2>
                    <p class="text-lg md:text-xl font-montserrat text-white mb-8 transition-transform-opacity duration-700 ease-out translate-y-8 opacity-0 delay-200">
                        Pusat Kegiatan Islami Komunitas
                    </p>
                    <a href="{{ route('profile.sejarah') }}"
                        class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-full text-lg transition-transform-opacity duration-700 ease-out translate-y-8 opacity-0 delay-300">
                        Baca Lebih Lanjut
                    </a>
                </div>
            </div>

            {{-- Slide 3 --}}
            <div class="hero-slide absolute inset-0 transition-opacity duration-1000 ease-in-out opacity-0">
                {{-- Ini adalah div yang akan menahan pecahan gambar --}}
                <div class="absolute inset-0 overflow-hidden" data-image-url="{{ asset('img/masjid_detail.jpg') }}" id="image-pieces-container-2"></div>
                
                <div class="hero-slide-content relative z-10 text-center px-4 flex flex-col justify-center items-center h-full">
                    <h1 class="text-2xl md:text-4xl font-vibes text-white mb-4 transition-transform-opacity duration-700 ease-out translate-y-8 opacity-0">
                        Bergabunglah Bersama Kami
                    </h1>
                    <h2 class="text-4xl md:text-5xl font-bold font-montserrat text-white mb-4 transition-transform-opacity duration-700 ease-out translate-y-8 opacity-0 delay-100">
                        Dalam Kebersamaan Umat
                    </h2>
                    <p class="text-lg md:text-xl font-montserrat text-white mb-8 transition-transform-opacity duration-700 ease-out translate-y-8 opacity-0 delay-200">
                        Menggapai Ridho Allah SWT
                    </p>
                    <a href="{{ route('kegiatan') }}"
                        class="bg-purple-600 hover:bg-purple-700 text-white font-bold py-3 px-6 rounded-full text-lg transition-transform-opacity duration-700 ease-out translate-y-8 opacity-0 delay-300">
                        Lihat Kegiatan
                    </a>
                </div>
            </div>
        </div>

        {{-- Tombol Navigasi --}}
        <button id="prev-slide" class="absolute left-4 top-1/2 -translate-y-1/2 bg-black bg-opacity-20 hover:bg-opacity-75 text-white p-4 rounded-full z-20 transition duration-300 ease-in-out focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
        </button>
        <button id="next-slide" class="absolute right-4 top-1/2 -translate-y-1/2 bg-black bg-opacity-20 hover:bg-opacity-75 text-white p-4 rounded-full z-20 transition duration-300 ease-in-out focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
        </button>
    </div>

    {{-- Bagian Sejarah Singkat Masjid --}}
    <section class="container mx-auto px-4 py-12 md:py-20">
        <div class="flex flex-col md:flex-row items-center gap-8">
            <div class="md:w-1/2">
                <img src="{{ asset('img/masjid_detail.jpg') }}" alt="Gambar Masjid"
                     class="rounded-lg shadow-lg w-full h-auto object-cover">
            </div>
           
            <div class="md:w-1/2 text-center md:text-left">
            
                <h2 class="text-3xl md:text-2xl font-bold text-gray-900 mb-6">
                    Assalamualaikum warahamatullahi wabarakatuh
                </h2>
                <p class="text-gray-700 leading-relaxed text-lg mb-4">
                    Segala puji hanya milik Allah yang Maha Pengasih lagi Maha Penyayang. Sholawat serta salam kepada Nabi Muhammad SAW dan para keluarganya, sahabat, tabiin, tabiut taabiin. Semoga kita menjadi umatnya yang senantiasa istiqomah di jalan yang lurus hingga yaumil qiyamah. Amin
                </p>
                <p class="text-gray-700 leading-relaxed text-lg">
                    Selamat datang di website resmi Masjid Jami' Al-Ikhlash. Tagline kami <strong>“Memakmurkan Masjid dan dimakmurkan Masjid”.</strong> Semoga hadirnya website ini menjadi wasilah silaturahim kita semua untuk bisa lebih mengenal Masjid Al-Ikhlash. Semoga website ini bermanfaat, terima kasih.
                </p>
                {{-- Tautan "Baca Sejarah Lengkap" yang mengarah ke profile.sejarah --}}
                <a href="{{ route('profile.sejarah') }}"
                    class="mt-6 inline-block text-green-600 hover:text-green-800 font-semibold text-lg transition duration-300 ease-in-out">
                    Baca Sejarah Lengkap &rarr;
                </a>
            </div>
        </div>
    </section>

    {{-- JavaScript untuk Slider Hero dengan Animasi Pecah Gambar --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const slides = document.querySelectorAll('.hero-slide');
            const prevButton = document.getElementById('prev-slide');
            const nextButton = document.getElementById('next-slide');
            let currentSlideIndex = 0;
            let autoSlideInterval;
            const autoSlideDuration = 9000; // Total waktu untuk satu slide (termasuk animasi)
            const pieceAnimationDuration = 1000; // Durasi animasi setiap pecahan
            const textAnimationDelayAfterBreak = 500; // Penundaan sebelum teks muncul setelah gambar pecah

            // Fungsi untuk membuat pecahan gambar untuk slide tertentu
            function createImagePieces(slideElement) {
                const imageUrl = slideElement.querySelector('[data-image-url]').dataset.imageUrl;
                const piecesContainer = slideElement.querySelector('[id^="image-pieces-container"]');
                piecesContainer.innerHTML = ''; // Bersihkan pecahan sebelumnya

                const img = new Image();
                img.src = imageUrl;
                img.onload = () => {
                    const heroRect = slideElement.getBoundingClientRect(); // Ambil ukuran hero section
                    const imgWidth = heroRect.width;
                    const imgHeight = heroRect.height;

                    const numPieces = 100; // Jumlah total pecahan (misal: 10x10). Eksperimen dengan nilai ini!
                    const pieceWidth = imgWidth / Math.sqrt(numPieces);
                    const pieceHeight = imgHeight / Math.sqrt(numPieces);

                    let pieceIndex = 0;
                    for (let y = 0; y < imgHeight; y += pieceHeight) {
                        for (let x = 0; x < imgWidth; x += pieceWidth) {
                            const piece = document.createElement('div');
                            piece.classList.add('hero-piece');
                            piece.style.position = 'absolute';
                            piece.style.width = `${pieceWidth + 1}px`; // +1px untuk menghindari celah
                            piece.style.height = `${pieceHeight + 1}px`; // +1px untuk menghindari celah
                            piece.style.backgroundImage = `url('${imageUrl}')`;
                            piece.style.backgroundSize = `${imgWidth}px ${imgHeight}px`; // Ukuran background sesuai ukuran hero
                            piece.style.backgroundPosition = `-${x}px -${y}px`;
                            piece.style.top = `${y}px`;
                            piece.style.left = `${x}px`;
                            piece.style.opacity = 1;
                            piece.style.transform = 'translate(0,0) rotate(0deg) scale(1)';
                            piece.style.transition = `transform ${pieceAnimationDuration}ms ease-out, opacity ${pieceAnimationDuration}ms ease-out`;

                            piecesContainer.appendChild(piece);
                            pieceIndex++;
                        }
                    }
                    // Simpan pecahan di elemen slide untuk akses mudah
                    slideElement.pieces = piecesContainer.children;
                };
                img.onerror = () => {
                    console.error('Gagal memuat gambar: ' + imageUrl);
                    // Fallback jika gambar gagal dimuat
                    piecesContainer.style.backgroundImage = `url('${imageUrl}')`;
                    piecesContainer.style.backgroundSize = 'cover';
                    piecesContainer.style.backgroundPosition = 'center';
                };
            }

            // Inisialisasi pecahan untuk semua slide saat DOM dimuat
            slides.forEach(slide => createImagePieces(slide));

            // Fungsi untuk menampilkan slide
            function showSlide(index) {
                // Pastikan indeks berputar untuk perulangan tak terbatas
                if (index >= slides.length) {
                    index = 0;
                } else if (index < 0) {
                    index = slides.length - 1;
                }

                // Sembunyikan semua slide dan reset teks/pecahan
                slides.forEach((slide, i) => {
                    slide.classList.remove('opacity-100');
                    slide.classList.add('opacity-0');
                    
                    // Reset animasi teks (kembali ke posisi awal tersembunyi)
                    const textElements = slide.querySelectorAll('.hero-slide-content > *');
                    textElements.forEach(el => {
                        el.classList.add('translate-y-8', 'opacity-0');
                        el.classList.remove('translate-y-0', 'opacity-100');
                    });

                    // Reset pecahan gambar ke posisi awal (menyatu) dan terlihat
                    if (slide.pieces) {
                        Array.from(slide.pieces).forEach(piece => {
                            piece.style.transition = ''; // Hapus transisi untuk reset instan
                            piece.style.transform = 'translate(0,0) rotate(0deg) scale(1)';
                            piece.style.opacity = 1;
                            piece.offsetHeight; // Paksa reflow untuk menerapkan reset
                            piece.style.transition = `transform ${pieceAnimationDuration}ms ease-out, opacity ${pieceAnimationDuration}ms ease-out`; // Kembalikan transisi
                        });
                    }
                });

                // Tampilkan slide saat ini
                const activeSlide = slides[index];
                activeSlide.classList.remove('opacity-0');
                activeSlide.classList.add('opacity-100');
                
                currentSlideIndex = index;

                // ---- Animasi Pecah Gambar ----
                const pieces = activeSlide.pieces;
                if (pieces && pieces.length > 0) {
                    Array.from(pieces).forEach((piece, i) => {
                        const delay = Math.random() * 200; // Penundaan acak untuk efek pecah
                        setTimeout(() => {
                            const angle = Math.random() * 360;
                            const distance = Math.random() * 200 + 100; // Jarak pecah lebih jauh
                            const x = distance * Math.cos(angle * Math.PI / 180);
                            const y = distance * Math.sin(angle * Math.PI / 180);
                            piece.style.transform = `translate(${x}px, ${y}px) rotate(${Math.random() * 720 - 360}deg) scale(${Math.random() * 0.5 + 0.7})`;
                            piece.style.opacity = 0; // Menghilang saat pecah
                        }, delay);
                    });
                }

                // ---- Animasi Teks Muncul (setelah gambar pecah dan hilang) ----
                setTimeout(() => {
                    // Animasi gambar menyatu kembali (transisi dari opacity 0 ke 1)
                    if (pieces && pieces.length > 0) {
                         Array.from(pieces).forEach(piece => {
                            piece.style.transform = 'translate(0,0) rotate(0deg) scale(1)';
                            piece.style.opacity = 1; // Menjadi terlihat kembali
                        });
                    }

                    // Animasi teks muncul setelah gambar menyatu
                    const textElements = activeSlide.querySelectorAll('.hero-slide-content > *');
                    textElements.forEach(el => {
                        // Paksa reflow/re-animasi untuk elemen yang sudah ada di DOM
                        el.classList.remove('translate-y-8', 'opacity-0');
                        el.offsetHeight; // Memicu reflow
                        el.classList.add('translate-y-0', 'opacity-100');
                    });
                }, pieceAnimationDuration + textAnimationDelayAfterBreak); // Sesuaikan timing ini
            }

            // Fungsi untuk slide berikutnya dan sebelumnya
            function nextSlide() {
                showSlide(currentSlideIndex + 1);
                resetAutoSlide(); // Reset timer pada interaksi manual
            }

            function prevSlide() {
                showSlide(currentSlideIndex - 1);
                resetAutoSlide(); // Reset timer pada interaksi manual
            }

            // Atur pergeseran otomatis
            function startAutoSlide() {
                autoSlideInterval = setInterval(nextSlide, autoSlideDuration);
            }

            function resetAutoSlide() {
                clearInterval(autoSlideInterval);
                startAutoSlide();
            }

            // Event listener untuk tombol navigasi
            nextButton.addEventListener('click', nextSlide);
            prevButton.addEventListener('click', prevSlide);

            // Tampilan awal dan mulai pergeseran otomatis
            showSlide(currentSlideIndex); // Tampilkan slide pertama
            startAutoSlide();
            
            // Tambahkan event listener untuk resize window (opsional tapi disarankan)
            // Ini akan memastikan pecahan gambar dihitung ulang jika ukuran layar berubah
            let resizeTimeout;
            window.addEventListener('resize', () => {
                clearTimeout(resizeTimeout);
                resizeTimeout = setTimeout(() => {
                    slides.forEach(slide => createImagePieces(slide));
                    showSlide(currentSlideIndex); // Tampilkan ulang slide aktif setelah resize
                }, 500); // Debounce resize
            });
        });
    </script>
</x-layout>