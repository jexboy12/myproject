{{-- views/components/header.blade.php --}}
@props(['title', 'currentPageTitle'])

<header class="bg-green-700 rounded-lg"> {{-- Ubah dari bg-gray-700 menjadi bg-green-700 --}}
    <div class="px-4 py-6 sm:px-6 lg:px-8 flex justify-between items-center">
        {{-- Sisi kiri: Judul Halaman --}}
        <div>
            <h1 class="text-2xl font-bold tracking-tight text-white">{{ $title }}</h1>
        </div>
        {{-- Sisi kanan: Breadcrumb --}}
        <div class="text-sm text-white">
            <a href="{{ route('home') }}" class="text-white hover:text-gray-300">Home</a>
            <span class="mx-2 text-white">/</span>
            <span class="text-white">{{ $title }}</span>
        </div>
    </div>
</header>