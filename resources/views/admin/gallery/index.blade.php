<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Manajemen Galeri Home') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @if (session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>
            @endif

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-medium mb-4">Unggah Gambar Baru</h3>
                    <form action="{{ route('admin.gallery.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-4">
                            <label for="title" class="block text-sm font-medium text-gray-700">Judul (Opsional)</label>
                            <input type="text" name="title" id="title" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                        </div>
                        <div class="mb-4">
                            <label for="image" class="block text-sm font-medium text-gray-700">File Gambar</label>
                            <input type="file" name="image" id="image" class="mt-1 block w-full" required>
                        </div>
                        <div>
                            <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700">
                                Unggah
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-medium mb-4">Galeri Saat Ini</h3>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                        @forelse ($galleryPosts as $post)
                            <div class="relative">
                                <img src="{{ asset('storage/' . $post->image_path) }}" alt="{{ $post->title }}" class="rounded-md object-cover w-full h-40">
                                <form action="{{ route('admin.gallery.destroy', $post) }}" method="POST" class="absolute top-1 right-1" onsubmit="return confirm('Yakin ingin menghapus gambar ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="p-1.5 bg-red-600 text-white rounded-full hover:bg-red-700 text-xs">
                                        X
                                    </button>
                                </form>
                                <p class="text-xs text-center mt-1 text-gray-600">{{ $post->title }}</p>
                            </div>
                        @empty
                            <p class="col-span-4 text-center text-gray-500">Belum ada gambar di galeri.</p>
                        @endforelse
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>