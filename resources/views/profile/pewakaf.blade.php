<x-layout>
<x-header :title="'Pewakaf Masjid'" />

<div class="mx-auto max-w-7xl px-2 py-4 sm:px-6 lg:px-8">
    <div class="bg-white p-8 rounded-xl shadow-xl mt-8">
       <div class="flex flex-col md:flex-row items-center md:items-start md:space-x-8">
            <div class="md:w-1/3 mb-6 md:mb-0">
            <img src="{{ asset('img/wakaf.jpg') }}" alt="Foto Ketua Umum PRIMA" class="w-64 h-64 object-cover rounded-full shadow-lg mb-4">
         </div>

        <div class="md:w-2/3">
            <p class="text-2xl font-bold mb-2">Almh. Raibah binti sotet</p>
            <p class="text-gray-600 mb-4">(Pewakaf Masjid Jami' Al-Ikhlas)</p>
            <p class="text-lg leading-relaxed">
                Masjid Jami' Al-Ikhlash adalah pindahan dari Pedurenan RT. 03 RW. 05 Kel. Karet Kuningan Setiabudi Jakarta Selatan. Wakaf dari Raibah diteruskan oleh Hj. Sitinah
            </p>
            <p class="text-gray-600 py-4 mb-4"> Masjid ini dibangun pada Juni, tahun 1996
            </p>
        </div>
    </div>
</div>

</x-layout>