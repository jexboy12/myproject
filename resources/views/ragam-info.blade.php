<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-header :title="'Ragam Info'" :currentPageTitle="'Ragam Info'" />

    <div class="mx-auto max-w-7xl px-4 py-8 sm:px-6 lg:px-8">
        <div class="bg-white p-8 rounded-xl shadow-xl mt-2">
            <h2 class="text-3xl font-bold text-gray-900 mb-8 border-b-2 border-green-600 pb-2 text-center">Ragam Info Masjid</h2>
            
            <div class="space-y-12">
                @forelse ($posts as $post)
                    <article class="flex flex-col md:flex-row items-start gap-8">
                        <div class="w-full md:w-1/3 flex-shrink-0">
                            <a href="{{ route('ragam.info.show', $post) }}">
                                {{-- PERUBAHAN DI SINI --}}
                                <img src="{{ $post->image ? asset('storage/' . $post->image) : asset('img/logo-masjidd.jpg') }}" 
                                     alt="{{ $post->title }}" 
                                     class="w-full h-48 object-cover rounded-lg shadow-md hover:opacity-80 transition-opacity">
                            </a>
                        </div>

                        <div class="w-full md:w-2/3">
                            <h3 class="text-2xl font-bold text-gray-900 hover:text-green-700 transition">
                                <a href="{{ route('ragam.info.show', $post) }}">{{ $post->title }}</a>
                            </h3>
                            <div class="text-sm text-gray-500 mt-2 mb-4">
                                <span>Diunggah pada {{ $post->created_at->format('d F Y') }}</span>
                                <span class="mx-2">|</span>
                                <span>Oleh: {{ $post->user->name }}</span>
                            </div>
                            <div class="prose max-w-none text-gray-700">
                                {!! \Illuminate\Support\Str::limit(strip_tags($post->content), 250, '...') !!}
                            </div>
                            <a href="{{ route('ragam.info.show', $post) }}" class="inline-block mt-4 text-green-600 hover:text-green-800 font-semibold">
                                Baca Selengkapnya &rarr;
                            </a>
                        </div>
                    </article>
                    @if (!$loop->last)
                        <hr class="my-8 border-t border-gray-200">
                    @endif
                @empty
                    <p class="text-center text-gray-500">Belum ada informasi yang tersedia.</p>
                @endforelse
            </div>

            <div class="mt-8">
                {{ $posts->links() }}
            </div>

        </div>
    </div>
</x-layout>