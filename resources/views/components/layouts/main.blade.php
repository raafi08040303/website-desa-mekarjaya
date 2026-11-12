
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Desa Mekarjaya' }}</title>

    <meta name="description" content="Website Profil dan Potensi Desa Mekarjaya sebagai media informasi masyarakat dan promosi potensi lokal.">
    <meta name="theme-color" content="#14532d">

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Inter', sans-serif;
        }

        section[id] {
            scroll-margin-top: 84px;
        }
    </style>
</head>

<body class="bg-white min-h-screen flex flex-col text-gray-800">

    {{-- NAVBAR --}}
    <header class="fixed top-0 inset-x-0 z-50 bg-white/95 backdrop-blur-md border-b border-gray-100 shadow-sm">

        <div class="max-w-7xl mx-auto px-5 md:px-6 h-16 md:h-[72px] flex items-center justify-between">

            {{-- LOGO DAN IDENTITAS --}}
            <a href="{{ url('/') }}" class="flex items-center gap-2.5 shrink-0">

                <img
                    src="{{ asset('images/Logo-desa.png') }}"
                    alt="Logo Desa Mekarjaya"
                    class="w-10 h-10 object-contain shrink-0"
                >

                <div>
                    <span class="block font-extrabold text-green-900 text-base md:text-lg leading-tight">
                        DESA MEKARJAYA
                    </span>

                    <span class="block text-[10px] sm:text-[11px] text-gray-500 font-medium tracking-wide mt-0.5">
                        PROFILE DESA
                    </span>
                </div>

            </a>

            {{-- NAVIGASI DESKTOP --}}
            <nav class="hidden md:flex items-center gap-5 lg:gap-7 text-sm font-medium">

                <a href="{{ url('/') }}"
                   class="{{ request()->is('/') || request()->is('home') ? 'text-green-800 font-bold' : 'text-gray-600 hover:text-green-800' }} transition">
                    Beranda
                </a>

                <a href="{{ url('/profil') }}"
                   class="{{ request()->is('profil') ? 'text-green-800 font-bold' : 'text-gray-600 hover:text-green-800' }} transition">
                    Profil Desa
                </a>

                <a href="{{ route('potensi') }}"
                   class="{{ request()->is('potensi') ? 'text-green-800 font-bold' : 'text-gray-600 hover:text-green-800' }} transition">
                    Potensi Desa
                </a>

                <a href="{{ route('berita') }}"
                   class="{{ request()->is('berita') ? 'text-green-800 font-bold' : 'text-gray-600 hover:text-green-800' }} transition">
                    Berita
                </a>

                <a href="{{ url('/#kontak') }}"
                   class="inline-flex items-center gap-2 bg-green-800 text-white px-4 py-2.5 rounded-lg font-semibold hover:bg-green-900 transition">
                    Hubungi Kami
                    <span aria-hidden="true">→</span>
                </a>

            </nav>

            {{-- TOMBOL MENU MOBILE --}}
            <button
                id="mobile-menu-button"
                type="button"
                class="md:hidden inline-flex items-center justify-center w-10 h-10 rounded-lg text-green-900 hover:bg-green-50 transition"
                aria-label="Buka menu navigasi"
                aria-expanded="false"
                aria-controls="mobile-menu">

                <svg id="menu-open-icon"
                     xmlns="http://www.w3.org/2000/svg"
                     class="w-6 h-6"
                     fill="none"
                     viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M4 6h16M4 12h16M4 18h16"/>
                </svg>

                <svg id="menu-close-icon"
                     xmlns="http://www.w3.org/2000/svg"
                     class="w-6 h-6 hidden"
                     fill="none"
                     viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M6 18L18 6M6 6l12 12"/>
                </svg>

            </button>

        </div>

        {{-- MENU MOBILE --}}
        <nav id="mobile-menu"
             class="hidden md:hidden bg-white border-t border-gray-100 shadow-lg">

            <div class="max-w-7xl mx-auto px-5 py-3 flex flex-col gap-1">

                <a href="{{ url('/') }}"
                   class="px-4 py-2.5 rounded-lg text-sm text-gray-700 hover:bg-green-50 hover:text-green-800 transition">
                    Beranda
                </a>

                <a href="{{ url('/profil') }}"
                   class="px-4 py-2.5 rounded-lg text-sm text-gray-700 hover:bg-green-50 hover:text-green-800 transition">
                    Profil Desa
                </a>

                <a href="{{ route('potensi') }}"
                   class="px-4 py-2.5 rounded-lg text-sm text-gray-700 hover:bg-green-50 hover:text-green-800 transition">
                    Potensi Desa
                </a>

                <a href="{{ route('berita') }}"
                   class="px-4 py-2.5 rounded-lg text-sm text-gray-700 hover:bg-green-50 hover:text-green-800 transition">
                    Berita dan Kegiatan
                </a>

                <a href="{{ url('/#kontak') }}"
                   class="mt-2 text-center bg-green-800 text-white px-4 py-2.5 rounded-lg text-sm font-semibold hover:bg-green-900 transition">
                    Hubungi Kami
                </a>

            </div>
        </nav>

    </header>

    {{-- KONTEN UTAMA --}}
    <main class="pt-16 md:pt-[72px] flex-grow">
        {{ $slot }}
    </main>

    {{-- FOOTER --}}
    <footer class="bg-green-950 text-white">

        <div class="max-w-7xl mx-auto px-5 md:px-6 py-7 md:py-8">

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-7 lg:gap-10">

                {{-- IDENTITAS DESA --}}
                <div>

                    <a href="{{ url('/') }}"
                       class="inline-flex items-center gap-2.5 mb-3">

                        <img
                            src="{{ asset('images/Logo-desa.png') }}"
                            alt="Logo Desa Mekarjaya"
                            class="w-10 h-10 object-contain shrink-0"
                        >

                        <div>
                            <h3 class="font-bold text-base">
                                Desa Mekarjaya
                            </h3>

                            <p class="text-[11px] text-green-200 mt-0.5">
                                Profile desa
                            </p>
                        </div>

                    </a>

                    <p class="text-sm text-green-100/75 leading-relaxed max-w-sm">
                        Media informasi desa untuk mengenalkan profil,
                        kegiatan masyarakat, serta potensi dan produk
                        unggulan lokal Desa Mekarjaya.
                    </p>

                </div>

                {{-- NAVIGASI FOOTER --}}
                <div>

                    <h3 class="font-semibold text-sm text-white mb-3">
                        Jelajahi Website
                    </h3>

                    <ul class="space-y-2 text-sm text-green-100/75">

                        <li>
                            <a href="{{ url('/') }}"
                               class="hover:text-lime-300 transition">
                                Beranda
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('/profil') }}"
                               class="hover:text-lime-300 transition">
                                Profil Desa
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('potensi') }}"
                               class="hover:text-lime-300 transition">
                                Potensi Desa
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('berita') }}"
                               class="hover:text-lime-300 transition">
                                Berita dan Kegiatan
                            </a>
                        </li>

                    </ul>

                </div>

                {{-- INFORMASI KONTAK --}}
                <div>

                    <h3 class="font-semibold text-sm text-white mb-3">
                        Hubungi Kami
                    </h3>

                    <div class="space-y-3 text-sm text-green-100/75">

                        {{-- ALAMAT --}}
                        <div class="flex items-start gap-2.5">
                            <span class="shrink-0" aria-hidden="true">📍</span>

                            <p class="leading-relaxed">
                                Desa Mekarjaya, Kecamatan Cikalong Wetan,
                                Kabupaten Bandung Barat, Jawa Barat 40556
                            </p>
                        </div>

                        {{-- WHATSAPP --}}
                        <div class="flex items-center gap-2.5">
                            <span aria-hidden="true">☎</span>

                            <a href="https://wa.me/6285720143800"
                               target="_blank"
                               rel="noopener noreferrer"
                               class="hover:text-lime-300 transition">
                                +62 857-2014-3800
                            </a>
                        </div>

                        {{-- INSTAGRAM --}}
                        <div class="flex items-center gap-2.5">
                            <span aria-hidden="true">◎</span>

                            <a href="https://www.instagram.com/pemdesmekarjayamaju/"
                               target="_blank"
                               rel="noopener noreferrer"
                               class="hover:text-lime-300 transition">
                                Instagram Desa
                            </a>
                        </div>

                        {{-- TAUTAN KONTAK --}}
                        <div class="pt-1">

                            <a href="{{ url('/#kontak') }}"
                               class="inline-flex items-center gap-2 text-lime-300 font-semibold hover:text-lime-200 transition">
                                Informasi lengkap
                                <span aria-hidden="true">→</span>
                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        {{-- COPYRIGHT --}}
        <div class="border-t border-white/10">

            <div class="max-w-7xl mx-auto px-5 md:px-6 py-4
                        flex flex-col sm:flex-row
                        justify-between items-center gap-2
                        text-center sm:text-left">

                <p class="text-xs text-green-100/60">
                    &copy; {{ date('Y') }} Pemerintah Desa Mekarjaya.
                </p>

                <p class="text-xs text-green-100/60">
                    Media Informasi dan Promosi Potensi Lokal Desa
                </p>

            </div>

        </div>

    </footer>

    {{-- SCRIPT MENU MOBILE --}}
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const menuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');
            const openIcon = document.getElementById('menu-open-icon');
            const closeIcon = document.getElementById('menu-close-icon');

            if (!menuButton || !mobileMenu || !openIcon || !closeIcon) {
                return;
            }

            menuButton.addEventListener('click', function () {
                const isExpanded =
                    menuButton.getAttribute('aria-expanded') === 'true';

                menuButton.setAttribute(
                    'aria-expanded',
                    String(!isExpanded)
                );

                menuButton.setAttribute(
                    'aria-label',
                    isExpanded ? 'Buka menu navigasi' : 'Tutup menu navigasi'
                );

                mobileMenu.classList.toggle('hidden');
                openIcon.classList.toggle('hidden');
                closeIcon.classList.toggle('hidden');
            });

            mobileMenu.querySelectorAll('a').forEach(function (link) {
                link.addEventListener('click', function () {
                    mobileMenu.classList.add('hidden');
                    openIcon.classList.remove('hidden');
                    closeIcon.classList.add('hidden');

                    menuButton.setAttribute('aria-expanded', 'false');
                    menuButton.setAttribute('aria-label', 'Buka menu navigasi');
                });
            });

            window.addEventListener('resize', function () {
                if (window.innerWidth >= 768) {
                    mobileMenu.classList.add('hidden');
                    openIcon.classList.remove('hidden');
                    closeIcon.classList.add('hidden');

                    menuButton.setAttribute('aria-expanded', 'false');
                    menuButton.setAttribute('aria-label', 'Buka menu navigasi');
                }
            });
        });
    </script>

</body>
</html>
