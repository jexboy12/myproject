<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Manajemen Ragam Info') }} {{-- TEKS INI DIUBAH --}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            {{-- Menampilkan pesan sukses --}}
            @if (session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>
            @endif

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <div class="mb-4">
                        <a href="{{ route('admin.ragam-info.create') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                            + Tambah Artikel Baru
                        </a>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="min-w-full bg-white border">
                            <thead class="bg-gray-200">
                                <tr>
                                    <th class="py-2 px-4 border-b text-left">No</th>
                                    <th class="py-2 px-4 border-b text-left">Judul</th>
                                    <th class="py-2 px-4 border-b text-left">Penulis</th>
                                    <th class="py-2 px-4 border-b text-left">Tanggal</th>
                                    <th class="py-2 px-4 border-b text-left">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($posts as $index => $post)
                                    <tr class="hover:bg-gray-100">
                                        {{-- Menyesuaikan nomor urut dengan halaman paginasi --}}
                                        <td class="py-2 px-4 border-b">{{ $posts->firstItem() + $index }}</td>
                                        <td class="py-2 px-4 border-b">{{ $post->title }}</td>
                                        <td class="py-2 px-4 border-b">{{ $post->user->name }}</td>
                                        <td class="py-2 px-4 border-b">{{ $post->created_at->format('d M Y') }}</td>
                                        <td class="py-2 px-4 border-b flex items-center">
                                            <a href="{{ route('admin.ragam-info.edit', $post) }}" class="text-blue-500 hover:text-blue-700 font-semibold mr-3">Edit</a>
                                            <form action="{{ route('admin.ragam-info.destroy', $post) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus artikel ini?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-500 hover:text-red-700 font-semibold">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="py-4 px-4 border-b text-center">
                                            Tidak ada data untuk ditampilkan.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    {{-- Tautan Paginasi --}}
                    <div class="mt-4">
                        {{ $posts->links() }}
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>