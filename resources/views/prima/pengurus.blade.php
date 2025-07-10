<x-layout>
    <x-slot name="title">{{ $title ?? 'Pengurus PRIMA' }}</x-slot>

    <x-header
        :title="'Pengurus PRIMA'" 
        :currentPageTitle="'Pengurus'"
    />

    <div class="mx-auto max-w-7xl px-4 py-8 sm:px-6 lg:px-8">
        <div class="bg-white p-8 rounded-lg shadow-md flex flex-col items-center">
            <h2 class="text-3xl font-bold text-gray-900 mb-6 border-b-2 border-green-600 pb-2 text-center w-full">Pimpinan Organisasi PRIMA</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 w-full max-w-4xl">
                {{-- Ketua Umum --}}
                <div class="flex flex-col items-center text-center p-4">
                    <img src="{{ asset('img/profil_muadzin.jpg') }}" alt="Foto Ketua Umum PRIMA" class="w-64 h-64 object-cover rounded-full shadow-lg mb-4">
                    <h3 class="text-2xl font-bold text-gray-800 mb-1">Misbahul Munir</h3>
         {{--    <p class="text-green-700 text-lg font-semibold mb-4">Ketua Umum PRIMA</p> --}}
                </div>

                {{-- Wakil Ketua Umum --}}
                <div class="flex flex-col items-center text-center p-4">
                    <img src="{{ asset('img/profil_muadzin.jpg') }}" alt="Foto Wakil Ketua Umum PRIMA" class="w-64 h-64 object-cover rounded-full shadow-lg mb-4">
                    <h3 class="text-2xl font-bold text-gray-800 mb-1">Muhammad Fajar Shodiq</h3>
         {{--    <p class="text-green-700 text-lg font-semibold mb-4">Wakil Ketua Umum PRIMA</p> --}}
                </div>
            </div>
        </div>
    </div>
</x-layout>