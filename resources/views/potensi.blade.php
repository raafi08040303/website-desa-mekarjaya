
<x-layouts.main title="Potensi Desa - Desa Mekarjaya">

    {{-- HERO --}}
    <section class="relative isolate overflow-hidden bg-green-950 text-white">
        <img
            src="{{ asset('images/poto_desa.PNG') }}"
            alt="Pemandangan Desa Mekarjaya"
            fetchpriority="high"
            class="absolute inset-0 -z-20 h-full w-full object-cover"
        >

        <div class="absolute inset-0 -z-10 bg-gradient-to-r from-green-950/95 via-green-950/75 to-green-950/25"></div>

        <div class="mx-auto max-w-7xl px-6 py-24 md:py-32 lg:py-36">
            <p class="mb-5 inline-flex items-center gap-2 text-sm font-medium tracking-wide text-lime-200">
                <span class="h-2 w-2 rounded-full bg-lime-400"></span>
                Potensi Lokal Desa Mekarjaya
            </p>

            <h1 class="max-w-3xl text-4xl font-bold leading-tight tracking-tight md:text-6xl">
                Menggali Potensi,
                <span class="text-lime-300">Membangun Desa</span>
            </h1>

            <p class="mt-6 max-w-2xl text-base leading-8 text-gray-100 md:text-lg">
                Mengenal potensi pertanian, perkebunan, peternakan,
                perdagangan, usaha lokal, serta berbagai potensi
                yang dimiliki Desa Mekarjaya.
            </p>

            <div class="mt-9 flex flex-wrap gap-4">
                <a href="#potensi-utama"
                    class="inline-flex items-center gap-3 rounded-lg bg-lime-400 px-6 py-3.5 font-semibold text-green-950 transition hover:bg-lime-300">
                    Jelajahi Potensi
                    <span aria-hidden="true">&rarr;</span>
                </a>

                <a href="#data-potensi"
                    class="inline-flex items-center rounded-lg border border-white/40 px-6 py-3.5 font-semibold text-white transition hover:bg-white/10">
                    Lihat Data Desa
                </a>
            </div>
        </div>

        <div class="h-1.5 bg-lime-400"></div>
    </section>


    {{-- PENGANTAR --}}
    <section class="bg-white px-6 py-16 md:py-20">
        <div class="mx-auto grid max-w-7xl gap-8 md:grid-cols-[0.9fr_1.1fr] md:items-center md:gap-16">

            <div>
                <p class="text-sm font-bold uppercase tracking-[0.18em] text-green-700">
                    Mengenal Desa Mekarjaya
                </p>

                <h2 class="mt-4 text-3xl font-bold leading-tight tracking-tight text-gray-900 md:text-4xl">
                    Potensi Lokal untuk Kemajuan Bersama
                </h2>
            </div>

            <div>
                <p class="leading-8 text-gray-600">
                    Desa Mekarjaya memiliki beragam potensi yang berasal
                    dari sektor pertanian, perkebunan, peternakan,
                    perdagangan, dan usaha masyarakat. Potensi tersebut
                    didukung oleh kondisi wilayah serta pemanfaatan lahan
                    yang menjadi bagian penting dalam aktivitas ekonomi lokal.
                </p>

                <p class="mt-4 text-sm leading-7 text-gray-500">
                    Informasi pada halaman ini disusun berdasarkan Profil
                    Desa Mekarjaya Tahun 2023 dan informasi potensi yang
                    masih memerlukan pendataan serta dokumentasi lebih lanjut.
                </p>
            </div>

        </div>
    </section>


    {{-- GAMBARAN WILAYAH --}}
    <section class="bg-[#f7f8f4] px-6 py-16 md:py-20">
        <div class="mx-auto max-w-7xl">

            <div class="mb-10 max-w-3xl">
                <p class="text-sm font-bold uppercase tracking-[0.18em] text-green-700">
                    Profil Wilayah
                </p>

                <h2 class="mt-3 text-3xl font-bold tracking-tight text-gray-900 md:text-4xl">
                    Gambaran Administratif dan Wilayah Desa
                </h2>

                <p class="mt-4 leading-7 text-gray-600">
                    Desa Mekarjaya merupakan salah satu desa yang berada
                    di wilayah Kecamatan Cikalongwetan, Kabupaten Bandung Barat.
                    Kondisi wilayahnya memiliki karakteristik geografis
                    dan pemanfaatan lahan yang beragam.
                </p>
            </div>

            <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-4">

                {{-- KETINGGIAN WILAYAH --}}
                <div class="rounded-xl border border-gray-200 bg-white p-6 transition hover:-translate-y-1 hover:shadow-md">
                    <div class="mb-5 flex h-12 w-12 items-center justify-center rounded-lg bg-green-100 text-green-800">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.7">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m3 20 6-10 4 6 3-4 5 8H3Z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v4m-2-2h4" />
                        </svg>
                    </div>
                    <p class="text-3xl font-bold text-green-800">700–1.300</p>
                    <p class="mt-2 text-sm font-semibold text-gray-500">Meter di atas permukaan laut</p>
                    <h3 class="mt-3 font-bold text-gray-900">Ketinggian Wilayah</h3>
                </div>

                {{-- LUAS WILAYAH --}}
                <div class="rounded-xl border border-gray-200 bg-white p-6 transition hover:-translate-y-1 hover:shadow-md">
                    <div class="mb-5 flex h-12 w-12 items-center justify-center rounded-lg bg-green-100 text-green-800">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.7">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 5h16v14H4z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8 5v4m4-4v2m4-2v4M8 19v-4m4 4v-2m4 2v-4" />
                        </svg>
                    </div>
                    <p class="text-3xl font-bold text-green-800">879,148</p>
                    <p class="mt-2 text-sm font-semibold text-gray-500">Hektare</p>
                    <h3 class="mt-3 font-bold text-gray-900">Luas Wilayah Desa</h3>
                </div>

                {{-- KECAMATAN --}}
                <div class="rounded-xl border border-gray-200 bg-white p-6 transition hover:-translate-y-1 hover:shadow-md">
                    <div class="mb-5 flex h-12 w-12 items-center justify-center rounded-lg bg-green-100 text-green-800">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.7">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 20h18M5 20V8l7-5 7 5v12M9 20v-6h6v6M9 10h.01M15 10h.01" />
                        </svg>
                    </div>
                    <p class="text-3xl font-bold text-green-800">13 Desa</p>
                    <p class="mt-2 text-sm font-semibold text-gray-500">Dalam satu kecamatan</p>
                    <h3 class="mt-3 font-bold text-gray-900">Wilayah Kecamatan</h3>
                </div>

                {{-- LOKASI ADMINISTRATIF --}}
                <div class="rounded-xl border border-gray-200 bg-white p-6 transition hover:-translate-y-1 hover:shadow-md">
                    <div class="mb-5 flex h-12 w-12 items-center justify-center rounded-lg bg-green-100 text-green-800">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.7">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 21s7-5.2 7-12a7 7 0 1 0-14 0c0 6.8 7 12 7 12Z" />
                            <circle cx="12" cy="9" r="2.5" />
                        </svg>
                    </div>
                    <p class="text-xl font-bold text-green-800">Cikalongwetan</p>
                    <p class="mt-2 text-sm font-semibold text-gray-500">Kabupaten Bandung Barat</p>
                    <h3 class="mt-3 font-bold text-gray-900">Wilayah Administratif</h3>
                </div>

            </div>

            {{-- RINCIAN PENGGUNAAN LAHAN --}}
            <div class="mt-8 rounded-xl border border-gray-200 bg-white p-6 md:p-8">
                <div class="mb-7">
                    <h3 class="text-xl font-bold text-gray-900">
                        Rincian Penggunaan Lahan
                    </h3>
                    <p class="mt-2 text-sm leading-6 text-gray-500">
                        Pembagian luas wilayah Desa Mekarjaya berdasarkan
                        jenis penggunaan lahan dalam Profil Desa.
                    </p>
                </div>

                <div class="space-y-6">

                    {{-- PEMUKIMAN --}}
                    <div>
                        <div class="mb-2 flex items-center justify-between gap-4">
                            <span class="text-sm font-semibold text-gray-700">Pemukiman</span>
                            <span class="text-sm font-bold text-gray-900">199,322 ha</span>
                        </div>
                        <div class="h-3 overflow-hidden rounded-full bg-gray-100">
                            <div class="h-full rounded-full bg-amber-500" style="width: 22.67%"></div>
                        </div>
                    </div>

                    {{-- PESAWAHAN --}}
                    <div>
                        <div class="mb-2 flex items-center justify-between gap-4">
                            <span class="text-sm font-semibold text-gray-700">Pesawahan</span>
                            <span class="text-sm font-bold text-gray-900">165,100 ha</span>
                        </div>
                        <div class="h-3 overflow-hidden rounded-full bg-gray-100">
                            <div class="h-full rounded-full bg-lime-600" style="width: 18.78%"></div>
                        </div>
                    </div>

                    {{-- PERKEBUNAN --}}
                    <div>
                        <div class="mb-2 flex items-center justify-between gap-4">
                            <span class="text-sm font-semibold text-gray-700">Perkebunan</span>
                            <span class="text-sm font-bold text-gray-900">375,226 ha</span>
                        </div>
                        <div class="h-3 overflow-hidden rounded-full bg-gray-100">
                            <div class="h-full rounded-full bg-green-700" style="width: 42.68%"></div>
                        </div>
                    </div>

                    {{-- LAIN-LAIN --}}
                    <div>
                        <div class="mb-2 flex items-center justify-between gap-4">
                            <span class="text-sm font-semibold text-gray-700">Lain-lain</span>
                            <span class="text-sm font-bold text-gray-900">139,5 ha</span>
                        </div>
                        <div class="h-3 overflow-hidden rounded-full bg-gray-100">
                            <div class="h-full rounded-full bg-slate-500" style="width: 15.87%"></div>
                        </div>
                    </div>

                </div>

                <div class="mt-7 rounded-lg bg-green-50 p-4 text-sm leading-7 text-green-900">
                    <strong>Total luas wilayah: ±879,148 hektare.</strong>
                    Rincian penggunaan lahan mengacu pada Profil Desa
                    Mekarjaya yang menjadi sumber data halaman ini.
                </div>
            </div>

            <p class="mt-6 text-xs leading-6 text-gray-500">
                Sumber: Profil Desa Mekarjaya. Penulisan angka luas wilayah
                mengikuti dokumen sumber.
            </p>

        </div>
    </section>


    {{-- RINGKASAN DATA POTENSI --}}
    <section id="data-potensi" class="scroll-mt-20 bg-green-950 px-6 py-16 text-white md:py-20">
        <div class="mx-auto max-w-7xl">

            <div class="mb-10 max-w-3xl">
                <p class="text-sm font-bold uppercase tracking-[0.18em] text-lime-300">
                    Data Potensi
                </p>

                <h2 class="mt-3 text-3xl font-bold tracking-tight md:text-4xl">
                    Potensi Desa dalam Angka
                </h2>

                <p class="mt-4 leading-7 text-green-100">
                    Gambaran mata pencaharian masyarakat, kegiatan ekonomi,
                    dan fasilitas pendukung yang tercatat dalam Profil
                    Desa Mekarjaya Tahun 2023.
                </p>
            </div>

            <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-3">

                {{-- PETANI --}}
                <div class="rounded-xl border border-white/10 bg-white/10 p-6 transition hover:bg-white/15">
                    <div class="mb-5 flex h-12 w-12 items-center justify-center rounded-lg bg-lime-400/15 text-lime-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.7">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 21V12m0 4C7 16 4 13 4 8c5 0 8 3 8 8Zm0-3c0-5 3-8 8-8 0 5-3 8-8 8Z" />
                        </svg>
                    </div>
                    <p class="text-4xl font-bold text-lime-300">664</p>
                    <p class="mt-2 text-sm font-semibold">Orang</p>
                    <h3 class="mt-3 font-bold">Penduduk Bekerja sebagai Petani</h3>
                    <p class="mt-2 text-sm leading-6 text-green-100">
                        Jumlah penduduk yang tercatat bekerja pada sektor pertanian.
                    </p>
                </div>

                {{-- PETERNAK --}}
                <div class="rounded-xl border border-white/10 bg-white/10 p-6 transition hover:bg-white/15">
                    <div class="mb-5 flex h-12 w-12 items-center justify-center rounded-lg bg-lime-400/15 text-lime-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.7">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 15V9l3-3h10l3 3v6l-3 3H7l-3-3Z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8 11h.01M16 11h.01M9 15h6M7 6 5 3m12 3 2-3" />
                        </svg>
                    </div>
                    <p class="text-4xl font-bold text-lime-300">20</p>
                    <p class="mt-2 text-sm font-semibold">Orang</p>
                    <h3 class="mt-3 font-bold">Penduduk Bekerja sebagai Peternak</h3>
                    <p class="mt-2 text-sm leading-6 text-green-100">
                        Penduduk yang tercatat memiliki mata pencaharian pada sektor peternakan.
                    </p>
                </div>

                {{-- USAHA PETERNAKAN --}}
                <div class="rounded-xl border border-white/10 bg-white/10 p-6 transition hover:bg-white/15">
                    <div class="mb-5 flex h-12 w-12 items-center justify-center rounded-lg bg-lime-400/15 text-lime-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.7">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 21h18M5 21V8l7-4 7 4v13M9 21v-6h6v6M8 10h.01M16 10h.01" />
                        </svg>
                    </div>
                    <p class="text-4xl font-bold text-lime-300">10</p>
                    <p class="mt-2 text-sm font-semibold">Unit Usaha</p>
                    <h3 class="mt-3 font-bold">Usaha Peternakan</h3>
                    <p class="mt-2 text-sm leading-6 text-green-100">
                        Jumlah usaha peternakan yang tercatat dalam profil desa.
                    </p>
                </div>

                {{-- PERDAGANGAN --}}
                <div class="rounded-xl border border-white/10 bg-white/10 p-6 transition hover:bg-white/15">
                    <div class="mb-5 flex h-12 w-12 items-center justify-center rounded-lg bg-lime-400/15 text-lime-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.7">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 10h18l-2-6H5l-2 6Zm2 0v10h14V10M9 20v-6h6v6M3 10a3 3 0 0 0 6 0 3 3 0 0 0 6 0 3 3 0 0 0 6 0" />
                        </svg>
                    </div>
                    <p class="text-4xl font-bold text-lime-300">211</p>
                    <p class="mt-2 text-sm font-semibold">Unit Usaha</p>
                    <h3 class="mt-3 font-bold">Toko, Kios, dan Warung</h3>
                    <p class="mt-2 text-sm leading-6 text-green-100">
                        Sarana perdagangan yang mendukung aktivitas ekonomi lokal masyarakat.
                    </p>
                </div>

                {{-- LAPANGAN VOLI --}}
                <div class="rounded-xl border border-white/10 bg-white/10 p-6 transition hover:bg-white/15">
                    <div class="mb-5 flex h-12 w-12 items-center justify-center rounded-lg bg-lime-400/15 text-lime-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.7">
                            <circle cx="12" cy="12" r="9" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5.6 5.6c4 2 6 6 6.4 15.4M18.4 5.6c-4 2-6 6-6.4 15.4M3.5 12h17" />
                        </svg>
                    </div>
                    <p class="text-4xl font-bold text-lime-300">10</p>
                    <p class="mt-2 text-sm font-semibold">Lapangan</p>
                    <h3 class="mt-3 font-bold">Lapangan Voli</h3>
                    <p class="mt-2 text-sm leading-6 text-green-100">
                        Fasilitas olahraga masyarakat yang tercatat dalam profil desa.
                    </p>
                </div>

                {{-- SARANA OLAHRAGA LAINNYA --}}
                <div class="rounded-xl border border-white/10 bg-white/10 p-6 transition hover:bg-white/15">
                    <div class="mb-5 flex h-12 w-12 items-center justify-center rounded-lg bg-lime-400/15 text-lime-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.7">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 20h16M6 20V9h12v11M9 9V5h6v4M9 13h.01M15 13h.01M9 16h.01M15 16h.01" />
                        </svg>
                    </div>
                    <p class="text-4xl font-bold text-lime-300">5</p>
                    <p class="mt-2 text-sm font-semibold">Fasilitas</p>
                    <h3 class="mt-3 font-bold">Sarana Olahraga Lainnya</h3>
                    <p class="mt-2 text-sm leading-6 text-green-100">
                        Terdiri dari 1 lapangan sepak bola,
                        1 lapangan bulu tangkis, dan 3 meja pingpong.
                    </p>
                </div>

            </div>

            <p class="mt-8 text-xs leading-6 text-green-200">
                Sumber: Profil Desa Mekarjaya Tahun 2023.
                Data merupakan gambaran berdasarkan tahun pendataan
                dan perlu diperbarui melalui pendataan terbaru.
            </p>

        </div>
    </section>


    {{-- POTENSI UTAMA --}}
    <section id="potensi-utama" class="scroll-mt-20 bg-[#f7f8f4] px-6 py-16 md:py-20">
        <div class="mx-auto max-w-7xl">

            <div class="mb-10 max-w-3xl">
                <p class="text-sm font-bold uppercase tracking-[0.18em] text-green-700">
                    Potensi Desa
                </p>

                <h2 class="mt-3 text-3xl font-bold tracking-tight text-gray-900 md:text-4xl">
                    Sektor Unggulan Mekarjaya
                </h2>

                <p class="mt-4 leading-7 text-gray-600">
                    Berikut beberapa sektor yang menjadi bagian dari
                    potensi Desa Mekarjaya, berdasarkan data profil desa
                    dan informasi yang tersedia.
                </p>
            </div>

            <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">

                {{-- PERTANIAN --}}
                <article class="group overflow-hidden rounded-xl border border-gray-200/80 bg-white transition duration-300 hover:-translate-y-1 hover:shadow-lg">
                    <div class="relative h-60 overflow-hidden bg-green-100">
                        <img
                            src="{{ asset('images/potensi/pertanian.jpeg') }}"
                            alt="Pertanian dan persawahan Desa Mekarjaya"
                            loading="lazy"
                            class="h-full w-full object-cover transition duration-500 group-hover:scale-105"
                        >
                        <div class="absolute inset-0 bg-gradient-to-t from-black/45 via-transparent to-transparent"></div>
                    </div>

                    <div class="p-6">
                        <span class="text-xs font-semibold uppercase tracking-wide text-green-700">
                            Sektor Pertanian
                        </span>
                        <h3 class="mt-2 text-xl font-bold text-gray-900">
                            Pertanian dan Persawahan
                        </h3>
                        <p class="mt-3 text-sm leading-7 text-gray-600">
                            Sektor pertanian menjadi salah satu bagian
                            penting dari aktivitas masyarakat Desa Mekarjaya.
                            Profil Desa Tahun 2023 mencatat sebanyak
                            664 penduduk bekerja sebagai petani.
                        </p>
                    </div>
                </article>

                {{-- PERKEBUNAN --}}
                <article class="group overflow-hidden rounded-xl border border-gray-200/80 bg-white transition duration-300 hover:-translate-y-1 hover:shadow-lg">
                    <div class="relative h-60 overflow-hidden bg-green-100">
                        <img
                            src="{{ asset('images/potensi/perkebunan.jpg') }}"
                            alt="Perkebunan Desa Mekarjaya"
                            loading="lazy"
                            class="h-full w-full object-cover transition duration-500 group-hover:scale-105"
                        >
                        <div class="absolute inset-0 bg-gradient-to-t from-black/45 via-transparent to-transparent"></div>
                    </div>

                    <div class="p-6">
                        <span class="text-xs font-semibold uppercase tracking-wide text-green-700">
                            Sektor Perkebunan
                        </span>
                        <h3 class="mt-2 text-xl font-bold text-gray-900">
                            Perkebunan
                        </h3>
                        <p class="mt-3 text-sm leading-7 text-gray-600">
                            Perkebunan merupakan salah satu potensi
                            pemanfaatan lahan di Desa Mekarjaya.
                            Berdasarkan profil desa, luas lahan perkebunan
                            tercatat sebesar 375,226 hektare.
                        </p>
                    </div>
                </article>

                {{-- PETERNAKAN --}}
                <article class="group overflow-hidden rounded-xl border border-gray-200/80 bg-white transition duration-300 hover:-translate-y-1 hover:shadow-lg">
                    <div class="relative h-60 overflow-hidden bg-lime-100">
                        <img
                            src="{{ asset('images/potensi/peternakan.jpg') }}"
                            alt="Peternakan Desa Mekarjaya"
                            loading="lazy"
                            class="h-full w-full object-cover transition duration-500 group-hover:scale-105"
                        >
                        <div class="absolute inset-0 bg-gradient-to-t from-black/45 via-transparent to-transparent"></div>
                    </div>

                    <div class="p-6">
                        <span class="text-xs font-semibold uppercase tracking-wide text-lime-700">
                            Sektor Peternakan
                        </span>
                        <h3 class="mt-2 text-xl font-bold text-gray-900">
                            Peternakan
                        </h3>
                        <p class="mt-3 text-sm leading-7 text-gray-600">
                            Kegiatan peternakan turut menjadi bagian
                            dari mata pencaharian masyarakat. Data Tahun
                            2023 mencatat 20 penduduk bekerja sebagai
                            peternak dan 10 unit usaha peternakan.
                        </p>
                    </div>
                </article>

                {{-- PERDAGANGAN --}}
                <article class="group overflow-hidden rounded-xl border border-gray-200/80 bg-white transition duration-300 hover:-translate-y-1 hover:shadow-lg">
                    <div class="relative h-60 overflow-hidden bg-amber-100">
                        <img
                            src="{{ asset('images/potensi/umkm.jpg') }}"
                            alt="Aktivitas perdagangan dan usaha lokal"
                            loading="lazy"
                            class="h-full w-full object-cover transition duration-500 group-hover:scale-105"
                        >
                        <div class="absolute inset-0 bg-gradient-to-t from-black/45 via-transparent to-transparent"></div>
                    </div>

                    <div class="p-6">
                        <span class="text-xs font-semibold uppercase tracking-wide text-amber-700">
                            Ekonomi Lokal
                        </span>
                        <h3 class="mt-2 text-xl font-bold text-gray-900">
                            Perdagangan dan Usaha Lokal
                        </h3>
                        <p class="mt-3 text-sm leading-7 text-gray-600">
                            Aktivitas perdagangan masyarakat didukung
                            oleh keberadaan toko, kios, dan warung.
                            Profil Desa Tahun 2023 mencatat sebanyak
                            211 unit usaha perdagangan.
                        </p>
                    </div>
                </article>

                {{-- UMKM --}}
                <article class="group overflow-hidden rounded-xl border border-gray-200/80 bg-white transition duration-300 hover:-translate-y-1 hover:shadow-lg">
                    <div class="relative h-60 overflow-hidden bg-orange-100">
                        <img
                            src="{{ asset('images/potensi/umkm.jpg') }}"
                            alt="Produk dan usaha masyarakat Desa Mekarjaya"
                            loading="lazy"
                            class="h-full w-full object-cover transition duration-500 group-hover:scale-105"
                        >
                        <div class="absolute inset-0 bg-gradient-to-t from-black/45 via-transparent to-transparent"></div>
                    </div>

                    <div class="p-6">
                        <span class="text-xs font-semibold uppercase tracking-wide text-orange-700">
                            Usaha dan Produk Lokal
                        </span>
                        <h3 class="mt-2 text-xl font-bold text-gray-900">
                            UMKM dan Produk Lokal
                        </h3>
                        <p class="mt-3 text-sm leading-7 text-gray-600">
                            Usaha masyarakat dapat diperkenalkan melalui
                            informasi produk, kegiatan produksi, lokasi
                            usaha, serta kontak pelaku usaha yang bersedia
                            dipublikasikan.
                        </p>
                    </div>
                </article>

                {{-- SARANA OLAHRAGA --}}
                <article class="group overflow-hidden rounded-xl border border-gray-200/80 bg-white transition duration-300 hover:-translate-y-1 hover:shadow-lg">
                    <div class="relative h-60 overflow-hidden bg-emerald-100">
                        <img
                            src="{{ asset('images/potensi/budaya.jpeg') }}"
                            alt="Kegiatan masyarakat Desa Mekarjaya"
                            loading="lazy"
                            class="h-full w-full object-cover transition duration-500 group-hover:scale-105"
                        >
                        <div class="absolute inset-0 bg-gradient-to-t from-black/45 via-transparent to-transparent"></div>
                    </div>

                    <div class="p-6">
                        <span class="text-xs font-semibold uppercase tracking-wide text-emerald-700">
                            Fasilitas Masyarakat
                        </span>
                        <h3 class="mt-2 text-xl font-bold text-gray-900">
                            Sarana Olahraga Masyarakat
                        </h3>
                        <p class="mt-3 text-sm leading-7 text-gray-600">
                            Fasilitas olahraga yang tercatat meliputi
                            10 lapangan voli, 1 lapangan sepak bola,
                            1 lapangan bulu tangkis, dan 3 meja pingpong.
                        </p>
                    </div>
                </article>

            </div>

            <p class="mt-8 text-xs leading-6 text-gray-500">
                Catatan: foto merupakan ilustrasi dan bukan dokumentasi
                resmi Desa Mekarjaya. Data angka mengacu pada Profil Desa
                Tahun 2023.
            </p>

        </div>
    </section>


    {{-- POTENSI TAMBAHAN --}}
    <section class="bg-white px-6 py-16 md:py-20">
        <div class="mx-auto max-w-7xl">

            <div class="mb-10 max-w-3xl">
                <p class="text-sm font-bold uppercase tracking-[0.18em] text-green-700">
                    Eksplorasi Potensi Lokal
                </p>

                <h2 class="mt-3 text-3xl font-bold tracking-tight text-gray-900 md:text-4xl">
                    Potensi yang Dapat Diperkenalkan
                </h2>

                <p class="mt-4 leading-7 text-gray-600">
                    Selain sektor utama, terdapat beberapa komoditas,
                    produk, dan lokasi yang dapat dieksplorasi sebagai
                    potensi lokal Desa Mekarjaya. Informasi berikut
                    masih memerlukan konfirmasi dan pendataan lebih lanjut.
                </p>
            </div>

            <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-3">

                {{-- SAYURAN --}}
                <div class="flex gap-4 rounded-xl border border-gray-200 p-5 transition hover:border-green-300 hover:shadow-md">
                    <div class="h-20 w-20 shrink-0 overflow-hidden rounded-lg bg-green-100">
                        <img
                            src="{{ asset('images/potensi/pertanian_sayuran.jpg') }}"
                            alt="Potensi sayuran"
                            loading="lazy"
                            class="h-full w-full object-cover"
                        >
                    </div>
                    <div>
                        <h3 class="font-bold text-gray-900">Sayuran</h3>
                        <p class="mt-2 text-sm leading-6 text-gray-600">
                            Potensi komoditas pertanian yang dapat dilengkapi
                            dengan informasi jenis tanaman, hasil panen,
                            dan petani setempat.
                        </p>
                    </div>
                </div>

                {{-- TEH --}}
                <div class="flex gap-4 rounded-xl border border-gray-200 p-5 transition hover:border-green-300 hover:shadow-md">
                    <div class="h-20 w-20 shrink-0 overflow-hidden rounded-lg bg-green-100">
                        <img
                            src="{{ asset('images/potensi/perkebunan.jpg') }}"
                            alt="Perkebunan teh"
                            loading="lazy"
                            class="h-full w-full object-cover"
                        >
                    </div>
                    <div>
                        <h3 class="font-bold text-gray-900">Perkebunan Teh</h3>
                        <p class="mt-2 text-sm leading-6 text-gray-600">
                            Potensi komoditas perkebunan yang perlu
                            dilengkapi informasi lokasi dan kondisi
                            terkini.
                        </p>
                    </div>
                </div>

                {{-- SINGKONG DAN ELOD --}}
                <div class="flex gap-4 rounded-xl border border-gray-200 p-5 transition hover:border-green-300 hover:shadow-md">
                    <div class="h-20 w-20 shrink-0 overflow-hidden rounded-lg bg-amber-100">
                        <img
                            src="{{ asset('images/potensi/elod.jpg') }}"
                            alt="Olahan singkong dan elod"
                            loading="lazy"
                            class="h-full w-full object-cover"
                        >
                    </div>
                    <div>
                        <h3 class="font-bold text-gray-900">Singkong dan Elod</h3>
                        <p class="mt-2 text-sm leading-6 text-gray-600">
                            Potensi bahan pangan dan produk olahan lokal
                            yang dapat didata lebih lanjut bersama
                            masyarakat.
                        </p>
                    </div>
                </div>

                {{-- GULA AREN --}}
                <div class="flex gap-4 rounded-xl border border-gray-200 p-5 transition hover:border-green-300 hover:shadow-md">
                    <div class="h-20 w-20 shrink-0 overflow-hidden rounded-lg bg-amber-100">
                        <img
                            src="{{ asset('images/potensi/gula.jpg') }}"
                            alt="Produk gula aren"
                            loading="lazy"
                            class="h-full w-full object-cover"
                        >
                    </div>
                    <div>
                        <h3 class="font-bold text-gray-900">Gula Aren</h3>
                        <p class="mt-2 text-sm leading-6 text-gray-600">
                            Potensi produk lokal yang dapat dilengkapi
                            informasi proses produksi dan pelaku usaha.
                        </p>
                    </div>
                </div>

                {{-- CENGKEH --}}
                <div class="flex gap-4 rounded-xl border border-gray-200 p-5 transition hover:border-green-300 hover:shadow-md">
                    <div class="h-20 w-20 shrink-0 overflow-hidden rounded-lg bg-orange-100">
                        <img
                            src="{{ asset('images/potensi/cengkeh.jpg') }}"
                            alt="Komoditas cengkeh"
                            loading="lazy"
                            class="h-full w-full object-cover"
                        >
                    </div>
                    <div>
                        <h3 class="font-bold text-gray-900">Cengkeh</h3>
                        <p class="mt-2 text-sm leading-6 text-gray-600">
                            Komoditas yang dapat dilengkapi dengan
                            informasi produksi, lokasi, dan petani
                            setempat.
                        </p>
                    </div>
                </div>

                {{-- CURUG BUNTUNG --}}
                <div class="flex gap-4 rounded-xl border border-gray-200 p-5 transition hover:border-green-300 hover:shadow-md">
                    <div class="h-20 w-20 shrink-0 overflow-hidden rounded-lg bg-emerald-100">
                        <img
                            src="{{ asset('images/potensi/curug.jpg') }}"
                            alt="Curug Buntung"
                            loading="lazy"
                            class="h-full w-full object-cover"
                        >
                    </div>
                    <div>
                        <h3 class="font-bold text-gray-900">Curug Buntung</h3>
                        <p class="mt-2 text-sm leading-6 text-gray-600">
                            Kandidat potensi wisata alam yang perlu
                            dikonfirmasi terkait lokasi, akses,
                            dan kondisi terkini.
                        </p>
                    </div>
                </div>

            </div>

            <div class="mt-8 rounded-lg border border-amber-200 bg-amber-50 p-4 text-sm leading-7 text-amber-900">
                <strong>Catatan pendataan:</strong>
                Potensi tambahan di atas masih memerlukan konfirmasi
                kepada pemerintah desa atau masyarakat. Sebelum
                dipublikasikan sebagai informasi resmi, keberadaan,
                nama, lokasi, dan dokumentasinya perlu dipastikan.
            </div>

        </div>
    </section>


    {{-- DATA POTENSI DARI DATABASE --}}
    <section id="potensi-terbaru" class="scroll-mt-20 bg-[#f7f8f4] px-6 py-16 md:py-20">
        <div class="mx-auto max-w-7xl">

            <div class="mb-10 max-w-2xl">
                <p class="text-sm font-bold uppercase tracking-[0.18em] text-green-700">
                    Informasi Terbaru
                </p>

                <h2 class="mt-3 text-3xl font-bold tracking-tight text-gray-900 md:text-4xl">
                    Potensi Terbaru Desa
                </h2>

                <p class="mt-4 leading-7 text-gray-600">
                    Informasi potensi, komoditas, dan produk lokal
                    yang telah ditambahkan melalui halaman pengelolaan
                    website Desa Mekarjaya.
                </p>
            </div>

            @if (isset($potensis) && $potensis->count() > 0)

                <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">

                    @foreach ($potensis as $potensi)
                        <article class="group flex h-full flex-col overflow-hidden rounded-xl border border-gray-200 bg-white transition duration-300 hover:-translate-y-1 hover:shadow-lg">

                            <div class="relative h-60 overflow-hidden bg-gray-100">
                                @if ($potensi->gambar)
                                    <img
                                        src="{{ asset('storage/' . $potensi->gambar) }}"
                                        alt="{{ $potensi->nama }}"
                                        loading="lazy"
                                        class="h-full w-full object-cover transition duration-500 group-hover:scale-105"
                                    >
                                @else
                                    <div class="flex h-full flex-col items-center justify-center text-green-800">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="h-12 w-12"
                                            fill="none"
                                            viewBox="0 0 24 24"
                                            stroke="currentColor"
                                            stroke-width="1.3"
                                            aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                                        </svg>

                                        <span class="mt-2 text-sm text-gray-500">
                                            Belum ada foto
                                        </span>
                                    </div>
                                @endif

                                @if ($potensi->kategori)
                                    <span class="absolute left-4 top-4 rounded-md bg-white/95 px-3 py-1.5 text-xs font-semibold text-green-900 shadow-sm">
                                        {{ $potensi->kategori }}
                                    </span>
                                @endif
                            </div>

                            <div class="flex flex-1 flex-col p-6">

                                <h3 class="text-xl font-bold leading-snug text-gray-900">
                                    {{ $potensi->nama }}
                                </h3>

                                <p class="mt-3 text-sm leading-7 text-gray-600">
                                    {{ \Illuminate\Support\Str::limit($potensi->deskripsi ?? 'Informasi potensi ini belum memiliki deskripsi.', 150) }}
                                </p>

                                <div class="mt-auto pt-5">

                                    @if ($potensi->lokasi)
                                        <div class="flex items-start gap-2 border-t border-gray-100 pt-4 text-sm text-gray-500">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="mt-0.5 h-4 w-4 shrink-0 text-green-700"
                                                fill="none"
                                                viewBox="0 0 24 24"
                                                stroke="currentColor"
                                                stroke-width="1.8"
                                                aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657 13.414 20.9a2 2 0 0 1-2.828 0l-4.243-4.243a8 8 0 1 1 11.314 0Z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                            </svg>

                                            <span>{{ $potensi->lokasi }}</span>
                                        </div>
                                    @endif

                                    @if ($potensi->kontak)
                                        <div class="mt-3 flex items-start gap-2 text-sm text-gray-500">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="mt-0.5 h-4 w-4 shrink-0 text-green-700"
                                                fill="none"
                                                viewBox="0 0 24 24"
                                                stroke="currentColor"
                                                stroke-width="1.8"
                                                aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 0 1 2-2h3.28a1 1 0 0 1 1.9.7l-1.2 2.8a1 1 0 0 1-1.1.6l-1.6-.3a11 11 0 0 0 5 5l.3-1.6a1 1 0 0 1 .6-1.1l2.8-1.2a1 1 0 0 1 .7 1.9V14a2 2 0 0 1-2 2A14 14 0 0 1 3 5Z" />
                                            </svg>

                                            <span>{{ $potensi->kontak }}</span>
                                        </div>
                                    @endif

                                </div>
                            </div>
                        </article>
                    @endforeach

                </div>

            @else

                <div class="rounded-xl border border-dashed border-gray-300 bg-white px-6 py-16 text-center">

                    <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-full bg-green-100 text-green-800">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="h-7 w-7"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="1.5"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                        </svg>
                    </div>

                    <h3 class="mt-5 text-xl font-bold text-gray-900">
                        Belum Ada Data Potensi
                    </h3>

                    <p class="mx-auto mt-3 max-w-lg text-sm leading-7 text-gray-600">
                        Informasi potensi desa akan tampil di sini setelah
                        data ditambahkan melalui halaman pengelolaan website.
                    </p>

                </div>

            @endif

        </div>
    </section>


    {{-- AJAKAN BERKONTRIBUSI --}}
    <section class="bg-green-950 px-6 py-16 text-white md:py-20">
        <div class="mx-auto flex max-w-7xl flex-col gap-8 md:flex-row md:items-center md:justify-between">

            <div class="max-w-2xl">
                <p class="text-sm font-bold uppercase tracking-[0.18em] text-lime-300">
                    Potensi Lokal
                </p>

                <h2 class="mt-3 text-3xl font-bold leading-tight md:text-4xl">
                    Mari Kenalkan Potensi Desa
                </h2>

                <p class="mt-4 leading-7 text-green-100">
                    Informasi dan dokumentasi dari masyarakat dapat
                    membantu melengkapi data potensi serta memperkenalkan
                    produk lokal Desa Mekarjaya kepada masyarakat yang lebih luas.
                </p>
            </div>

            <a
                href="{{ url('/#kontak') }}"
                class="inline-flex shrink-0 items-center justify-center gap-3 self-start rounded-lg bg-lime-400 px-6 py-3.5 font-semibold text-green-950 transition hover:bg-lime-300 md:self-center"
            >
                Hubungi Pemerintah Desa
                <span aria-hidden="true">&rarr;</span>
            </a>

        </div>
    </section>

</x-layouts.main>
