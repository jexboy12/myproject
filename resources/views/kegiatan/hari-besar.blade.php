<x-layout>
    <x-slot name="title">{{ $title ?? 'Pengajian Bulanan' }}</x-slot>

    {{-- Hero Section --}}
    <div class="relative bg-green-600 h-72 flex items-center justify-center">
        <div class="absolute inset-0 bg-black opacity-30"></div>
        <div class="relative z-10 text-white text-center px-4">
            <h1 class="text-4xl md:text-5xl font-extrabold leading-tight mb-3">Pengajian Bulanan Masjid Jami' Al-Ikhlash</h1>
            <p class="text-lg md:text-xl font-light max-w-2xl mx-auto">
                Mempererat Ukhuwah, Menebar Manfaat.
            </p>
        </div>
    </div>

      <div class="mx-auto max-w-7xl px-2 py-8 sm:px-6 lg:px-8">
        <div class="bg-white p-8 rounded-lg shadow-xl -mt-16 relative z-20">
            <h2 class="text-3xl font-bold text-gray-900 mb-6 border-b-2 border-green-600 pb-2 text-center">Fastabiqul Khairat: Kajian Islam dan Kebersamaan</h2>

            <div class="md:flex md:space-x-8">
                <div class="md:w-2/3 prose max-w-none text-gray-700 leading-relaxed mb-8">
                    <p class="mb-4">
                        Dalam rangka meningkatkan keimanan dan tali persaudaraan, Masjid Jami' Al-Ikhlash secara rutin mengadakan kegiatan pengajian bulanan. Acara yang menjadi wadah bagi para jamaah untuk "berlomba-lomba dalam kebaikan" (Fastabiqul Khairat) ini diselenggarakan setiap bulan setelah pelaksanaan Sholat Isya.
                    </p>
                    <p class="mb-4">
                        Setiap bulannya, kami mengundang penceramah-penceramah terkemuka untuk membahas berbagai tema keislaman yang relevan dengan kehidupan sehari-hari. Ini adalah kesempatan berharga bagi kita semua untuk menimba ilmu, memperdalam pemahaman agama, dan mendapatkan pencerahan rohani.
                    </p>
                    <p class="mb-4">
                        Setelah sesi ceramah yang penuh hikmah, acara dilanjutkan dengan ramah tamah sambil menikmati hidangan makan malam yang telah disediakan. Momen kebersamaan ini diharapkan dapat mempererat ikatan silaturahim antar sesama jamaah, menciptakan suasana kekeluargaan yang hangat di lingkungan masjid.
                    </p>
                    <p>
                        Kami mengundang segenap kaum muslimin dan muslimat untuk dapat hadir dan meramaikan pengajian bulanan ini. Mari kita bersama-sama memakmurkan rumah Allah dan meraih keberkahan dalam majelis ilmu.
                    </p>
                </div>

                <div class="md:w-1/3 mt-8 md:mt-0 flex justify-center items-start">
                    <img
                        src="{{ asset('img/fastabiqul.png') }}"
                        alt="Ilustrasi Pengajian Bulanan"
                        class="rounded-lg shadow-md max-w-full h-auto object-cover"
                    >
                </div>
            </div>
        </div>
     </div>
</x-layout>