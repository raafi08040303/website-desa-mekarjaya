
<x-layouts.main title="Berita Desa - Desa Mekarjaya">

    {{-- HERO BERITA --}}
    <section class="relative isolate overflow-hidden bg-green-950">
        <img
            src="{{ asset('images/poto_desa.png') }}"
            alt="Pemandangan Desa Mekarjaya"
            fetchpriority="high"
            class="absolute inset-0 -z-20 h-full w-full object-cover"
        >

        <div class="absolute inset-0 -z-10 bg-gradient-to-r from-green-950/95 via-green-950/75 to-green-950/35"></div>

        <div class="mx-auto max-w-7xl px-6 py-24 sm:py-32">
            <div class="max-w-3xl">
                <span class="inline-flex items-center rounded-full border border-green-300/30 bg-green-500/20 px-4 py-2 text-xs font-semibold uppercase tracking-[0.2em] text-green-100">
                    Informasi Desa
                </span>

                <h1 class="mt-6 text-4xl font-bold leading-tight text-white sm:text-5xl lg:text-6xl">
                    Berita dan Kegiatan
                    <span class="text-green-300">Desa Mekarjaya</span>
                </h1>

                <p class="mt-6 max-w-2xl text-base leading-8 text-green-50/90 sm:text-lg">
                    Temukan informasi terbaru mengenai kegiatan masyarakat,
                    perkembangan desa, serta berbagai aktivitas yang berlangsung
                    di lingkungan Desa Mekarjaya.
                </p>

                <div class="mt-8 flex flex-wrap items-center gap-4">
                    <a href="#berita-terbaru"
                       class="rounded-xl bg-white px-6 py-3 text-sm font-semibold text-green-900 shadow-lg transition hover:bg-green-50">
                        Lihat Berita Terbaru
                    </a>

                    <span class="text-sm text-green-100">
                        <span class="mr-2 inline-block h-2 w-2 rounded-full bg-green-400"></span>
                        Informasi Desa Mekarjaya
                    </span>
                </div>
            </div>
        </div>
    </section>


    {{-- KONTEN BERITA --}}
    <main id="berita-terbaru" class="mx-auto max-w-7xl px-6 py-16">

        <div class="mb-10 flex flex-col justify-between gap-4 border-b border-gray-200 pb-6 sm:flex-row sm:items-end">
            <div>
                <p class="text-sm font-semibold uppercase tracking-widest text-green-700">
                    Kabar Desa
                </p>

                <h2 class="mt-2 text-3xl font-bold text-gray-900">
                    Berita Terbaru
                </h2>

                <p class="mt-3 max-w-2xl text-sm leading-7 text-gray-500">
                    Informasi, dokumentasi kegiatan, dan perkembangan terbaru
                    dari Pemerintah Desa serta masyarakat Mekarjaya.
                </p>
            </div>

            @if ($beritas->count())
                <div class="text-sm text-gray-500">
                    Menampilkan {{ $beritas->count() }} berita
                </div>
            @endif
        </div>


        @if ($beritas->count())

            {{-- BERITA UTAMA --}}
            @php
                $beritaUtama = $beritas->first();
                $beritaLainnya = $beritas->skip(1);
            @endphp

            <article class="mb-12 grid overflow-hidden rounded-3xl border border-gray-200 bg-white shadow-sm lg:grid-cols-2">

                <div class="relative min-h-[280px] bg-green-50 lg:min-h-[400px]">
                    @if ($beritaUtama->gambar)
                        <img
                            src="{{ asset('storage/' . $beritaUtama->gambar) }}"
                            alt="{{ $beritaUtama->judul }}"
                            loading="lazy"
                            class="absolute inset-0 h-full w-full object-cover"
                        >
                    @else
                        <div class="flex h-full min-h-[280px] items-center justify-center text-green-700">
                            <div class="text-center">
                                <span class="text-6xl">📰</span>
                                <p class="mt-3 text-sm font-medium">Dokumentasi Berita Desa</p>
                            </div>
                        </div>
                    @endif

                    <div class="absolute left-5 top-5">
                        <span class="rounded-full bg-green-800 px-4 py-2 text-xs font-semibold text-white shadow">
                            Berita Utama
                        </span>
                    </div>
                </div>

                <div class="flex flex-col justify-center p-7 sm:p-10">
                    <div class="flex flex-wrap items-center gap-3 text-xs font-medium text-gray-500">
                        <span class="rounded-md bg-green-50 px-3 py-1.5 text-green-700">
                            Berita Desa
                        </span>

                        <span>
                            {{ $beritaUtama->published_at?->format('d F Y') ?? 'Tanggal belum tersedia' }}
                        </span>
                    </div>

                    <h3 class="mt-5 text-2xl font-bold leading-snug text-gray-900 sm:text-3xl">
                        {{ $beritaUtama->judul }}
                    </h3>

                    <p class="mt-5 text-sm leading-7 text-gray-600">
                        {{ $beritaUtama->ringkasan ?: \Illuminate\Support\Str::limit(strip_tags($beritaUtama->isi), 220) }}
                    </p>

                    <div class="mt-8">
                        <span class="inline-flex items-center gap-2 text-sm font-semibold text-green-700">
                            Informasi Desa Mekarjaya
                            <span aria-hidden="true">→</span>
                        </span>
                    </div>
                </div>
            </article>


            {{-- BERITA LAINNYA --}}
            @if ($beritaLainnya->count())
                <div class="mb-7">
                    <h3 class="text-xl font-bold text-gray-900">
                        Informasi Lainnya
                    </h3>
                    <p class="mt-2 text-sm text-gray-500">
                        Berbagai informasi dan kegiatan lainnya di Desa Mekarjaya.
                    </p>
                </div>

                <div class="grid grid-cols-1 gap-7 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach ($beritaLainnya as $berita)
                        <article class="group overflow-hidden rounded-2xl border border-gray-200 bg-white shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-lg">

                            <div class="relative h-56 overflow-hidden bg-green-50">
                                @if ($berita->gambar)
                                    <img
                                        src="{{ asset('storage/' . $berita->gambar) }}"
                                        alt="{{ $berita->judul }}"
                                        loading="lazy"
                                        class="h-full w-full object-cover transition duration-500 group-hover:scale-105"
                                    >
                                @else
                                    <div class="flex h-full items-center justify-center text-green-700">
                                        <div class="text-center">
                                            <span class="text-5xl">📰</span>
                                            <p class="mt-2 text-xs font-medium">Berita Desa Mekarjaya</p>
                                        </div>
                                    </div>
                                @endif
                            </div>

                            <div class="p-6">
                                <p class="text-xs font-medium text-green-700">
                                    {{ $berita->published_at?->format('d F Y') ?? 'Tanggal belum tersedia' }}
                                </p>

                                <h4 class="mt-3 text-lg font-bold leading-snug text-gray-900 transition group-hover:text-green-700">
                                    {{ $berita->judul }}
                                </h4>

                                <p class="mt-3 text-sm leading-6 text-gray-600">
                                    {{ $berita->ringkasan ?: \Illuminate\Support\Str::limit(strip_tags($berita->isi), 140) }}
                                </p>

                                <div class="mt-5 border-t border-gray-100 pt-4">
                                    <span class="text-xs font-semibold text-green-700">
                                        Berita Desa Mekarjaya
                                    </span>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>
            @endif


            {{-- PAGINATION --}}
            <div class="mt-12">
                {{ $beritas->links() }}
            </div>

        @else

            {{-- KONDISI BELUM ADA BERITA --}}
            <div class="overflow-hidden rounded-3xl border border-gray-200 bg-white text-center shadow-sm">
                <div class="relative h-56 bg-green-950">
                    <img
                        src="{{ asset('images/poto_desa.jpg') }}"
                        alt="Desa Mekarjaya"
                        loading="lazy"
                        class="absolute inset-0 h-full w-full object-cover opacity-40"
                    >

                    <div class="absolute inset-0 flex items-center justify-center">
                        <span class="text-6xl">📰</span>
                    </div>
                </div>

                <div class="px-6 py-12">
                    <h2 class="text-2xl font-bold text-gray-900">
                        Belum Ada Berita Terbaru
                    </h2>

                    <p class="mx-auto mt-3 max-w-lg text-sm leading-7 text-gray-500">
                        Berita, informasi, dan dokumentasi kegiatan Desa Mekarjaya
                        akan ditampilkan di halaman ini setelah diterbitkan oleh admin desa.
                    </p>
                </div>
            </div>

        @endif

    </main>


    {{-- PENUTUP --}}
    <section class="bg-green-50">
        <div class="mx-auto max-w-7xl px-6 py-14 text-center">
            <p class="text-sm font-semibold uppercase tracking-widest text-green-700">
                Desa Mekarjaya
            </p>

            <h2 class="mt-3 text-2xl font-bold text-gray-900 sm:text-3xl">
                Bersama Membangun Desa
            </h2>

            <p class="mx-auto mt-4 max-w-2xl text-sm leading-7 text-gray-600">
                Melalui informasi yang terbuka dan mudah diakses,
                masyarakat dapat mengikuti perkembangan serta berbagai
                kegiatan yang ada di Desa Mekarjaya.
            </p>
        </div>
    </section>

</x-layouts.main>
