<x-layout>
    <x-slot name="title">{{ $title ?? 'Pengurus DKM' }}</x-slot>

    <x-header
        :title="'Pengurus DKM'"
        :currentPageTitle="'Pengurus DKM'"
    />

    <div class="mx-auto max-w-7xl px-2 py-4 sm:px-6 lg:px-8">
        <div class="bg-white p-8 rounded-xl shadow-xl mt-8">
            <h2 class="text-3xl font-bold text-gray-900 mb-6 border-b-2 border-green-600 pb-2 text-center w-full">Struktural Organisasi Masjid Jami' Al-Ikhlash</h2>
            
            <h3 class="text-2xl font-bold text-gray-800 mt-8 mb-4 text-left">Dewan Pembina:</h3>
                <ol class="list-decimal list-inside mb-4 text-left pl-5">
                    <li>Lurah Kelapa Dua Wetan.</li>
                    <li>Pengurus DMI Ranting Kelapa Dua Wetan.</li>
                    <li>Ketua Lingkungan RW 04 Kelapa Dua Wetan.</li>
                </ol>

            <h3 class="text-2xl font-bold text-gray-800 mt-8 mb-4 text-left"> <strong>Dewan Penasihat : </strong></h3>
                <ol class="list-decimal list-inside mb-4 text-left pl-5">
                    <li>H. Paminta FA. Sijabat, ST</li>
                    <li>H. Sunanto</li>
                    <li>KH. Misbah Musthofa, S, Ag</li>
                </ol>

                {{-- Garis pembatas --}}
                <hr class="border-t border-gray-300 w-full mx-auto my-8">

            <h3 class="text-2xl font-bold text-gray-800 mt-8 mb-4 text-left">Dewan Pengurus:</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 w-full max-w-4xl mx-auto">
                {{-- Ketua Dewan Pengurus --}}
                <div class="flex flex-col items-center text-center p-4">
                    <img src="{{ asset('img/suheli.jpg') }}" alt="Foto Ketua Dewan Pengurus" class="w-48 h-48 object-cover rounded-full shadow-lg mb-2">
                    <h3 class="text-xl font-bold text-gray-800 mb-1">Ustadz H. Suheli S.Pd.I</h3>
                    <p class="text-green-700 text-lg font-semibold mb-4">Dewan Ketua Pengurus </p>  
                </div>

                {{-- Wakil Dewan Pengurus --}}
                <div class="flex flex-col items-center text-center p-4">
                    <img src="{{ asset('img/ismail.png') }}" alt="Foto Wakil Dewan Pengurus" class="w-48 h-48 object-cover rounded-full shadow-lg mb-2">
                    <h3 class="text-xl font-bold text-gray-800 mb-1">H. Ismail Fuad</h3>
                    <p class="text-green-700 text-lg font-semibold mb-4">Dewan Wakil Pengurus</p>  
                </div>
            </div>

            <hr class="border-t border-gray-300 w-full mx-auto my-8">

            <h3 class="text-2xl font-bold text-gray-800 mt-8 mb-4 text-left">Sekretaris:</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 w-full max-w-4xl mx-auto">
                {{-- Sekretaris I --}}
                <div class="flex flex-col items-center text-center p-4">
                    <img src="{{ asset('img/ricky.jpg') }}" alt="Foto Sekretaris I" class="w-48 h-48 object-cover rounded-full shadow-lg mb-4">
                    <h3 class="text-2xl font-bold text-gray-800 mb-1">Ricky Sediawan, SS, MM</h3>
                    <p class="text-green-700 text-lg font-semibold mb-4">Sekretaris I</p>  
                </div> 

                {{-- Sekretaris II--}}
                <div class="flex flex-col items-center text-center p-4">
                    <img src="{{ asset('img/sanuri.png') }}" alt="Foto Sekretaris II" class="w-48 h-48 object-cover rounded-full shadow-lg mb-4">
                    <h3 class="text-2xl font-bold text-gray-800 mb-1">H. Sanuri</h3>
                    <p class="text-green-700 text-lg font-semibold mb-4">Sekretaris II</p>  
                </div>
            </div>

            <hr class="border-t border-gray-300 w-full mx-auto my-8">

            <h3 class="text-2xl font-bold text-gray-800 mt-8 mb-4 text-left">Bendahara:</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 w-full max-w-4xl mx-auto">
                {{-- Bendahara I--}}
                <div class="flex flex-col items-center text-center p-4">
                    <img src="{{ asset('img/juhana.png') }}" alt="Bendahara I" class="w-48 h-48 object-cover rounded-full shadow-lg mb-4">
                    <h3 class="text-2xl font-bold text-gray-800 mb-1">Juhana</h3>
                    <p class="text-green-700 text-lg font-semibold mb-4">Bendahara I</p> 
                </div>

                {{-- Bendahara II--}}
                <div class="flex flex-col items-center text-center p-4">
                    <img src="{{ asset('img/surahman.png') }}" alt="Bendahara II" class="w-48 h-48 object-cover rounded-full shadow-lg mb-4">
                    <h3 class="text-2xl font-bold text-gray-800 mb-1">Surahman</h3>
                    <p class="text-green-700 text-lg font-semibold mb-4">Bendahara II</p> 
                </div> 
            </div>

            <hr class="border-t border-gray-300 w-full mx-auto my-8">

            {{-- Hapus border-b border-gray-300 pb-2 --}}
            <h3 class="text-2xl font-bold text-gray-800 mt-8 mb-4 text-left">I. BIDANG IDAROH / MANAJEMEN LITBANG :</h3>
            <ol class="list-decimal list-inside mb-4 text-left pl-5">
                <li>Dewan Penasihat</li>
                <li>Dewan Pengurus</li>
            </ol>

            <hr class="border-t border-gray-300 w-full mx-auto my-8">

            <h3 class="text-2xl font-bold text-gray-800 mt-8 mb-4 text-left">II. BIDANG IMAROH / PEMAKMURKAN MASJID :</h3>
            
            <h4 class="text-xl font-semibold text-gray-800 mt-4 mb-2 text-left">A. Sie Dakwah dan Peribadatan :</h4>
            <ol class="list-decimal list-inside mb-4 text-left pl-5">
                <li>Jasrul Authoni, M. Pd</li>
                <li>Rian Ilham Rasyid, SH. I</li>
                <li>Dwi Susanto</li>
                <li>Abdul Wahab</li>
                <li>Arman</li>
            </ol>

            <h4 class="text-xl font-semibold text-gray-800 mt-4 mb-2 text-left">B. Sie Usaha dan Penggalian Sumber Dana :</h4>
            <ol class="list-decimal list-inside mb-4 text-left pl-5">
                <li>Trimo Santoso</li>
                <li>H. Oktavianus</li>
                <li>Dr. Nana Sutarna</li>
                <li>dr. Sopiudin Dahlan</li>
            </ol>

            <h4 class="text-xl font-semibold text-gray-800 mt-4 mb-2 text-left">C. Sie Humas dan IT :</h4>
            <ol class="list-decimal list-inside mb-4 text-left pl-5">
                <li>Ahmad Rizky Hanizar, S. Pd</li>
                <li>Ahmad Dzikriansyah</li>
                <li>M. Fajar Shoodiq</li>
            </ol>

            <h4 class="text-xl font-semibold text-gray-800 mt-4 mb-2 text-left">D. Sie Pemuda dan Remaja Masjid :</h4>
            <ol class="list-decimal list-inside mb-4 text-left pl-5">
                <li>Sigit, S. Pd</li>
                <li>Dedy Supriadi, M. Pd</li>
                <li>Febri Ari</li>
                <li>M. Reyhan Fuadi</li>
                <li>M. Rijal Fuadi</li>
                <li>Maulana</li>
            </ol>


            <h3 class="text-xl font-semibold text-gray-800 mt-4 mb-2 text-left">E. Sie Pemberdayaan Majlis Ta'lim Kaum Ibu :</h3>
            <ol class="list-decimal list-inside mb-4 text-left pl-5">
                <li>Hj. Sholeha, S. Pd</li>
                <li>Hj. Yanti Mala</li>
                <li>Hj. Cerah Abdurrahman</li>
                <li>Farida Aryani</li>
                <li>Ibu Sriyani</li>
                <li>Ibu Simah</li>
                <li>Ibu Ellita</li>
                <li>Fitri Agustina</li>
            </ol>

            <hr class="border-t border-gray-300 w-full mx-auto my-8">

            <h3 class="text-2xl font-bold text-gray-800 mt-8 mb-4 text-left">III. BIDANG RI'AYAH/PEMELIHARAAN DAN PENGADAAN FASILITAS MASJID :</h3>
            
            <h4 class="text-xl font-semibold text-gray-800 mt-4 mb-2 text-left">A. Sie Pemeliharaan dan Perawatan Bangunan :</h4>
            <ol class="list-decimal list-inside mb-4 text-left pl-5">
                <li>Hermawan, ST</li>
                <li>Purwoko Edy Susilo</li>
                <li>H. Hamdi Slamet</li>
                <li>Munajat Zainal</li>
                <li>Zulhamirullah</li>
                <li>Eko</li>
            </ol>

            <h4 class="text-xl font-semibold text-gray-800 mt-4 mb-2 text-left">B. Sie Kebersihan dan Keindahan Lingkungan :</h4>
            <ol class="list-decimal list-inside mb-4 text-left pl-5">
                <li>Joko Supriyanto</li>
                <li>Asep Supriyadi</li>
                <li>Bambang Supangkat</li>
                <li>Nurcacim</li>
                <li>Rahmat Nurdin</li>
            </ol>

            <h4 class="text-xl font-semibold text-gray-800 mt-4 mb-2 text-left">C. Sie Keamanan dan Ketertiban Lingkungan :</h4>
            <ol class="list-decimal list-inside mb-4 text-left pl-5">
                <li>Hanafi Ali Keran</li>
                <li>Supriyanto</li>
                <li>Rudi Susilo</li>
                <li>Pratik Purwanto</li>
                <li>Sugiharto</li>
            </ol>

            <h4 class="text-xl font-semibold text-gray-800 mt-4 mb-2 text-left">D. Marbot Masjid :</h4>
            <ol class="list-inside mb-4 text-left pl-5">
                <li>M. Yunus</li>
            </ol>

        </div>
    </div>
</x-layout>