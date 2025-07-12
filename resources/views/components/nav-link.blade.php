@props(['active' => false, 'href' => '#'])

@php
$classes = ($active ?? false)
            ? 'block ps-4 pe-3 py-2 border-l-4 border-green-500 text-base font-medium text-green-700 bg-green-50 focus:outline-none focus:text-green-800 focus:bg-green-100 focus:border-green-700 transition duration-150 ease-in-out'
            : 'block ps-4 pe-3 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition duration-150 ease-in-out';
@endphp

<a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>