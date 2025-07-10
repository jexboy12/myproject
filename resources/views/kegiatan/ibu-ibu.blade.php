<x-layout>
   <x-slot name="title">{{ $title ?? 'Pengajian Ibu-Ibu' }}</x-slot>
   
    <x-header
        :title="'Visi dan Misi PRIMA'" 
        :currentPageTitle="'Visi Misi'" 
    />

    <div class="relative bg-green-600 h-72 flex items-center justify-center rounded-b-lg">
        <div class="absolute inset-0 bg-black opacity-30"></div>
        <div class="relative z-10 text-white text-center px-4">
            <h1 class="text-4xl md:text-5xl font-extrabold leading-tight mb-3">Pengajian Ibu-Ibu</h1>
            <p class="text-lg md:text-xl font-light max-w-2x1 mx-auto">
                Menjalin Ukhuwah, Menambah Ilmu, Meningkatkan Keimanan dan Peran Muslimah dalam Keluarga dan Masyarakat
            </p>
        </div>
        
    </div>
      <div class="mx-auto max-w-7xl px-4 py-8 sm:px-6 lg:px-8">
        <div class="bg-white p-8 rounded-lg shadow-xl -mt-16 relative z-20">
            <h2 class="text-3xl font-bold text-gray-900 mb-6 border-b-2 border-green-600 pb-2 text-center">Kegiatan Mingguan Rutin Ibu-Ibu</h2>

            <div class="md:flex md:space-x-8"> {{-- Menggunakan flexbox untuk layout dua kolom --}}
                <div class="md:w-2/3 prose max-w-none text-gray-700 leading-relaxed mb-8"> {{-- Konten artikel 2/3 lebar --}}
                    <p class="mb-4">
                        Masjid Jami’ Al-Ikhlas yang terletak di Jl.Usman Randu I, RT/RW 05/04 merupakan salah satu masjid yang aktif dalam menyelenggarakan kegiatan keagamaan untuk masyarakat sekitar. Letaknya yang berada di tengah lingkungan pemukiman menjadikan masjid ini menjadi pusat ibadah dan kegiatan sosial warga, khususnya kaum ibu.
                    </p>
                    <p class="mb-4">
                        Selain menyelenggarakan shalat lima waktu dan kegiatan keagamaan lainnya, Masjid Jami’ Al-Ikhlas juga mengadakan <strong>pengajian rutin khusus ibu-ibu</strong>. Kegiatan ini dilaksanakan <strong>setiap hari Jumat setelah Sholat Jumat atau pukul 13.00 WIB</strong>, dan menjadi momen penting bagi para ibu untuk berkumpul, menimba ilmu, dan mempererat ukhuwah Islamiyah.
                    </p>
                </div>
                
                <div class="md:w-1/3 mt-8 md:mt-0 flex justify-center items-start"> {{-- Gambar 1/3 lebar, rata kanan secara vertikal --}}
                    <img 
                        src="{{ asset('img/muslimah1.jpg') }}" {{-- Ganti dengan path gambar Anda --}}
                        alt="Ilustrasi Kuliah Subuh" 
                        class="rounded-lg shadow-md max-w-full h-auto object-cover"
                    >
                </div>
            </div>
        </div>
     </div>
</x-layout>
