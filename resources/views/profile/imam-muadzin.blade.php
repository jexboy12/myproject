<x-layout>
    <x-header :title="'Imam dan Muadzin'" />

    <div class="container mx-auto py-8">
        <h2 class="text-3xl font-bold text-center mb-8">Imam Masjid</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            {{-- Imam 1 --}}
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="{{ asset('img/profil_imam.jpg') }}" alt="H. Sayyid Muhammad Husein" class="w-full h-64 object-cover">
                <div class="p-4 text-center">
                    <h3 class="text-xl font-semibold">Ustadz H. Suheli S.Pdi</h3>
                </div>
            </div>

            {{-- Imam 2 --}}
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="{{ asset('img/profil_imam.jpg') }}" alt="H. Muhammad Ikbal" class="w-full h-64 object-cover">
                <div class="p-4 text-center">
                    <h3 class="text-xl font-semibold">Ustadz H. Ismail Ahmad Fuad</h3>
                </div>
            </div>

            {{-- Imam 3 --}}
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="{{ asset('img/profil_imam.jpg') }}" alt="H. Muhajirin M.Sc." class="w-full h-64 object-cover">
                <div class="p-4 text-center">
                    <h3 class="text-xl font-semibold">Ustadz Wahab</h3>
                </div>
            </div>

            {{-- Imam 4 --}}
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="{{ asset('img/profil_imam.jpg') }}" alt="Ustadz H. Ahmad Muzani" class="w-full h-64 object-cover">
                <div class="p-4 text-center">
                    <h3 class="text-xl font-semibold">Ustadz Rian Ilham Rasyid</h3>
                </div>
            </div>
        </div>

        <h2 class="text-3xl font-bold text-center mt-12 mb-8">Muadzin Masjid</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            {{-- Muadzin 1 --}}
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="{{ asset('img/profil_muadzin.jpg') }}" alt="H. M. Abdul Azis" class="w-full h-64 object-cover">
                <div class="p-4 text-center">
                    <h3 class="text-xl font-semibold">Muhammad Fajar Shodiq</h3>
                </div>
            </div>

            {{-- Muadzin 2 --}}
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="{{ asset('img/profil_muadzin.jpg') }}" alt="Ustadz H. Fathan Habibi" class="w-full h-64 object-cover">
                <div class="p-4 text-center">
                    <h3 class="text-xl font-semibold">Misbahul Munir</h3>
                </div>
            </div>

            {{-- Muadzin 3 --}}
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="{{ asset('img/profil_muadzin.jpg') }}" alt="Ustadz M. Syarif" class="w-full h-64 object-cover">
                <div class="p-4 text-center">
                    <h3 class="text-xl font-semibold">Ahmad Qadri</h3>
                </div>
            </div>

            {{-- Muadzin 4 --}}
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="{{ asset('img/profil_muadzin.jpg') }}" alt="Ustadz M. Syarif" class="w-full h-64 object-cover">
                <div class="p-4 text-center">
                    <h3 class="text-xl font-semibold">Muhammad Luftan</h3>
                </div>
            </div>
        </div>
    </div>
</x-layout>