{{-- views/prima/visi-misi.blade.php --}}
<x-layout>
    <x-slot name="title">{{ $title ?? 'Imam dan Muadzin' }}</x-slot>
    <x-header
        :title="'Visi dan Misi Masjid Al-Ikhlash'"
        :currentPageTitle="'Visi Misi'" 
    />

    <div class="mx-auto max-w-7xl px-4 py-4 sm:px-6 lg:px-8">
        <div class="bg-white p-8 rounded-xl shadow-xl mt-8">

          
            <h2 class="text-3xl font-bold text-gray-900 mb-6 border-b-2 border-green-600 pb-2">Visi</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-start mb-8">
                <div class="md:col-span-2 prose max-w-none">
                    <p>
                        <strong>Menjadikan Masjid Sebagai Sarana Ibadah yang Aman,  Nyaman dan Kondusif serta Sebagai Sarana Dakwah dan Pembinaan Ummat</strong>
                    </p>
                </div>

                <div class="md:col-span-1 flex justify-center items-center">
                    {{-- Pastikan Anda memiliki gambar ini di public/img/ --}}
                    <img src="{{ asset('img/masjid-visi-misi.jpg') }}" alt="Ilustrasi Visi Masjid" class="w-full h-auto rounded-lg shadow-md object-cover">
                </div>
            </div>

            {{-- Bagian Misi (Tanpa Foto) --}}
            <h2 class="text-3xl font-bold text-gray-900 mt-8 mb-6 border-b-2 border-green-600 pb-2">Misi</h2>
            <div class="prose max-w-none mb-8">
                <ol class="list-decimal list-inside space-y-2">
                    <li>Memakmurkan masjid dan dimakmurkan masjid melalui kegiatan imaroh.</li>
                    <li>Mengelola masjid sebagai pusat ibadah yang kondusif dan nyaman bagi umat melalui bidang ri’ayah.</li>
                    <li>Menyelenggarakan pembinaan ummat melalui kegiatan Majlis Ta’lim dan Peringatan Hari-hari Besar Islam.</li>
                    <li>Menyelenggarakan membina remaja masjid melalui kegitan pelatihan dan pemberdayaan ekonomi ummat dan kegiatan kesenian.</li>
                    <li>Menciptakan lingkungan masjid yang nyaman, bersih, dan ramah bagi seluruh jamaah.</li>
                </ol>
            </div>

        </div>
        
    </div>
</x-layout>