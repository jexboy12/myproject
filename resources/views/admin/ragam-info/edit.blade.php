<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Artikel') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <form action="{{ route('admin.ragam-info.update', $post) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH') {{-- Method spoofing untuk update --}}
                        
                        {{-- Judul --}}
                        <div class="mb-4">
                            <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Judul Artikel:</label>
                            <input type="text" name="title" id="title" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('title', $post->title) }}" required>
                        </div>

                        {{-- Konten (dengan id="content-editor") --}}
                        <div class="mb-4">
                            <label for="content-editor" class="block text-gray-700 text-sm font-bold mb-2">Isi Konten:</label>
                            <textarea name="content" id="content-editor" rows="10" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>{{ old('content', $post->content) }}</textarea>
                        </div>
                        
                        {{-- Upload Gambar --}}
                        <div class="mb-6">
                            <label for="image" class="block text-gray-700 text-sm font-bold mb-2">Ganti Gambar (Opsional):</label>
                            @if ($post->image)
                                <img src="{{ asset('storage/' . $post->image) }}" alt="Current image" class="w-48 h-auto rounded mb-2">
                            @endif
                            <input type="file" name="image" id="image" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        </div>

                        {{-- Tombol --}}
                        <div class="flex items-center justify-between">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                Perbarui Artikel
                            </button>
                            <a href="{{ route('dashboard') }}" class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">
                                Batal
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- Script untuk TinyMCE --}}
    <script src="https://cdn.tiny.cloud/1/d7vwcg73qh4oryaigy9n4b40bea2vo4gajzgebz1te5rx2eh/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea#content-editor',
            plugins: 'code table lists image link',
            toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table | image | link'
        });
    </script>
</x-app-layout>