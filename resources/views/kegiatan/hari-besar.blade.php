<x-layout>
    <x-slot name="title">{{ $title ?? 'Judul Halaman' }}</x-slot>
    <div class="relative bg-green-600 h-72 flex items-center justify-center rounded-b-lg">
        <div class="absolute inset-0 bg-black opacity-30"></div>
        <div class="relative z-10 text-white text-center px-4">
            <h1 class="text-4xl md:text-5xl font-extrabold leading-tight mb-3">Kegiatan Besar Masjid Jami' Al-Ikhlash</h1>
            <p class="text-lg md:text-xl font-light max-w-2x1 mx-auto">
                {{-- belum ada --}}
            </p>
        </div>   

    </div>
    
      <div class="mx-auto max-w-7xl px-4 py-8 sm:px-6 lg:px-8">
        <div class="bg-white p-8 rounded-lg shadow-xl -mt-16 relative z-20">
            {{-- isi disini --}}
        </div>

     </div>
</x-layout>
