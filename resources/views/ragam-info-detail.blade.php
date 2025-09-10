<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    
    <x-header :title="$post->title" :currentPageTitle="'Detail Info'" />

    <div class="mx-auto max-w-7xl px-4 py-8 sm:px-6 lg:px-8">
        <div class="bg-white p-8 rounded-xl shadow-xl mt-2">
            <article>
                {{-- PERUBAHAN DI SINI --}}
                <img src="{{ $post->image ? asset('storage/' . $post->image) : asset('img/logo-masjidd.jpg') }}" 
                     alt="{{ $post->title }}" 
                     class="w-full h-auto max-h-[450px] object-cover rounded-lg shadow-md mb-6">

                <h1 class="text-4xl font-bold text-gray-900 mb-2">{{ $post->title }}</h1>
                <div class="text-base text-gray-500 mb-6">
                    <span>Diunggah pada {{ $post->created_at->format('d F Y') }}</span>
                    <span class="mx-2">|</span>
                    <span>Oleh: {{ $post->user->name }}</span>
                </div>

                <div class="prose max-w-none text-gray-800 text-lg leading-relaxed">
                    {!! $post->content !!}
                </div>

                <div class="mt-8 pt-6 border-t border-gray-200">
                    <a href="{{ route('ragam.info') }}" class="inline-block text-green-600 hover:text-green-800 font-semibold">
                        &larr; Kembali ke semua info
                    </a>
                </div>
            </article>
        </div>
    </div>
</x-layout>