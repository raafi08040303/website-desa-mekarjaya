<x-layouts.main title="Beranda - Desa Mekarjaya">

    {{-- =====================================================
         HERO SECTION
    ====================================================== --}}
    <section class="relative isolate overflow-hidden bg-green-950">

        {{-- BACKGROUND IMAGE --}}
        <div class="absolute inset-0 -z-10">
            <img
                src="{{ asset('images/beranda/poto_desa.png') }}"
                alt="Foto lingkungan Desa Mekarjaya"
                class="h-full w-full object-cover object-center"
            >

            <div class="absolute inset-0 bg-gradient-to-r from-green-950/95 via-green-950/80 to-green-900/40"></div>
            <div class="absolute inset-0 bg-gradient-to-t from-green-950/70 via-transparent to-transparent"></div>
        </div>

        <div class="relative mx-auto max-w-7xl px-6 py-24 md:py-32 lg:py-40">

            <div class="max-w-3xl">
                <div class="mb-7 inline-flex items-center gap-3 rounded-full border border-white/20 bg-white/10 px-4 py-2.5 text-sm font-semibold text-green-50 backdrop-blur-md">
                    <span class="h-2 w-2 rounded-full bg-lime-400"></span>
                    Website Resmi Desa Mekarjaya
                </div>

                <p class="mb-4 text-sm font-bold uppercase tracking-[0.25em] text-lime-300">
                    Kecamatan Cikalongwetan · Kabupaten Bandung Barat
                </p>

                <h1 class="mb-7 text-4xl font-extrabold leading-tight text-white sm:text-5xl lg:text-7xl">
                    Selamat Datang
                    <span class="mt-2 block text-lime-300">
                        di Desa Mekarjaya
                    </span>
                </h1>

                <p class="mb-10 max-w-2xl text-base leading-relaxed text-green-50/90 sm:text-lg">
                    Mengenal lebih dekat Desa Mekarjaya melalui informasi
                    profil desa, pemerintahan, kehidupan masyarakat,
                    berita, serta potensi lokal yang dimiliki desa.
                </p>

                <div class="flex flex-col gap-4 sm:flex-row">
                    <a href="{{ url('/profil') }}"
                       class="inline-flex items-center justify-center gap-3 rounded-xl bg-lime-400 px-7 py-4 font-bold text-green-950 shadow-lg transition hover:-translate-y-1 hover:bg-lime-300">
                        Mengenal Desa
                        <span aria-hidden="true">→</span>
                    </a>

                    <a href="{{ url('/potensi') }}"
                       class="inline-flex items-center justify-center gap-3 rounded-xl border border-white/40 bg-white/5 px-7 py-4 font-semibold text-white backdrop-blur-sm transition hover:bg-white/15">
                        Jelajahi Potensi
                        <span aria-hidden="true">↗</span>
                    </a>
                </div>
            </div>

            <div class="mt-16 grid max-w-3xl grid-cols-1 gap-4 sm:grid-cols-3">

                <div class="rounded-2xl border border-white/15 bg-white/10 p-5 backdrop-blur-md">
                    <div class="mb-3 text-3xl">🏡</div>
                    <h3 class="mb-1 font-bold text-white">Profil Desa</h3>
                    <p class="text-sm text-green-100/75">Sejarah dan informasi desa</p>
                </div>

                <div class="rounded-2xl border border-white/15 bg-white/10 p-5 backdrop-blur-md">
                    <div class="mb-3 text-3xl">🌱</div>
                    <h3 class="mb-1 font-bold text-white">Potensi Lokal</h3>
                    <p class="text-sm text-green-100/75">Sumber daya dan usaha lokal</p>
                </div>

                <div class="rounded-2xl border border-white/15 bg-white/10 p-5 backdrop-blur-md">
                    <div class="mb-3 text-3xl">🤝</div>
                    <h3 class="mb-1 font-bold text-white">Informasi Desa</h3>
                    <p class="text-sm text-green-100/75">Berita dan kegiatan masyarakat</p>
                </div>

            </div>
        </div>

        <div class="absolute bottom-0 left-0 h-1.5 w-full bg-gradient-to-r from-lime-400 via-green-500 to-transparent"></div>
    </section>


    {{-- =====================================================
         PROFIL SINGKAT
    ====================================================== --}}
    <section id="profil-singkat" class="bg-white py-20 md:py-28">
        <div class="mx-auto grid max-w-7xl grid-cols-1 items-center gap-12 px-6 lg:grid-cols-2 lg:gap-16">

            <div class="relative">
                <img
                    src="{{ asset('images/beranda/poto_desa.png') }}"
                    alt="Foto lingkungan Desa Mekarjaya"
                    loading="lazy"
                    class="h-80 w-full rounded-3xl object-cover shadow-xl md:h-[470px]"
                >

                <div class="absolute -bottom-5 -right-3 rounded-2xl bg-lime-400 p-5 text-green-950 shadow-xl md:-right-5 md:p-7">
                    <p class="text-sm font-semibold">Berdiri sejak</p>
                    <p class="text-3xl font-extrabold">1986</p>
                    <p class="mt-1 text-xs font-medium">Desa Mekarjaya</p>
                </div>
            </div>

            <div class="pt-5 lg:pt-0">
                <span class="text-sm font-bold uppercase tracking-[0.2em] text-green-800">
                    Tentang Desa Kami
                </span>

                <h2 class="mt-4 text-3xl font-extrabold leading-tight text-gray-900 md:text-4xl">
                    Mengenal Lebih Dekat
                    <span class="text-green-800">Desa Mekarjaya</span>
                </h2>

                <div class="my-6 h-1 w-16 rounded-full bg-lime-400"></div>

                <p class="mb-5 leading-relaxed text-gray-600">
                    Desa Mekarjaya merupakan salah satu desa yang berada
                    di Kecamatan Cikalongwetan, Kabupaten Bandung Barat.
                    Desa ini merupakan hasil pemekaran dari Desa Cipada
                    yang secara resmi terbentuk pada tanggal 23 Agustus 1986.
                </p>

                <p class="mb-8 leading-relaxed text-gray-600">
                    Nama Mekarjaya berasal dari dua kata, yaitu
                    <strong class="text-gray-800">Mekar</strong> yang berarti berkembang
                    dan <strong class="text-gray-800">Jaya</strong> yang berarti berhasil.
                    Nama tersebut mencerminkan harapan agar desa terus berkembang
                    dan berhasil dalam pembangunan.
                </p>

                <a href="{{ url('/profil') }}"
                   class="inline-flex items-center gap-3 rounded-xl bg-green-800 px-6 py-3.5 font-bold text-white transition hover:bg-green-950">
                    Selengkapnya tentang Desa
                    <span aria-hidden="true">→</span>
                </a>
            </div>

        </div>
    </section>


    {{-- =====================================================
         STATISTIK DESA
    ====================================================== --}}
    <section id="statistik-desa" class="bg-green-950 py-20 md:py-24">
        <div class="mx-auto max-w-7xl px-6">

            <div class="mx-auto mb-14 max-w-3xl text-center">
                <span class="text-sm font-bold uppercase tracking-[0.2em] text-lime-300">
                    Data Desa
                </span>

                <h2 class="mt-4 text-3xl font-extrabold text-white md:text-4xl">
                    Mekarjaya dalam Angka
                </h2>

                <p class="mt-5 leading-relaxed text-green-100/75">
                    Gambaran umum kondisi kependudukan dan pembagian
                    wilayah administratif Desa Mekarjaya berdasarkan
                    Profil Desa Tahun 2023.
                </p>
            </div>

            <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-5">

                {{-- PENDUDUK --}}
                <div class="rounded-2xl border border-white/10 bg-white/10 p-6 text-center backdrop-blur-sm transition hover:-translate-y-1 hover:bg-white/15">
                    <div class="mb-4 text-3xl">👥</div>
                    <p class="text-3xl font-extrabold text-lime-300">9.561</p>
                    <h3 class="mt-2 font-bold text-white">Penduduk</h3>
                    <p class="mt-1 text-xs text-green-100/65">Jiwa</p>
                </div>

                {{-- KK --}}
                <div class="rounded-2xl border border-white/10 bg-white/10 p-6 text-center backdrop-blur-sm transition hover:-translate-y-1 hover:bg-white/15">
                    <div class="mb-4 text-3xl">🏠</div>
                    <p class="text-3xl font-extrabold text-lime-300">3.136</p>
                    <h3 class="mt-2 font-bold text-white">Kepala Keluarga</h3>
                    <p class="mt-1 text-xs text-green-100/65">KK</p>
                </div>

                {{-- DUSUN --}}
                <div class="rounded-2xl border border-white/10 bg-white/10 p-6 text-center backdrop-blur-sm transition hover:-translate-y-1 hover:bg-white/15">
                    <div class="mb-4 text-3xl">🌳</div>
                    <p class="text-3xl font-extrabold text-lime-300">4</p>
                    <h3 class="mt-2 font-bold text-white">Dusun</h3>
                    <p class="mt-1 text-xs text-green-100/65">Wilayah dusun</p>
                </div>

                {{-- RW --}}
                <div class="rounded-2xl border border-white/10 bg-white/10 p-6 text-center backdrop-blur-sm transition hover:-translate-y-1 hover:bg-white/15">
                    <div class="mb-4 text-3xl">🏘️</div>
                    <p class="text-3xl font-extrabold text-lime-300">20</p>
                    <h3 class="mt-2 font-bold text-white">RW</h3>
                    <p class="mt-1 text-xs text-green-100/65">Rukun Warga</p>
                </div>

                {{-- RT --}}
                <div class="rounded-2xl border border-white/10 bg-white/10 p-6 text-center backdrop-blur-sm transition hover:-translate-y-1 hover:bg-white/15">
                    <div class="mb-4 text-3xl">📍</div>
                    <p class="text-3xl font-extrabold text-lime-300">53</p>
                    <h3 class="mt-2 font-bold text-white">RT</h3>
                    <p class="mt-1 text-xs text-green-100/65">Rukun Tetangga</p>
                </div>

            </div>

            <div class="mt-10 text-center">
                <a href="{{ url('/profil') }}"
                   class="inline-flex items-center gap-2 font-semibold text-lime-300 transition hover:text-white">
                    Lihat data profil desa selengkapnya
                    <span aria-hidden="true">→</span>
                </a>
            </div>

            <p class="mt-8 text-center text-xs text-green-100/50">
                Sumber: Profil Desa Mekarjaya Tahun 2023
            </p>
        </div>
    </section>


    {{-- =====================================================
         GAMBARAN WILAYAH
    ====================================================== --}}
    <section class="bg-green-50 py-20 md:py-24">
        <div class="mx-auto max-w-7xl px-6">

            <div class="mb-12 grid grid-cols-1 items-end gap-6 md:grid-cols-2">
                <div>
                    <span class="text-sm font-bold uppercase tracking-[0.2em] text-green-800">
                        Kondisi Geografis
                    </span>

                    <h2 class="mt-4 text-3xl font-extrabold text-gray-900 md:text-4xl">
                        Gambaran Wilayah Desa
                    </h2>

                    <div class="mt-5 h-1 w-16 rounded-full bg-lime-400"></div>
                </div>

                <p class="leading-relaxed text-gray-600">
                    Desa Mekarjaya memiliki kondisi geografis berupa dataran
                    dan perbukitan dengan wilayah yang dimanfaatkan untuk
                    permukiman, persawahan, perkebunan, serta penggunaan lainnya.
                </p>
            </div>

            <div class="grid grid-cols-1 gap-6 lg:grid-cols-3">

                {{-- LUAS WILAYAH --}}
                <div class="rounded-3xl bg-green-900 p-8 text-white shadow-lg lg:col-span-1">
                    <div class="mb-6 flex h-14 w-14 items-center justify-center rounded-2xl bg-white/10 text-3xl">
                        🗺️
                    </div>

                    <p class="text-sm font-semibold text-green-100/75">
                        Total Luas Wilayah
                    </p>

                    <h3 class="mt-3 text-4xl font-extrabold text-lime-300">
                        879,148
                    </h3>

                    <p class="mt-2 font-semibold text-white">Hektar</p>

                    <div class="mt-8 border-t border-white/15 pt-6">
                        <p class="text-sm leading-relaxed text-green-100/80">
                            Berada pada ketinggian 700–1.300 meter
                            di atas permukaan laut.
                        </p>
                    </div>
                </div>

                {{-- PENGGUNAAN LAHAN --}}
                <div class="rounded-3xl border border-green-100 bg-white p-8 shadow-sm lg:col-span-2">
                    <h3 class="text-xl font-extrabold text-gray-900">
                        Penggunaan Lahan
                    </h3>

                    <p class="mt-2 text-sm text-gray-500">
                        Pembagian luas wilayah Desa Mekarjaya berdasarkan
                        jenis penggunaan lahan.
                    </p>

                    <div class="mt-8 space-y-6">

                        {{-- PEMUKIMAN --}}
                        <div>
                            <div class="mb-2 flex items-center justify-between gap-4">
                                <span class="font-semibold text-gray-700">Permukiman</span>
                                <span class="font-bold text-gray-900">199,322 ha</span>
                            </div>
                            <div class="h-3 overflow-hidden rounded-full bg-gray-100">
                                <div class="h-full rounded-full bg-amber-400" style="width: 22.67%"></div>
                            </div>
                        </div>

                        {{-- PERSAWAHAN --}}
                        <div>
                            <div class="mb-2 flex items-center justify-between gap-4">
                                <span class="font-semibold text-gray-700">Persawahan</span>
                                <span class="font-bold text-gray-900">165,100 ha</span>
                            </div>
                            <div class="h-3 overflow-hidden rounded-full bg-gray-100">
                                <div class="h-full rounded-full bg-green-600" style="width: 18.78%"></div>
                            </div>
                        </div>

                        {{-- PERKEBUNAN --}}
                        <div>
                            <div class="mb-2 flex items-center justify-between gap-4">
                                <span class="font-semibold text-gray-700">Perkebunan</span>
                                <span class="font-bold text-gray-900">375,226 ha</span>
                            </div>
                            <div class="h-3 overflow-hidden rounded-full bg-gray-100">
                                <div class="h-full rounded-full bg-lime-500" style="width: 42.68%"></div>
                            </div>
                        </div>

                        {{-- LAIN-LAIN --}}
                        <div>
                            <div class="mb-2 flex items-center justify-between gap-4">
                                <span class="font-semibold text-gray-700">Lain-lain</span>
                                <span class="font-bold text-gray-900">139,5 ha</span>
                            </div>
                            <div class="h-3 overflow-hidden rounded-full bg-gray-100">
                                <div class="h-full rounded-full bg-slate-400" style="width: 15.87%"></div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <p class="mt-7 text-center text-xs text-gray-500">
                Sumber: Profil Desa Mekarjaya, bagian Kondisi Desa.
                Persentase merupakan perhitungan dari luas masing-masing penggunaan lahan terhadap total luas wilayah.
            </p>

        </div>
    </section>


    {{-- =====================================================
         POTENSI DESA
    ====================================================== --}}
    <section id="potensi" class="bg-white py-20 md:py-24">
        <div class="mx-auto max-w-7xl px-6">

            <div class="mx-auto mb-14 max-w-3xl text-center">
                <span class="text-sm font-bold uppercase tracking-[0.2em] text-green-800">
                    Potensi Lokal
                </span>

                <h2 class="mt-4 text-3xl font-extrabold text-gray-900 md:text-4xl">
                    Potensi dan Ekonomi Lokal
                </h2>

                <p class="mt-5 leading-relaxed text-gray-600">
                    Mengenal berbagai sektor yang menjadi bagian dari
                    kehidupan dan aktivitas ekonomi masyarakat Desa Mekarjaya.
                </p>
            </div>

            <div class="grid grid-cols-1 gap-7 md:grid-cols-3">

                {{-- PERTANIAN --}}
                <article class="group overflow-hidden rounded-2xl border border-gray-100 bg-white shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-xl">
                    <div class="h-56 overflow-hidden">
                        <img
                            src="{{ asset('images/potensi/pertanian.jpeg') }}"
                            alt="Ilustrasi area pertanian"
                            loading="lazy"
                            class="h-full w-full object-cover transition duration-500 group-hover:scale-105"
                        >
                    </div>

                    <div class="p-7">
                        <span class="inline-block rounded-full bg-green-100 px-3 py-1.5 text-xs font-bold text-green-800">
                            Pertanian
                        </span>

                        <h3 class="mb-3 mt-4 text-xl font-bold text-gray-900">
                            Pertanian dan Persawahan
                        </h3>

                        <p class="text-sm leading-relaxed text-gray-600">
                            Sektor pertanian menjadi salah satu bagian
                            penting dari mata pencaharian masyarakat
                            Desa Mekarjaya.
                        </p>
                    </div>
                </article>

                {{-- PERKEBUNAN --}}
                <article class="group overflow-hidden rounded-2xl border border-gray-100 bg-white shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-xl">
                    <div class="h-56 overflow-hidden">
                        <img
                            src="{{ asset('images/potensi/perkebunan.jpg') }}"
                            alt="Ilustrasi perkebunan"
                            loading="lazy"
                            class="h-full w-full object-cover transition duration-500 group-hover:scale-105"
                        >
                    </div>

                    <div class="p-7">
                        <span class="inline-block rounded-full bg-lime-100 px-3 py-1.5 text-xs font-bold text-lime-800">
                            Perkebunan
                        </span>

                        <h3 class="mb-3 mt-4 text-xl font-bold text-gray-900">
                            Sektor Perkebunan
                        </h3>

                        <p class="text-sm leading-relaxed text-gray-600">
                            Wilayah perkebunan merupakan bagian dari
                            penggunaan lahan Desa Mekarjaya dengan
                            luas 375,226 hektar.
                        </p>
                    </div>
                </article>

                {{-- USAHA LOKAL --}}
                <article class="group overflow-hidden rounded-2xl border border-gray-100 bg-white shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-xl">
                    <div class="h-56 overflow-hidden">
                        <img
                            src="{{ asset('images/potensi/umkm.jpg') }}"
                            alt="Ilustrasi kegiatan usaha masyarakat"
                            loading="lazy"
                            class="h-full w-full object-cover transition duration-500 group-hover:scale-105"
                        >
                    </div>

                    <div class="p-7">
                        <span class="inline-block rounded-full bg-amber-100 px-3 py-1.5 text-xs font-bold text-amber-800">
                            Ekonomi Lokal
                        </span>

                        <h3 class="mb-3 mt-4 text-xl font-bold text-gray-900">
                            Perdagangan dan Usaha Lokal
                        </h3>

                        <p class="text-sm leading-relaxed text-gray-600">
                            Aktivitas ekonomi masyarakat meliputi
                            perdagangan, toko, kios, warung, dan
                            berbagai jenis usaha lokal.
                        </p>
                    </div>
                </article>

            </div>

            <div class="mt-10 text-center">
                <a href="{{ url('/potensi') }}"
                   class="inline-flex items-center gap-3 rounded-xl bg-green-800 px-7 py-3.5 font-bold text-white transition hover:bg-green-950">
                    Jelajahi Semua Potensi
                    <span aria-hidden="true">→</span>
                </a>
            </div>

        </div>
    </section>


    {{-- =====================================================
         POTENSI TERBARU DARI ADMIN
    ====================================================== --}}
    <section class="bg-green-50 py-20 md:py-24">
        <div class="mx-auto max-w-7xl px-6">

            <div class="mb-10 flex flex-col gap-5 md:flex-row md:items-end md:justify-between">
                <div>
                    <span class="text-sm font-bold uppercase tracking-[0.2em] text-green-800">
                        Informasi Terbaru
                    </span>

                    <h2 class="mt-4 text-3xl font-extrabold text-gray-900 md:text-4xl">
                        Potensi Terbaru Desa
                    </h2>

                    <p class="mt-4 max-w-2xl leading-relaxed text-gray-600">
                        Informasi potensi dan produk lokal yang telah
                        dipublikasikan melalui website Desa Mekarjaya.
                    </p>
                </div>

                <a href="{{ url('/potensi') }}"
                   class="inline-flex items-center gap-2 font-bold text-green-800 transition hover:text-green-950">
                    Lihat Semua Potensi
                    <span aria-hidden="true">→</span>
                </a>
            </div>

            @if ($potensis->count())
                <div class="grid grid-cols-1 gap-7 md:grid-cols-2 lg:grid-cols-3">

                    @foreach ($potensis as $potensi)
                        <article class="overflow-hidden rounded-2xl border border-gray-100 bg-white shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-xl">

                            <div class="h-56 overflow-hidden bg-green-100">
                                @if ($potensi->gambar)
                                    <img
                                        src="{{ asset('storage/' . $potensi->gambar) }}"
                                        alt="{{ $potensi->nama }}"
                                        loading="lazy"
                                        class="h-full w-full object-cover transition duration-500 hover:scale-105"
                                    >
                                @else
                                    <div class="flex h-full w-full items-center justify-center text-5xl">
                                        🌱
                                    </div>
                                @endif
                            </div>

                            <div class="p-7">
                                <span class="inline-block rounded-full bg-green-100 px-3 py-1.5 text-xs font-bold text-green-800">
                                    {{ $potensi->kategori }}
                                </span>

                                <h3 class="mb-3 mt-4 text-xl font-bold text-gray-900">
                                    {{ $potensi->nama }}
                                </h3>

                                <p class="text-sm leading-relaxed text-gray-600">
                                    {{ \Illuminate\Support\Str::limit($potensi->deskripsi, 120) }}
                                </p>

                                @if ($potensi->lokasi)
                                    <p class="mt-4 text-sm text-gray-500">
                                        <span class="font-semibold text-gray-700">Lokasi:</span>
                                        {{ $potensi->lokasi }}
                                    </p>
                                @endif
                            </div>

                        </article>
                    @endforeach

                </div>
            @else
                <div class="rounded-2xl border border-dashed border-green-200 bg-white px-6 py-14 text-center">
                    <div class="mb-4 text-5xl">🌱</div>

                    <h3 class="mb-2 text-xl font-bold text-gray-900">
                        Belum Ada Potensi Terbaru
                    </h3>

                    <p class="mx-auto max-w-lg text-sm leading-relaxed text-gray-600">
                        Informasi potensi desa akan ditampilkan di sini
                        setelah ditambahkan dan dipublikasikan oleh admin.
                    </p>
                </div>
            @endif

        </div>
    </section>


    {{-- =====================================================
         BERITA DAN KEGIATAN
    ====================================================== --}}
    <section id="berita" class="bg-white py-20 md:py-24">
        <div class="mx-auto max-w-7xl px-6">

            <div class="mb-12 flex flex-col gap-5 md:flex-row md:items-end md:justify-between">
                <div>
                    <span class="text-sm font-bold uppercase tracking-[0.2em] text-green-800">
                        Informasi Desa
                    </span>

                    <h2 class="mt-4 text-3xl font-extrabold text-gray-900 md:text-4xl">
                        Berita dan Kegiatan
                    </h2>

                    <p class="mt-4 max-w-2xl leading-relaxed text-gray-600">
                        Ikuti informasi kegiatan, perkembangan,
                        dan kabar terbaru dari lingkungan Desa Mekarjaya.
                    </p>
                </div>

                <a href="{{ route('berita') }}"
                   class="inline-flex items-center gap-2 font-bold text-green-800 transition hover:text-green-950">
                    Lihat Semua Berita
                    <span aria-hidden="true">→</span>
                </a>
            </div>

            @if ($beritas->count())
                <div class="grid grid-cols-1 gap-7 md:grid-cols-2">

                    @foreach ($beritas as $berita)
                        <article class="group overflow-hidden rounded-2xl border border-gray-100 bg-white shadow-sm transition hover:shadow-xl">

                            <div class="h-60 overflow-hidden bg-green-100">
                                @if ($berita->gambar)
                                    <img
                                        src="{{ asset('storage/' . $berita->gambar) }}"
                                        alt="{{ $berita->judul }}"
                                        loading="lazy"
                                        class="h-full w-full object-cover transition duration-500 group-hover:scale-105"
                                    >
                                @else
                                    <div class="flex h-full w-full items-center justify-center text-5xl">
                                        📰
                                    </div>
                                @endif
                            </div>

                            <div class="p-7">
                                <span class="text-xs font-bold uppercase tracking-wider text-green-800">
                                    Informasi Desa
                                </span>

                                <p class="mt-3 text-xs text-gray-500">
                                    {{ $berita->published_at?->format('d M Y') }}
                                </p>

                                <h3 class="mb-3 mt-3 text-xl font-bold text-gray-900">
                                    {{ $berita->judul }}
                                </h3>

                                <p class="text-sm leading-relaxed text-gray-600">
                                    {{ $berita->ringkasan ?: \Illuminate\Support\Str::limit(strip_tags($berita->isi), 140) }}
                                </p>

                                <a href="{{ route('berita') }}"
                                   class="mt-5 inline-flex items-center gap-2 font-semibold text-green-800 transition hover:text-green-950">
                                    Baca berita lainnya
                                    <span aria-hidden="true">→</span>
                                </a>
                            </div>

                        </article>
                    @endforeach

                </div>
            @else
                <div class="rounded-2xl border border-dashed border-green-200 bg-green-50 px-6 py-14 text-center">
                    <div class="mb-4 text-5xl">📰</div>

                    <h3 class="mb-2 text-xl font-bold text-gray-900">
                        Belum Ada Berita Terbaru
                    </h3>

                    <p class="mx-auto max-w-lg text-sm leading-relaxed text-gray-600">
                        Berita dan kegiatan Desa Mekarjaya akan ditampilkan
                        di sini setelah diterbitkan oleh admin.
                    </p>
                </div>
            @endif

        </div>
    </section>


    {{-- =====================================================
         KONTAK DAN LOKASI
    ====================================================== --}}
    <section id="kontak" class="bg-green-950 py-20 md:py-24">
        <div class="mx-auto max-w-7xl px-6">

            <div class="mx-auto mb-14 max-w-3xl text-center">
                <span class="mb-5 inline-flex items-center gap-2 rounded-full border border-white/15 bg-white/10 px-4 py-2 text-sm font-semibold text-lime-300">
                    <span class="h-2 w-2 rounded-full bg-lime-400"></span>
                    Kontak dan Lokasi
                </span>

                <h2 class="text-3xl font-extrabold leading-tight text-white md:text-5xl">
                    Hubungi Kami
                    <span class="mt-2 block text-lime-300">
                        Pemerintah Desa Mekarjaya
                    </span>
                </h2>

                <p class="mx-auto mt-5 max-w-2xl leading-relaxed text-green-100/75">
                    Silakan hubungi Pemerintah Desa Mekarjaya untuk
                    memperoleh informasi mengenai desa dan pelayanan
                    kepada masyarakat.
                </p>
            </div>

            <div class="grid grid-cols-1 items-stretch gap-8 lg:grid-cols-2">

                {{-- INFORMASI KONTAK --}}
                <div class="rounded-3xl bg-white p-6 shadow-xl md:p-8">
                    <h3 class="text-2xl font-extrabold text-gray-900">
                        Informasi Kontak
                    </h3>

                    <p class="mb-8 mt-2 text-sm text-gray-500">
                        Informasi untuk menghubungi dan mengunjungi kantor desa.
                    </p>

                    <div class="space-y-7">

                        {{-- ALAMAT --}}
                        <div class="flex gap-4">
                            <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-green-100 text-green-800">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 21s7-5.5 7-12a7 7 0 1 0-14 0c0 6.5 7 12 7 12Z"/>
                                    <circle cx="12" cy="9" r="2.5"/>
                                </svg>
                            </div>

                            <div>
                                <h4 class="mb-1 font-bold text-gray-900">Alamat Kantor</h4>
                                <p class="text-sm leading-relaxed text-gray-600">
                                    Jln. Kantor Desa Mekarjaya No. 01 RT 001/007,
                                    Desa Mekarjaya, Kecamatan Cikalongwetan,
                                    Kabupaten Bandung Barat.
                                </p>
                            </div>
                        </div>

                        {{-- WHATSAPP --}}
                        <div class="flex gap-4">
                            <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-green-100 text-green-800">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 11.5a8.5 8.5 0 0 1-12.6 7.4L3 20l1.2-5.1A8.5 8.5 0 1 1 21 11.5Z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.5 8.5c.5 2 2 3.5 4.5 4.5l1.5-1 2 1c-.2 1.5-1.2 2.5-2.7 2.5-3.5-.5-6.8-3.8-7.3-7.3C6.5 6.7 7.5 5.7 9 5.5l1 2-1.5 1Z"/>
                                </svg>
                            </div>

                            <div>
                                <h4 class="mb-1 font-bold text-gray-900">Telepon / WhatsApp</h4>
                                <a href="https://wa.me/6285846209877"
                                   target="_blank"
                                   rel="noopener noreferrer"
                                   class="text-sm font-semibold text-green-800 transition hover:text-green-950">
                                    +62 858-4620-9877 ↗
                                </a>
                            </div>
                        </div>

                        {{-- JAM OPERASIONAL --}}
                        <div class="flex gap-4">
                            <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-green-100 text-green-800">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                    <circle cx="12" cy="12" r="9"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 7v5l3 2"/>
                                </svg>
                            </div>

                            <div>
                                <h4 class="mb-1 font-bold text-gray-900">Jam Operasional</h4>
                                <p class="text-sm leading-relaxed text-gray-600">
                                    Senin–Jumat<br>
                                    Pukul 08.00–15.00 WIB
                                </p>
                                <p class="mt-1 text-xs font-semibold text-red-600">
                                    Sabtu–Minggu tutup
                                </p>
                            </div>
                        </div>

                        {{-- INSTAGRAM --}}
                        <div class="flex gap-4">
                            <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-green-100 text-green-800">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                    <rect x="3" y="3" width="18" height="18" rx="5"/>
                                    <circle cx="12" cy="12" r="4"/>
                                    <circle cx="17.5" cy="6.5" r=".8" fill="currentColor"/>
                                </svg>
                            </div>

                            <div>
                                <h4 class="mb-1 font-bold text-gray-900">Instagram</h4>
                                <a href="https://www.instagram.com/pemdesmekarjayamaju/"
                                   target="_blank"
                                   rel="noopener noreferrer"
                                   class="text-sm font-semibold text-green-800 transition hover:text-green-950">
                                    @pemdesmekarjayamaju ↗
                                </a>
                            </div>
                        </div>

                    </div>

                    <div class="mt-9 grid grid-cols-1 gap-3 sm:grid-cols-2">
                        <a href="https://wa.me/+6285846209877"
                           target="_blank"
                           rel="noopener noreferrer"
                           class="inline-flex items-center justify-center gap-2 rounded-xl bg-green-800 px-5 py-3.5 font-bold text-white transition hover:bg-green-950">
                            Hubungi WhatsApp ↗
                        </a>

                        <a href="https://www.instagram.com/pemdesmekarjayamaju/"
                           target="_blank"
                           rel="noopener noreferrer"
                           class="inline-flex items-center justify-center gap-2 rounded-xl border border-green-200 px-5 py-3.5 font-bold text-green-900 transition hover:bg-green-50">
                            Instagram Desa ↗
                        </a>
                    </div>
                </div>


                {{-- GOOGLE MAPS --}}
                <div class="flex flex-col overflow-hidden rounded-3xl bg-white shadow-xl">

                    <div class="p-6 md:p-8">
                        <span class="text-sm font-bold uppercase tracking-[0.2em] text-green-800">
                            Temukan Kami
                        </span>

                        <h3 class="mb-3 mt-3 text-2xl font-extrabold text-gray-900">
                            Lokasi Kantor Desa
                        </h3>

                        <p class="text-sm leading-relaxed text-gray-600">
                            Kunjungi lokasi Kantor Desa Mekarjaya melalui
                            Google Maps untuk melihat peta dan petunjuk arah.
                        </p>
                    </div>

                    <div class="relative min-h-[320px] flex-1 bg-green-50 lg:min-h-[360px]">
                        <iframe
                            src="https://www.google.com/maps?q=Kantor+Desa+Mekar+Jaya%2C+Mekarjaya%2C+Cikalong+Wetan%2C+Bandung+Barat&output=embed"
                            title="Peta lokasi Kantor Desa Mekarjaya"
                            class="absolute inset-0 h-full w-full border-0"
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                            allowfullscreen>
                        </iframe>
                    </div>

                    <div class="border-t border-gray-100 p-5 md:p-6">
                        <a href="https://share.google/qxWvfz8fpVkQY9Hlg"
                           target="_blank"
                           rel="noopener noreferrer"
                           class="inline-flex w-full items-center justify-center gap-2 rounded-xl bg-lime-400 px-5 py-3.5 font-bold text-green-950 transition hover:bg-lime-300">
                            Buka Lokasi di Google Maps ↗
                        </a>

                        <p class="mt-3 text-center text-xs text-gray-500">
                            Pastikan lokasi dan jam pelayanan sebelum berkunjung.
                        </p>
                    </div>
                </div>

            </div>

            <p class="mt-10 text-center text-xs text-green-100/50">
                Website Informasi Desa Mekarjaya · Kecamatan Cikalongwetan · Kabupaten Bandung Barat
            </p>

        </div>
    </section>

</x-layouts.main>
