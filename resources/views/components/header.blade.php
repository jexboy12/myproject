{{-- views/components/header.blade.php --}}
@props(['title'])

<header class="bg-green-700 rounded-lg">
    <div class="px-4 py-6 sm:px-6 lg:px-8">
        {{-- Judul Halaman --}}
        <h1 class="text-2xl font-bold tracking-tight text-white">{{ $title }}</h1>
    </div>
</header>