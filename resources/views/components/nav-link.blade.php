@props(['href', 'active' => false])

@php
    $classes = ($active ?? false)
                ? 'block px-4 py-2 text-base text-green-700 font-semibold bg-gray-100 transition duration-150 ease-in-out' // Kelas untuk link aktif
                : 'block px-4 py-2 text-base text-gray-800 hover:text-green-600 transition duration-150 ease-in-out'; // Kelas untuk link tidak aktif
@endphp

<a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
   {{ $slot }}
</a>