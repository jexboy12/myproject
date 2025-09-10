<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="relative w-screen h-96 md:h-screen flex items-center justify-center text-white overflow-hidden -ml-[calc(50vw-50%)]">
        <div id="hero-slides" class="absolute inset-0">
            <div class="hero-slide absolute inset-0 transition-opacity duration-1000 ease-in-out opacity-100">
                <div class="absolute inset-0 overflow-hidden" data-image-url="{{ asset('img/welcome.jpg') }}" id="image-pieces-container-0"></div>
                <div class="hero-slide-content relative z-10 text-center px-4 flex flex-col justify-center items-center h-full">
                    <h1 class="text-2xl md:text-5xl font-vibes text-white mb-4 transition-transform-opacity duration-700 ease-out translate-y-8 opacity-0">Selamat Datang di</h1>
                    <h2 class="text-4xl md:text-5xl font-bold font-montserrat text-white mb-4 transition-transform-opacity duration-700 ease-out translate-y-8 opacity-0 delay-100">Masjid Jami' Al-Ikhlash</h2>
                    <p class="text-lg md:text-xl font-montserrat text-white mb-8 transition-transform-opacity duration-700 ease-out translate-y-8 opacity-0 delay-200">Memakmurkan Masjid dan dimakmurkan Masjid</p>
                    <a href="{{ route('kontak') }}" class="bg-yellow-400 hover:bg-yellow-500 text-white font-bold py-3 px-6 rounded-full text-lg transition-transform-opacity duration-700 ease-out translate-y-8 opacity-0 delay-300">Info Sekretariat</a>
                </div>
            </div>
            <div class="hero-slide absolute inset-0 transition-opacity duration-1000 ease-in-out opacity-0">
                 <div class="absolute inset-0 overflow-hidden" data-image-url="{{ asset('img/kegiatan2.jpg') }}" id="image-pieces-container-1"></div>
                <div class="hero-slide-content relative z-10 text-center px-4 flex flex-col justify-center items-center h-full">
                    <h1 class="text-2xl md:text-4xl font-vibes text-white mb-4 transition-transform-opacity duration-700 ease-out translate-y-8 opacity-0">Masjid Kami</h1>
                    <h2 class="text-4xl md:text-5xl font-bold font-montserrat text-white mb-4 transition-transform-opacity duration-700 ease-out translate-y-8 opacity-0 delay-100">Megah dan Nyaman</h2>
                    <p class="text-lg md:text-xl font-montserrat text-white mb-8 transition-transform-opacity duration-700 ease-out translate-y-8 opacity-0 delay-200">Pusat Kegiatan Islami Komunitas</p>
                    <a href="{{ route('profile.sejarah') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-full text-lg transition-transform-opacity duration-700 ease-out translate-y-8 opacity-0 delay-300">Baca Lebih Lanjut</a>
                </div>
            </div>
            <div class="hero-slide absolute inset-0 transition-opacity duration-1000 ease-in-out opacity-0">
                <div class="absolute inset-0 overflow-hidden" data-image-url="{{ asset('img/masjid_detail.jpg') }}" id="image-pieces-container-2"></div>
                <div class="hero-slide-content relative z-10 text-center px-4 flex flex-col justify-center items-center h-full">
                    <h1 class="text-2xl md:text-4xl font-vibes text-white mb-4 transition-transform-opacity duration-700 ease-out translate-y-8 opacity-0">Bergabunglah Bersama Kami</h1>
                    <h2 class="text-4xl md:text-5xl font-bold font-montserrat text-white mb-4 transition-transform-opacity duration-700 ease-out translate-y-8 opacity-0 delay-100">Dalam Kebersamaan Umat</h2>
                    <p class="text-lg md:text-xl font-montserrat text-white mb-8 transition-transform-opacity duration-700 ease-out translate-y-8 opacity-0 delay-200">Menggapai Ridho Allah SWT</p>
                    <a href="{{ route('kegiatan') }}" class="bg-purple-600 hover:bg-purple-700 text-white font-bold py-3 px-6 rounded-full text-lg transition-transform-opacity duration-700 ease-out translate-y-8 opacity-0 delay-300">Lihat Kegiatan</a>
                </div>
            </div>
        </div>
        <button id="prev-slide" class="absolute left-4 top-1/2 -translate-y-1/2 bg-black bg-opacity-20 hover:bg-opacity-75 text-white p-4 rounded-full z-20 transition duration-300 ease-in-out focus:outline-none"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg></button>
        <button id="next-slide" class="absolute right-4 top-1/2 -translate-y-1/2 bg-black bg-opacity-20 hover:bg-opacity-75 text-white p-4 rounded-full z-20 transition duration-300 ease-in-out focus:outline-none"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg></button>
    </div>

    <section class="container mx-auto px-4 py-12 md:py-20">
        <div class="flex flex-col md:flex-row items-center gap-8">
            <div class="md:w-1/2"><img src="{{ asset('img/masjid_detail.jpg') }}" alt="Gambar Masjid" class="rounded-lg shadow-lg w-full h-auto object-cover"></div>
            <div class="md:w-1/2 text-center md:text-left">
                <h2 class="text-3xl md:text-2xl font-bold text-gray-900 mb-6">Assalamualaikum warahamatullahi wabarakatuh</h2>
                <p class="text-gray-700 leading-relaxed text-lg mb-4">Segala puji hanya milik Allah yang Maha Pengasih lagi Maha Penyayang. Sholawat serta salam kepada Nabi Muhammad SAW dan para keluarganya, sahabat, tabiin, tabiut taabiin. Semoga kita menjadi umatnya yang senantiasa istiqomah di jalan yang lurus hingga yaumil qiyamah. Amin</p>
                <p class="text-gray-700 leading-relaxed text-lg">Selamat datang di website resmi Masjid Jami' Al-Ikhlash. Tagline kami <strong>“Memakmurkan Masjid dan dimakmurkan Masjid”.</strong> Semoga hadirnya website ini menjadi wasilah silaturahim kita semua untuk bisa lebih mengenal Masjid Al-Ikhlash. Semoga website ini bermanfaat, terima kasih.</p>
                <a href="{{ route('profile.sejarah') }}" class="mt-6 inline-block text-green-600 hover:text-green-800 font-semibold text-lg transition duration-300 ease-in-out">Baca Sejarah Lengkap &rarr;</a>
            </div>
        </div>
    </section>

   <section class="bg-gray-100 p-8 rounded-xl shadow-xl mt-8">
        <div class="container mx-auto px-4">
         <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-2 text-center">Mosque Profile: </h2>   
    <section class="mt-12 flex justify-center">
        <video class="rounded-xl shadow-lg w-full max-w-4xl" controls>
            <source src="{{ asset('videos/company-profile.mp4') }}" type="video/mp4">
            </video>
        </section>
    </section>

    <section class="bg-gray-100 py-12 md:py-20">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center justify-center gap-8 md:gap-12">
                
                {{-- Kolom Kiri: Teks Ajakan --}}
                <div class="md:w-1/2 text-center md:text-left">
                    <div class="mb-2">
                        <p class="text-sm font-semibold text-gray-500 uppercase tracking-wider">Video Youtube Kami</p>
                        <div class="w-16 h-0.5 bg-yellow-400 mt-1 mx-auto md:mx-0"></div>
                    </div>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                        <span class="text-yellow-500">Subscribe</span> Channel Youtube Kami
                    </h2>
                    <p class="text-lg text-gray-700 leading-relaxed mb-8">
                        Ikuti terus tayangan terbaru dan kegiatan-kegiatan Masjid Jami' Al-Ikhlash langsung dari channel Youtube kami.
                    </p>
                    {{-- GANTI TANDA # DENGAN LINK CHANNEL YOUTUBE ANDA --}}
                    <a href="https://www.youtube.com/@alikhlashsosmed4268" target="_blank" class="inline-block bg-yellow-400 hover:bg-yellow-500 text-white font-bold py-3 px-6 rounded-full text-lg transition duration-300 ease-in-out shadow-md">
                        Tonton di Youtube
                    </a>
                </div>

                {{-- Kolom Kanan: Gambar Thumbnail dengan Tombol Play --}}
                <div class="md:w-1/2 lg:w-1/3 mt-8 md:mt-0">
                     {{-- GANTI TANDA # DENGAN LINK CHANNEL YOUTUBE ANDA --}}
                    <a href="https://www.youtube.com/@alikhlashsosmed4268" target="_blank" class="block relative group">
                        {{-- GANTI SRC GAMBAR INI DENGAN THUMBNAIL ANDA --}}
                        <img src="{{ asset('img/kegiatan2.jpg') }}" alt="Thumbnail Youtube Masjid" class="rounded-lg shadow-xl w-full h-auto object-cover">
                        <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-40 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <div class="bg-white text-green-600 rounded-full p-5 transform group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"></path></svg>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </section>
    <section class="bg-gray-100 py-12 md:py-20">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-2 text-center">Jadwal Sholat Hari Ini</h2>
            <p class="text-lg text-gray-600 text-center mb-10">Untuk Wilayah DKI Jakarta dan Sekitarnya</p>
            @if ($jadwal)
                <div class="max-w-5xl mx-auto">
                    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-4">
                        @foreach (['subuh', 'dzuhur', 'ashar', 'maghrib', 'isya'] as $waktu)
                            <div class="bg-white p-6 rounded-lg shadow-md text-center">
                                <h3 class="text-lg font-semibold text-gray-500 uppercase">{{ $waktu }}</h3>
                                <p class="text-3xl font-bold text-green-600 mt-2">{{ $jadwal[$waktu] }}</p>
                            </div>
                        @endforeach
                    </div>
                    {{-- 1. REVISI UTAMA: Kotak hijau menjadi lebih ringkas --}}
                    <div class="bg-green-700 text-white p-3 rounded-lg shadow-md mt-4 text-center">
                         {{-- 2. REVISI UTAMA: Menampilkan tanggal yang sudah diformat --}}
                         <p class="text-xl font-bold">{{ $tanggalFormatted }}</p>
                    </div>
                </div>
            @else
                <p class="text-center text-red-500">Jadwal sholat tidak dapat dimuat saat ini.</p>
            @endif
        </div>
    </section>
    
    <section x-data="{
                showLightbox: false,
                currentImage: '',
                currentTitle: ''
            }"
            @keydown.escape.window="showLightbox = false"
            class="py-12 md:py-20">
        <div class="container mx-auto px-4">
            @if($galleryPosts->isNotEmpty())
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($galleryPosts as $post)
                    <div @click="showLightbox = true; currentImage = '{{ asset('storage/' . $post->image_path) }}'; currentTitle = '{{ $post->title ?? 'Gambar Galeri' }}'" 
                        class="block group relative overflow-hidden rounded-lg shadow-lg cursor-pointer bg-transparent">
                        <div class="aspect-w-1 aspect-h-1">
                            <img src="{{ asset('storage/' . $post->image_path) }}" alt="{{ $post->title ?? 'Gambar Galeri' }}" class="w-full h-full object-cover transform transition-transform duration-500 group-hover:scale-105">
                        </div>
                    </div>
                @endforeach
            </div>
            @else
            <p class="text-center text-gray-500 py-10">Belum ada gambar di galeri. Silakan unggah melalui dashboard admin.</p>
            @endif
        </div>
        <div x-show="showLightbox"
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition ease-in duration-300"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             class="fixed inset-0 bg-black bg-opacity-90 flex items-center justify-center z-50 p-4"
             style="display: none;">
            <div class="relative w-full h-full flex items-center justify-center" @click.away="showLightbox = false">
                <button @click="showLightbox = false" class="absolute top-4 right-4 text-white text-5xl hover:text-gray-300 z-50">&times;</button>
                <img :src="currentImage" alt="" class="max-w-[90vw] max-h-[80vh] object-contain">
                <div class="absolute top-4 left-1/2 -translate-x-1/2 flex items-center space-x-4 bg-black bg-opacity-50 p-2 rounded-lg">
                    <a :href="currentImage" :download="currentTitle + '.jpg'" title="Unduh" class="text-white hover:text-gray-300">
                        <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
                    </a>
                    <button @click="$el.closest('.relative').querySelector('img').requestFullscreen()" title="Fullscreen" class="text-white hover:text-gray-300">
                        <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5v-4m0 0h-4m4 0l-5-5"/></svg>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const slides = document.querySelectorAll('.hero-slide');
            const prevButton = document.getElementById('prev-slide');
            const nextButton = document.getElementById('next-slide');
            let currentSlideIndex = 0;
            let autoSlideInterval;
            const autoSlideDuration = 9000;
            const pieceAnimationDuration = 1000;
            const textAnimationDelayAfterBreak = 500;

            function createImagePieces(slideElement) {
                const imageUrl = slideElement.querySelector('[data-image-url]').dataset.imageUrl;
                const piecesContainer = slideElement.querySelector('[id^="image-pieces-container"]');
                if (!piecesContainer) return;
                piecesContainer.innerHTML = ''; 

                const img = new Image();
                img.src = imageUrl;
                img.onload = () => {
                    const heroRect = slideElement.getBoundingClientRect();
                    const imgWidth = heroRect.width;
                    const imgHeight = heroRect.height;

                    const numPieces = 100;
                    const pieceWidth = imgWidth / Math.sqrt(numPieces);
                    const pieceHeight = imgHeight / Math.sqrt(numPieces);

                    for (let y = 0; y < imgHeight; y += pieceHeight) {
                        for (let x = 0; x < imgWidth; x += pieceWidth) {
                            const piece = document.createElement('div');
                            piece.style.position = 'absolute';
                            piece.style.width = `${pieceWidth + 1}px`;
                            piece.style.height = `${pieceHeight + 1}px`;
                            piece.style.backgroundImage = `url('${imageUrl}')`;
                            piece.style.backgroundSize = `${imgWidth}px ${imgHeight}px`;
                            piece.style.backgroundPosition = `-${x}px -${y}px`;
                            piece.style.top = `${y}px`;
                            piece.style.left = `${x}px`;
                            piece.style.opacity = 1;
                            piece.style.transform = 'translate(0,0) rotate(0deg) scale(1)';
                            piece.style.transition = `transform ${pieceAnimationDuration}ms ease-out, opacity ${pieceAnimationDuration}ms ease-out`;
                            piecesContainer.appendChild(piece);
                        }
                    }
                    slideElement.pieces = piecesContainer.children;
                };
                img.onerror = () => {
                    console.error('Gagal memuat gambar: ' + imageUrl);
                    if (piecesContainer) {
                        piecesContainer.style.backgroundImage = `url('${imageUrl}')`;
                        piecesContainer.style.backgroundSize = 'cover';
                        piecesContainer.style.backgroundPosition = 'center';
                    }
                };
            }

            function showSlide(index) {
                if (slides.length === 0) return;
                index = (index + slides.length) % slides.length;

                slides.forEach((slide, i) => {
                    slide.classList.remove('opacity-100');
                    slide.classList.add('opacity-0');
                    
                    const textElements = slide.querySelectorAll('.hero-slide-content > *');
                    textElements.forEach(el => {
                        el.classList.add('translate-y-8', 'opacity-0');
                        el.classList.remove('translate-y-0', 'opacity-100');
                    });

                    if (slide.pieces) {
                        Array.from(slide.pieces).forEach(piece => {
                            piece.style.transition = '';
                            piece.style.transform = 'translate(0,0) rotate(0deg) scale(1)';
                            piece.style.opacity = 1;
                            piece.offsetHeight;
                            piece.style.transition = `transform ${pieceAnimationDuration}ms ease-out, opacity ${pieceAnimationDuration}ms ease-out`;
                        });
                    }
                });

                const activeSlide = slides[index];
                activeSlide.classList.remove('opacity-0');
                activeSlide.classList.add('opacity-100');
                
                currentSlideIndex = index;

                const pieces = activeSlide.pieces;
                if (pieces && pieces.length > 0) {
                    Array.from(pieces).forEach((piece, i) => {
                        const delay = Math.random() * 200;
                        setTimeout(() => {
                            const angle = Math.random() * 360;
                            const distance = Math.random() * 200 + 100;
                            const x = distance * Math.cos(angle * Math.PI / 180);
                            const y = distance * Math.sin(angle * Math.PI / 180);
                            piece.style.transform = `translate(${x}px, ${y}px) rotate(${Math.random() * 720 - 360}deg) scale(${Math.random() * 0.5 + 0.7})`;
                            piece.style.opacity = 0;
                        }, delay);
                    });
                }

                setTimeout(() => {
                    if (pieces && pieces.length > 0) {
                         Array.from(pieces).forEach(piece => {
                            piece.style.transform = 'translate(0,0) rotate(0deg) scale(1)';
                            piece.style.opacity = 1;
                        });
                    }

                    const textElements = activeSlide.querySelectorAll('.hero-slide-content > *');
                    textElements.forEach(el => {
                        el.classList.remove('translate-y-8', 'opacity-0');
                        el.offsetHeight;
                        el.classList.add('translate-y-0', 'opacity-100');
                    });
                }, pieceAnimationDuration + textAnimationDelayAfterBreak);
            }

            function nextSlide() { showSlide(currentSlideIndex + 1); resetAutoSlide(); }
            function prevSlide() { showSlide(currentSlideIndex - 1); resetAutoSlide(); }

            function startAutoSlide() {
                autoSlideInterval = setInterval(nextSlide, autoSlideDuration);
            }

            function resetAutoSlide() {
                clearInterval(autoSlideInterval);
                startAutoSlide();
            }

            if(slides.length > 0 && prevButton && nextButton) {
                nextButton.addEventListener('click', nextSlide);
                prevButton.addEventListener('click', prevSlide);
                slides.forEach(slide => createImagePieces(slide));
                showSlide(currentSlideIndex);
                startAutoSlide();
            }
            
            let resizeTimeout;
            window.addEventListener('resize', () => {
                clearTimeout(resizeTimeout);
                resizeTimeout = setTimeout(() => {
                    slides.forEach(slide => createImagePieces(slide));
                    showSlide(currentSlideIndex);
                }, 500);
            });
        });
    </script>
</x-layout>