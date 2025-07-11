<nav x-data="{ open: false, dropdowns: { profile: false, prima: false, kegiatan: false, layanan: false, dokumentasi: false } }"
     class="bg-white border-b border-gray-200 sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <div class="flex items-center">
                <div class="hidden sm:flex items-center">
                    <div class="relative px-6 border-l border-gray-300">
                        <a href="{{ route('home') }}" class="inline-flex items-center text-gray-800 hover:text-green-600 text-base font-medium transition {{ request()->routeIs('home') ? 'text-green-700 font-semibold' : '' }}">
                            Home
                        </a>
                    </div>

                    <div class="relative group px-6 border-l border-gray-300">
                        <button @mouseenter="dropdowns.profile = true" @mouseleave="dropdowns.profile = false"
                                class="inline-flex items-center text-gray-800 hover:text-green-600 text-base font-medium transition {{ request()->routeIs('profile.*') ? 'text-green-700 font-semibold' : '' }}">
                            Profile
                            <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div x-show="dropdowns.profile" @mouseenter="dropdowns.profile = true" @mouseleave="dropdowns.profile = false"
                             x-transition class="absolute mt-2 w-56 bg-white border rounded-md shadow-lg z-50 py-2">
                             <x-nav-link href="{{ route('profile.sejarah') }}" :active="request()->routeIs('profile.sejarah')">Sejarah Masjid</x-nav-link>
                             <x-nav-link href="{{ route('profile.pewakaf') }}" :active="request()->routeIs('profile.pewakaf')">Pewakaf Masjid</x-nav-link>
                            <x-nav-link href="{{ route('profile.visi') }}" :active="request()->routeIs('profile.visi')">Visi dan Misi</x-nav-link>
                            <x-nav-link href="{{ route('profile.struktural') }}" :active="request()->routeIs('profile.struktural')">Struktural Organisasi</x-nav-link>
                            <x-nav-link href="{{ route('profile.imam') }}" :active="request()->routeIs('profile.imam')">Imam dan Muadzin</x-nav-link>
                        </div>
                    </div>

                    <div class="relative group px-6 border-l border-gray-300">
                        <button @mouseenter="dropdowns.prima = true" @mouseleave="dropdowns.prima = false"
                                class="inline-flex items-center text-gray-800 hover:text-green-600 text-base font-medium transition {{ request()->routeIs('prima.*') ? 'text-green-700 font-semibold' : '' }}">
                            Prima
                            <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div x-show="dropdowns.prima" @mouseenter="dropdowns.prima = true" @mouseleave="dropdowns.prima = false"
                             x-transition class="absolute mt-2 w-56 bg-white border rounded-md shadow-lg z-50 py-2">
                            <x-nav-link href="{{ route('prima.sejarah') }}" :active="request()->routeIs('prima.sejarah')">Sejarah</x-nav-link>
                            <x-nav-link href="{{ route('prima.visi-misi') }}" :active="request()->routeIs('prima.visi-misi')">Visi Misi</x-nav-link>
                            <x-nav-link href="{{ route('prima.pengurus') }}" :active="request()->routeIs('prima.pengurus')">Pengurus</x-nav-link>
                        </div>
                    </div>

                    <div class="relative group px-6 border-l border-gray-300">
                        <button @mouseenter="dropdowns.kegiatan = true" @mouseleave="dropdowns.kegiatan = false"
                                class="inline-flex items-center text-gray-800 hover:text-green-600 text-base font-medium transition {{ request()->routeIs('kegiatan.*') ? 'text-green-700 font-semibold' : '' }}">
                            Kegiatan
                            <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div x-show="dropdowns.kegiatan" @mouseenter="dropdowns.kegiatan = true" @mouseleave="dropdowns.kegiatan = false"
                             x-transition class="absolute mt-2 w-56 bg-white border rounded-md shadow-lg z-50 py-2">
                            <x-nav-link href="{{ route('kegiatan.kuliah-subuh') }}" :active="request()->routeIs('kegiatan.kuliah-subuh')">Kuliah Subuh</x-nav-link>
                            <x-nav-link href="{{ route('kegiatan.ibu-ibu') }}" :active="request()->routeIs('kegiatan.ibu-ibu')">Pengajian Ibu-ibu</x-nav-link>
                            <x-nav-link href="{{ route('kegiatan.hari-besar') }}" :active="request()->routeIs('kegiatan.hari-besar')">Hari Besar</x-nav-link>
                        </div>
                    </div>

                    <div class="relative group px-6 border-l border-gray-300">
                        <button @mouseenter="dropdowns.layanan = true" @mouseleave="dropdowns.layanan = false"
                                class="inline-flex items-center text-gray-800 hover:text-green-600 text-base font-medium transition {{ request()->routeIs('layanan.*') ? 'text-green-700 font-semibold' : '' }}">
                            Layanan
                            <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div x-show="dropdowns.layanan" @mouseenter="dropdowns.layanan = true" @mouseleave="dropdowns.layanan = false"
                             x-transition class="absolute mt-2 w-56 bg-white border rounded-md shadow-lg z-50 py-2">
                            <x-nav-link href="{{ route('layanan.akad-nikah') }}" :active="request()->routeIs('layanan.akad-nikah')">Acara Akad Nikah</x-nav-link>
                            <x-nav-link href="{{ route('layanan.muallaf') }}" :active="request()->routeIs('layanan.muallaf')">Layanan jadi Muallaf</x-nav-link>
                        </div>
                    </div>

                    <div class="relative px-6 border-l border-gray-300">
                        {{-- INI BAGIAN YANG DIPERBAIKI --}}
                        <a href="{{ route('ragam.info') }}" class="inline-flex items-center text-gray-800 hover:text-green-600 text-base font-medium transition {{ request()->routeIs('ragam.info') ? 'text-green-700 font-semibold' : '' }}">
                            Ragam Info
                        </a>
                    </div>

                    <div class="relative group px-6 border-l border-gray-300">
                        <button @mouseenter="dropdowns.dokumentasi = true" @mouseleave="dropdowns.dokumentasi = false"
                                class="inline-flex items-center text-gray-800 hover:text-green-600 text-base font-medium transition {{ request()->routeIs('dokumentasi.*') ? 'text-green-700 font-semibold' : '' }}">
                            Dokumentasi
                            <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div x-show="dropdowns.dokumentasi" @mouseenter="dropdowns.dokumentasi = true" @mouseleave="dropdowns.dokumentasi = false"
                             x-transition class="absolute mt-2 w-56 bg-white border rounded-md shadow-lg z-50 py-2">
                            <x-nav-link href="{{ route('dokumentasi.video') }}" :active="request()->routeIs('dokumentasi.video')">Galeri Video</x-nav-link>
                        </div>
                    </div>

                    <div class="relative px-6 border-l border-gray-300">
                        <a href="{{ route('kontak') }}" class="inline-flex items-center text-gray-800 hover:text-green-600 text-base font-medium transition {{ request()->routeIs('kontak') ? 'text-green-700 font-semibold' : '' }}">
                            Kontak
                        </a>
                    </div>
                </div>
            </div>

            {{-- Mobile hamburger button --}}
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    {{-- Mobile Menu --}}
    <div :class="{ 'block': open, 'hidden': !open }" class="sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')" class="border-t border-gray-300">Home</x-nav-link>

            {{-- Profile Dropdown (Mobile) --}}
            <details class="w-full border-t border-gray-300" x-data="{ open: false }" @toggle="open = $el.open">
                <summary class="cursor-pointer py-2 px-4 appearance-none flex items-center justify-between w-full {{ request()->routeIs('profile.*') ? 'text-green-700 font-semibold bg-gray-100' : '' }}">
                    Profile
                    <svg :class="{'rotate-90': open}" class="ml-2 w-4 h-4 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </summary>
                <div class="pl-4 space-y-1 mt-1">
                    <x-nav-link href="{{ route('profile.sejarah') }}" :active="request()->routeIs('profile.sejarah')">Sejarah Masjid</x-nav-link>
                    <x-nav-link href="{{ route('profile.visi') }}" :active="request()->routeIs('profile.visi')">Visi dan Misi</x-nav-link>
                    <x-nav-link href="{{ route('profile.struktural') }}" :active="request()->routeIs('profile.struktural')">Struktural Organisasi</x-nav-link>
                    <x-nav-link href="{{ route('profile.imam') }}" :active="request()->routeIs('profile.imam')">Imam dan Muadzin</x-nav-link>
                </div>
            </details>

            {{-- Prima Dropdown (Mobile) --}}
            <details class="w-full border-t border-gray-300" x-data="{ open: false }" @toggle="open = $el.open">
                <summary class="cursor-pointer py-2 px-4 appearance-none flex items-center justify-between w-full {{ request()->routeIs('prima.*') ? 'text-green-700 font-semibold bg-gray-100' : '' }}">
                    Prima
                    <svg :class="{'rotate-90': open}" class="ml-2 w-4 h-4 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </summary>
                <div class="pl-4 space-y-1 mt-1">
                    <x-nav-link href="{{ route('prima.sejarah') }}" :active="request()->routeIs('prima.sejarah')">Sejarah</x-nav-link>
                    <x-nav-link href="{{ route('prima.visi-misi') }}" :active="request()->routeIs('prima.visi-misi')">Visi Misi</x-nav-link>
                    <x-nav-link href="{{ route('prima.pengurus') }}" :active="request()->routeIs('prima.pengurus')">Pengurus</x-nav-link>
                </div>
            </details>

            {{-- Kegiatan Dropdown (Mobile) --}}
            <details class="w-full border-t border-gray-300" x-data="{ open: false }" @toggle="open = $el.open">
                <summary class="cursor-pointer py-2 px-4 appearance-none flex items-center justify-between w-full {{ request()->routeIs('kegiatan.*') ? 'text-green-700 font-semibold bg-gray-100' : '' }}">
                    Kegiatan
                    <svg :class="{'rotate-90': open}" class="ml-2 w-4 h-4 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </summary>
                <div class="pl-4 space-y-1 mt-1">
                    <x-nav-link href="{{ route('kegiatan.kuliah-subuh') }}" :active="request()->routeIs('kegiatan.kuliah-subuh')">Pengajian Kuliah Subuh</x-nav-link>
                    <x-nav-link href="{{ route('kegiatan.ibu-ibu') }}" :active="request()->routeIs('kegiatan.ibu-ibu')">Pengajian Ibu-ibu</x-nav-link>
                    <x-nav-link href="{{ route('kegiatan.hari-besar') }}" :active="request()->routeIs('kegiatan.hari-besar')">Hari Besar</x-nav-link>
                </div>
            </details>

            {{-- Layanan Dropdown (Mobile) --}}
            <details class="w-full border-t border-gray-300" x-data="{ open: false }" @toggle="open = $el.open">
                <summary class="cursor-pointer py-2 px-4 appearance-none flex items-center justify-between w-full {{ request()->routeIs('layanan.*') ? 'text-green-700 font-semibold bg-gray-100' : '' }}">
                    Layanan
                    <svg :class="{'rotate-90': open}" class="ml-2 w-4 h-4 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </summary>
                <div class="pl-4 space-y-1 mt-1">
                    <x-nav-link href="{{ route('layanan.akad-nikah') }}" :active="request()->routeIs('layanan.akad-nikah')">Acara Akad Nikah</x-nav-link>
                    <x-nav-link href="{{ route('layanan.muallaf') }}" :active="request()->routeIs('layanan.muallaf')">Layanan jadi Muallaf</x-nav-link>
                </div>
            </details>
            
            {{-- INI BAGIAN YANG DIPERBAIKI --}}
            <x-nav-link href="{{ route('ragam.info') }}" :active="request()->routeIs('ragam.info')" class="border-t border-gray-300">Ragam Info</x-nav-link>

            {{-- Dokumentasi Dropdown (Mobile) --}}
            <details class="w-full border-t border-gray-300" x-data="{ open: false }" @toggle="open = $el.open">
                <summary class="cursor-pointer py-2 px-4 appearance-none flex items-center justify-between w-full {{ request()->routeIs('dokumentasi.*') ? 'text-green-700 font-semibold bg-gray-100' : '' }}">
                    Dokumentasi
                    <svg :class="{'rotate-90': open}" class="ml-2 w-4 h-4 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </summary>
                <div class="pl-4 space-y-1 mt-1">
                    <x-nav-link href="{{ route('dokumentasi.video') }}" :active="request()->routeIs('dokumentasi.video')">Galeri Video</x-nav-link>
                </div>
            </details>

            <x-nav-link href="{{ route('kontak') }}" :active="request()->routeIs('kontak')" class="border-t border-gray-300">Kontak</x-nav-link>
        </div>
    </div>
</nav>
