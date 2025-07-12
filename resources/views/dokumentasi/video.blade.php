<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <x-header :title="'Galeri Video Masjid Jami Al-Ikhlash'" :currentPageTitle="'Dokumentasi'" />

    <div class="mx-auto max-w-7xl px-4 py-8 sm:px-6 lg:px-8">
        <div class="bg-white p-8 rounded-xl shadow-xl mt-2">
            <h2 class="text-3xl font-bold text-gray-900 mb-8 border-b-2 border-green-600 pb-2 text-center">Video Terbaru Kami</h2>

            @if (!empty($videos))
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach ($videos as $video)
                        <div class="bg-gray-50 rounded-lg shadow-md overflow-hidden transform hover:-translate-y-2 transition-transform duration-300">
                            <a href="https://www.youtube.com/watch?v={{ $video['id']['videoId'] }}" target="_blank">
                                <img src="{{ $video['snippet']['thumbnails']['high']['url'] }}" alt="{{ $video['snippet']['title'] }}" class="w-full h-48 object-cover">
                            </a>
                            <div class="p-4">
                                <h3 class="font-semibold text-lg h-16 leading-tight">
                                    <a href="https://www.youtube.com/watch?v={{ $video['id']['videoId'] }}" target="_blank" class="text-gray-800 hover:text-green-700"> {!! \Illuminate\Support\Str::limit($video['snippet']['title'], 60) !!}
                                    </a>
                                </h3>
                                <p class="text-sm text-gray-500 mt-2">
                                    {{ \Carbon\Carbon::parse($video['snippet']['publishedAt'])->translatedFormat('d F Y') }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <p class="text-center text-gray-500 py-10">
                    Tidak dapat memuat video saat ini atau belum ada video di channel.
                </p>
            @endif
        </div>
    </div>
</x-layout>