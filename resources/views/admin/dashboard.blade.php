
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#14532d">
    <title>Dashboard Admin | Desa Mekarjaya</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        * { box-sizing: border-box; }
        body { font-family: 'DM Sans', sans-serif; }
        h1, h2, h3, h4 { font-family: 'Plus Jakarta Sans', sans-serif; }

        .menu-link { transition: all .2s ease; }
        .menu-link:hover { transform: translateX(3px); }
        .stat-card, .action-card { transition: all .2s ease; }
        .stat-card:hover, .action-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 28px rgba(15, 23, 42, .07);
        }
        .sidebar-pattern {
            background-image: radial-gradient(rgba(255,255,255,.06) 1px, transparent 1px);
            background-size: 20px 20px;
        }
    </style>
</head>

<body class="min-h-screen bg-[#f5f7f5] text-slate-800">

@php
    $totalBerita = \App\Models\Berita::count();

    $beritaTerbit = \App\Models\Berita::where('status', 'published')
        ->whereNotNull('published_at')
        ->where('published_at', '<=', now())
        ->count();

    $beritaDraft = \App\Models\Berita::where('status', 'draft')->count();

    $beritaTerbaru = \App\Models\Berita::latest()->take(5)->get();

    $totalPotensi = \App\Models\Potensi::count();

    $potensiTerbit = \App\Models\Potensi::where('status', 'published')->count();

    $potensiDraft = \App\Models\Potensi::where('status', 'draft')->count();

    $potensiTerbaru = \App\Models\Potensi::latest()->take(5)->get();
@endphp

<div class="min-h-screen lg:flex">

    <!-- SIDEBAR -->
    <aside class="relative z-10 flex w-full flex-col bg-[#103d27] text-white lg:fixed lg:inset-y-0 lg:w-72">

        <div class="sidebar-pattern pointer-events-none absolute inset-0"></div>

        <!-- IDENTITAS -->
        <div class="relative border-b border-white/10 px-6 py-6">
            <a href="{{ route('admin') }}" class="flex items-center gap-3">

                <!-- LOGO DESA MEKARJAYA -->
                <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl border border-white/10 bg-white p-1.5">
                    <img
                        src="{{ asset('images/Logo-desa.png') }}"
                        alt="Logo Desa Mekarjaya"
                        class="h-full w-full object-contain"
                    >
                </div>

                <div class="min-w-0">
                    <h1 class="text-base font-extrabold tracking-tight">Desa Mekarjaya</h1>
                    <p class="mt-1 text-xs text-emerald-200/70">Administrator Portal</p>
                </div>
            </a>
        </div>

        <!-- NAVIGASI -->
        <nav class="relative flex gap-2 overflow-x-auto p-4 lg:flex-1 lg:flex-col lg:overflow-y-auto lg:px-4 lg:py-7">

            <!-- MENU UTAMA -->
            <p class="hidden px-3 pb-2 text-[10px] font-bold uppercase tracking-[.2em] text-emerald-200/50 lg:block">
                Menu Utama
            </p>

            <!-- Dashboard -->
            <a href="{{ route('admin') }}"
               class="menu-link flex shrink-0 items-center gap-3 rounded-xl bg-emerald-400/15 px-4 py-3 text-sm font-semibold text-white ring-1 ring-inset ring-emerald-300/15">
                <svg class="h-5 w-5 text-emerald-200" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                    <rect x="3" y="3" width="7" height="7" rx="1.5"/>
                    <rect x="14" y="3" width="7" height="7" rx="1.5"/>
                    <rect x="14" y="14" width="7" height="7" rx="1.5"/>
                    <rect x="3" y="14" width="7" height="7" rx="1.5"/>
                </svg>
                Dashboard
            </a>

            <div class="my-3 border-t border-white/10"></div>

            <!-- KELOLA BERITA -->
            <p class="hidden px-3 pb-2 text-[10px] font-bold uppercase tracking-[.2em] text-emerald-200/50 lg:block">
                Berita
            </p>

            <!-- Daftar Berita -->
            <a href="{{ route('admin.berita.index') }}"
               class="menu-link flex shrink-0 items-center gap-3 rounded-xl px-4 py-3 text-sm text-emerald-50/75 hover:bg-white/10 hover:text-white">
                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                    <path d="M4 4h12a2 2 0 0 1 2 2v14H6a2 2 0 0 1-2-2Z"/>
                    <path d="M8 8h6M8 12h6M8 16h4M18 8h2v12"/>
                </svg>
                Kelola Berita

                <span class="ml-auto hidden rounded-lg bg-white/10 px-2 py-1 text-xs lg:inline">
                    {{ $totalBerita }}
                </span>
            </a>

            <!-- Tambah Berita -->
            <a href="{{ route('admin.berita.create') }}"
               class="menu-link flex shrink-0 items-center gap-3 rounded-xl px-4 py-3 text-sm text-emerald-50/75 hover:bg-white/10 hover:text-white">
                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                    <circle cx="12" cy="12" r="9"/>
                    <path d="M12 8v8M8 12h8"/>
                </svg>
                Tambah Berita
            </a>

            <!-- Berita Beranda -->
            <a href="{{ url('/#berita') }}" target="_blank" rel="noopener"
               class="menu-link flex shrink-0 items-center gap-3 rounded-xl px-4 py-3 text-sm text-emerald-50/75 hover:bg-white/10 hover:text-white">
                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                    <rect x="3" y="4" width="18" height="16" rx="2"/>
                    <path d="M3 9h18M8 4v5M8 13h8M8 16h5"/>
                </svg>
                Berita Beranda
            </a>

            <div class="my-3 border-t border-white/10"></div>

            <!-- KELOLA POTENSI DESA -->
            <p class="hidden px-3 pb-2 text-[10px] font-bold uppercase tracking-[.2em] text-emerald-200/50 lg:block">
                Potensi Desa
            </p>

            <!-- Daftar Potensi -->
            <a href="{{ route('admin.potensi.index') }}"
               class="menu-link flex shrink-0 items-center gap-3 rounded-xl px-4 py-3 text-sm text-emerald-50/75 hover:bg-white/10 hover:text-white">
                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                    <path d="M3 20 9 8l4 7 3-5 5 10Z"/>
                    <path d="M3 20h18"/>
                </svg>
                Kelola Potensi

                <span class="ml-auto hidden rounded-lg bg-white/10 px-2 py-1 text-xs lg:inline">
                    {{ $totalPotensi }}
                </span>
            </a>

            <!-- Tambah Potensi -->
            <a href="{{ route('admin.potensi.create') }}"
               class="menu-link flex shrink-0 items-center gap-3 rounded-xl px-4 py-3 text-sm text-emerald-50/75 hover:bg-white/10 hover:text-white">
                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                    <circle cx="12" cy="12" r="9"/>
                    <path d="M12 8v8M8 12h8"/>
                </svg>
                Tambah Potensi
            </a>

            <!-- Halaman Potensi Publik -->
            <a href="{{ route('potensi') }}" target="_blank" rel="noopener"
               class="menu-link flex shrink-0 items-center gap-3 rounded-xl px-4 py-3 text-sm text-emerald-50/75 hover:bg-white/10 hover:text-white">
                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                    <path d="M14 3h7v7M10 14 21 3"/>
                    <path d="M19 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2h6"/>
                </svg>
                Lihat Potensi Publik
            </a>

        </nav>

        <!-- AKSI BAWAH -->
        <div class="relative hidden space-y-2 border-t border-white/10 p-4 lg:block">
            <a href="{{ url('/') }}" target="_blank" rel="noopener"
               class="flex items-center gap-3 rounded-xl px-4 py-3 text-sm text-emerald-50/75 transition hover:bg-white/10 hover:text-white">
                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                    <path d="M14 3h7v7M10 14 21 3"/>
                    <path d="M19 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2h6"/>
                </svg>
                Lihat Website
            </a>

            <a href="{{ route('logout') }}"
               onclick="return confirm('Yakin ingin keluar dari dashboard?')"
               class="flex items-center gap-3 rounded-xl px-4 py-3 text-sm text-red-200 transition hover:bg-red-500/10 hover:text-red-100">
                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                    <path d="M10 17l5-5-5-5M15 12H3"/>
                    <path d="M12 3h6a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-6"/>
                </svg>
                Keluar dari Akun
            </a>

            <p class="px-4 pt-3 text-[10px] text-emerald-200/40">
                © {{ date('Y') }} Desa Mekarjaya
            </p>
        </div>
    </aside>

    <!-- KONTEN UTAMA -->
    <main class="min-w-0 flex-1 lg:ml-72">

        <!-- HEADER -->
        <header class="sticky top-0 z-20 border-b border-slate-200/80 bg-white/95 backdrop-blur">
            <div class="flex flex-wrap items-center justify-between gap-4 px-5 py-4 sm:px-8 lg:px-10">
                <div>
                    <p class="text-xs font-semibold uppercase tracking-widest text-green-700">Panel Administrasi</p>
                    <h2 class="mt-1 text-xl font-extrabold tracking-tight text-slate-900 sm:text-2xl">Dashboard</h2>
                </div>

                <div class="flex items-center gap-3">
                    <div class="hidden text-right sm:block">
                        <p class="text-sm font-bold text-slate-800">{{ auth()->user()->name }}</p>
                        <p class="mt-1 text-xs text-slate-500">Administrator</p>
                    </div>

                    <!-- IKON PROFIL ADMINISTRATOR -->
                    <div class="flex h-11 w-11 items-center justify-center rounded-2xl bg-emerald-100 text-emerald-800 shadow-sm">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="h-6 w-6"
                             viewBox="0 0 24 24"
                             fill="none"
                             stroke="currentColor"
                             stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M20 21a8 8 0 0 0-16 0"/>
                            <circle cx="12" cy="8" r="4"
                                    stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>
            </div>
        </header>

        <div class="space-y-8 p-5 sm:p-8 lg:p-10">

            <!-- WELCOME BANNER -->
            <section class="relative overflow-hidden rounded-3xl bg-gradient-to-br from-[#103d27] via-green-800 to-green-700 p-6 text-white shadow-lg shadow-green-950/10 sm:p-9">
                <div class="pointer-events-none absolute -right-10 -top-24 h-72 w-72 rounded-full border border-white/10"></div>
                <div class="pointer-events-none absolute -right-1 -top-12 h-52 w-52 rounded-full border border-white/10"></div>
                <div class="pointer-events-none absolute bottom-0 right-1/4 h-24 w-24 rounded-full bg-lime-300/10 blur-2xl"></div>

                <div class="relative z-10 max-w-2xl">
                    <span class="inline-flex items-center gap-2 rounded-full border border-white/15 bg-white/10 px-3 py-1.5 text-[10px] font-bold uppercase tracking-[.16em] text-green-100 sm:text-xs">
                        <span class="h-2 w-2 rounded-full bg-lime-300"></span>
                        Pusat Pengelolaan Website
                    </span>

                    <h3 class="mt-5 text-2xl font-extrabold leading-tight sm:text-3xl lg:text-4xl">
                        Selamat datang,<br class="sm:hidden">
                        {{ auth()->user()->name }}!
                    </h3>

                    <p class="mt-4 max-w-xl text-sm leading-6 text-green-50/80 sm:text-base sm:leading-7">
                        Pantau konten website dan kelola informasi Desa Mekarjaya dari satu tempat.
                        Pastikan berita dan informasi potensi desa selalu informatif dan terbaru.
                    </p>

                    <div class="mt-6 flex flex-wrap gap-3">
                        <a href="{{ route('admin.berita.create') }}"
                           class="inline-flex items-center gap-2 rounded-xl bg-white px-5 py-3 text-sm font-bold text-green-900 shadow-sm transition hover:bg-green-50">
                            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M12 5v14M5 12h14"/>
                            </svg>
                            Buat Berita
                        </a>

                        <a href="{{ route('admin.potensi.create') }}"
                           class="inline-flex items-center gap-2 rounded-xl border border-white/25 bg-white/10 px-5 py-3 text-sm font-semibold text-white transition hover:bg-white/15">
                            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M12 5v14M5 12h14"/>
                            </svg>
                            Tambah Potensi
                        </a>
                    </div>
                </div>
            </section>

            <!-- STATISTIK -->
            <section>
                <div class="mb-5 flex flex-wrap items-end justify-between gap-3">
                    <div>
                        <h3 class="text-lg font-extrabold text-slate-900">Ringkasan Konten</h3>
                        <p class="mt-1 text-sm text-slate-500">Kondisi data berita dan potensi desa saat ini.</p>
                    </div>
                    <a href="{{ route('admin.berita.index') }}" class="text-sm font-bold text-green-800 hover:text-green-950">
                        Kelola berita →
                    </a>
                </div>

                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 xl:grid-cols-4">

                    <!-- TOTAL BERITA -->
                    <div class="stat-card rounded-2xl border border-slate-100 bg-white p-5 shadow-sm sm:p-6">
                        <div class="flex items-start justify-between">
                            <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-green-50 text-green-800">
                                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                                    <path d="M4 4h12a2 2 0 0 1 2 2v14H6a2 2 0 0 1-2-2Z"/>
                                    <path d="M8 8h6M8 12h6M8 16h4M18 8h2v12"/>
                                </svg>
                            </div>
                            <span class="rounded-lg bg-slate-50 px-2.5 py-1 text-[10px] font-bold tracking-wider text-slate-500">TOTAL</span>
                        </div>
                        <p class="mt-5 text-sm font-medium text-slate-500">Semua Berita</p>
                        <p class="mt-1 text-3xl font-extrabold tracking-tight text-slate-900">{{ $totalBerita }}</p>
                        <p class="mt-2 text-xs text-slate-400">Seluruh berita tersimpan</p>
                    </div>

                    <!-- BERITA TERBIT -->
                    <div class="stat-card rounded-2xl border border-slate-100 bg-white p-5 shadow-sm sm:p-6">
                        <div class="flex items-start justify-between">
                            <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-emerald-50 text-emerald-700">
                                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                                    <circle cx="12" cy="12" r="9"/>
                                    <path d="m8 12 2.5 2.5L16 9"/>
                                </svg>
                            </div>
                            <span class="rounded-lg bg-emerald-50 px-2.5 py-1 text-[10px] font-bold tracking-wider text-emerald-700">TERBIT</span>
                        </div>
                        <p class="mt-5 text-sm font-medium text-slate-500">Berita Terbit</p>
                        <p class="mt-1 text-3xl font-extrabold tracking-tight text-slate-900">{{ $beritaTerbit }}</p>
                        <p class="mt-2 text-xs text-slate-400">Berita yang sudah tayang</p>
                    </div>

                    <!-- BERITA DRAFT -->
                    <div class="stat-card rounded-2xl border border-slate-100 bg-white p-5 shadow-sm sm:p-6">
                        <div class="flex items-start justify-between">
                            <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-amber-50 text-amber-700">
                                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                                    <circle cx="12" cy="12" r="9"/>
                                    <path d="M12 7v5l3 2"/>
                                </svg>
                            </div>
                            <span class="rounded-lg bg-amber-50 px-2.5 py-1 text-[10px] font-bold tracking-wider text-amber-700">DRAFT</span>
                        </div>
                        <p class="mt-5 text-sm font-medium text-slate-500">Berita Draft</p>
                        <p class="mt-1 text-3xl font-extrabold tracking-tight text-slate-900">{{ $beritaDraft }}</p>
                        <p class="mt-2 text-xs text-slate-400">Berita belum diterbitkan</p>
                    </div>

                    <!-- TOTAL POTENSI -->
                    <a href="{{ route('admin.potensi.index') }}"
                       class="stat-card block rounded-2xl border border-slate-100 bg-white p-5 shadow-sm sm:p-6">
                        <div class="flex items-start justify-between">
                            <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-lime-50 text-lime-800">
                                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                                    <path d="M3 20 9 8l4 7 3-5 5 10Z"/>
                                    <path d="M3 20h18"/>
                                </svg>
                            </div>
                            <span class="rounded-lg bg-lime-50 px-2.5 py-1 text-[10px] font-bold tracking-wider text-lime-800">POTENSI</span>
                        </div>
                        <p class="mt-5 text-sm font-medium text-slate-500">Data Potensi Desa</p>
                        <p class="mt-1 text-3xl font-extrabold tracking-tight text-slate-900">{{ $totalPotensi }}</p>
                        <p class="mt-2 text-xs text-slate-400">Klik untuk mengelola potensi →</p>
                    </a>
                </div>
            </section>

            <!-- BERITA TERBARU -->
            <section class="overflow-hidden rounded-2xl border border-slate-100 bg-white shadow-sm">
                <div class="flex flex-wrap items-center justify-between gap-3 border-b border-slate-100 px-5 py-5 sm:px-6">
                    <div>
                        <h3 class="text-lg font-extrabold text-slate-900">Berita Terbaru</h3>
                        <p class="mt-1 text-sm text-slate-500">Lima berita terakhir yang tersimpan.</p>
                    </div>

                    <a href="{{ route('admin.berita.index') }}"
                       class="rounded-xl border border-slate-200 px-4 py-2.5 text-xs font-bold text-slate-700 transition hover:border-green-700 hover:text-green-800">
                        Kelola Berita →
                    </a>
                </div>

                @if($beritaTerbaru->isEmpty())
                    <div class="px-6 py-14 text-center">
                        <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-2xl bg-green-50 text-green-700">
                            <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6">
                                <path d="M4 4h12a2 2 0 0 1 2 2v14H6a2 2 0 0 1-2-2Z"/>
                                <path d="M8 8h6M8 12h6M8 16h4"/>
                            </svg>
                        </div>
                        <h4 class="mt-4 font-bold text-slate-800">Belum ada berita</h4>
                        <p class="mt-2 text-sm text-slate-500">Mulai tambahkan informasi atau kegiatan desa.</p>
                        <a href="{{ route('admin.berita.create') }}"
                           class="mt-5 inline-flex items-center gap-2 rounded-xl bg-green-800 px-5 py-3 text-sm font-bold text-white transition hover:bg-green-900">
                            + Tambah Berita Pertama
                        </a>
                    </div>
                @else
                    <div class="divide-y divide-slate-100">
                        @foreach($beritaTerbaru as $berita)
                            @php
                                $sudahTerbit = $berita->status === 'published'
                                    && $berita->published_at
                                    && $berita->published_at <= now();
                            @endphp

                            <div class="flex flex-col gap-4 px-5 py-4 transition hover:bg-slate-50/80 sm:flex-row sm:items-center sm:px-6">

                                <div class="h-20 w-full shrink-0 overflow-hidden rounded-xl bg-slate-100 sm:h-16 sm:w-24">
                                    @if($berita->gambar)
                                        <img src="{{ asset('storage/' . $berita->gambar) }}"
                                             alt="{{ $berita->judul }}"
                                             class="h-full w-full object-cover"
                                             loading="lazy">
                                    @else
                                        <div class="flex h-full w-full items-center justify-center text-green-800">
                                            <svg class="h-8 w-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                                <rect x="3" y="3" width="18" height="18" rx="2"/>
                                                <circle cx="8.5" cy="8.5" r="1.5"/>
                                                <path d="m21 15-5-5L5 21"/>
                                            </svg>
                                        </div>
                                    @endif
                                </div>

                                <div class="min-w-0 flex-1">
                                    <h4 class="line-clamp-2 font-bold leading-5 text-slate-800">
                                        {{ $berita->judul }}
                                    </h4>
                                    <p class="mt-2 text-xs text-slate-400">
                                        {{ $berita->created_at?->format('d M Y, H:i') ?? 'Tanggal tidak tersedia' }}
                                    </p>
                                </div>

                                <div class="flex shrink-0 items-center justify-between gap-3 sm:flex-col sm:items-end">
                                    @if($sudahTerbit)
                                        <span class="inline-flex items-center gap-1.5 rounded-full bg-emerald-50 px-3 py-1.5 text-xs font-bold text-emerald-700">
                                            <span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span>
                                            Terbit
                                        </span>
                                    @elseif($berita->status === 'published')
                                        <span class="inline-flex items-center gap-1.5 rounded-full bg-amber-50 px-3 py-1.5 text-xs font-bold text-amber-700">
                                            <span class="h-1.5 w-1.5 rounded-full bg-amber-500"></span>
                                            Terjadwal
                                        </span>
                                    @else
                                        <span class="inline-flex items-center gap-1.5 rounded-full bg-slate-100 px-3 py-1.5 text-xs font-bold text-slate-600">
                                            <span class="h-1.5 w-1.5 rounded-full bg-slate-400"></span>
                                            Draft
                                        </span>
                                    @endif

                                    <a href="{{ route('admin.berita.edit', $berita) }}"
                                       class="text-xs font-bold text-green-800 hover:text-green-950">
                                        Edit →
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="border-t border-slate-100 bg-slate-50/70 px-5 py-4 text-center sm:px-6">
                        <a href="{{ route('admin.berita.index') }}"
                           class="text-sm font-bold text-green-800 hover:text-green-950">
                            Lihat seluruh berita →
                        </a>
                    </div>
                @endif
            </section>

            <!-- POTENSI TERBARU -->
            <section class="overflow-hidden rounded-2xl border border-slate-100 bg-white shadow-sm">
                <div class="flex flex-wrap items-center justify-between gap-3 border-b border-slate-100 px-5 py-5 sm:px-6">
                    <div>
                        <h3 class="text-lg font-extrabold text-slate-900">Potensi Terbaru</h3>
                        <p class="mt-1 text-sm text-slate-500">
                            Lima data potensi desa terakhir yang tersimpan.
                        </p>
                    </div>

                    <a href="{{ route('admin.potensi.index') }}"
                       class="rounded-xl border border-slate-200 px-4 py-2.5 text-xs font-bold text-slate-700 transition hover:border-green-700 hover:text-green-800">
                        Kelola Potensi →
                    </a>
                </div>

                @if($potensiTerbaru->isEmpty())
                    <div class="px-6 py-14 text-center">
                        <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-2xl bg-lime-50 text-lime-800">
                            <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none"
                                 stroke="currentColor" stroke-width="1.6">
                                <path d="M3 20 9 8l4 7 3-5 5 10Z"/>
                                <path d="M3 20h18"/>
                            </svg>
                        </div>

                        <h4 class="mt-4 font-bold text-slate-800">Belum ada potensi desa</h4>

                        <p class="mt-2 text-sm text-slate-500">
                            Mulai tambahkan informasi potensi dan produk unggulan desa.
                        </p>

                        <a href="{{ route('admin.potensi.create') }}"
                           class="mt-5 inline-flex items-center gap-2 rounded-xl bg-green-800 px-5 py-3 text-sm font-bold text-white transition hover:bg-green-900">
                            + Tambah Potensi Pertama
                        </a>
                    </div>
                @else
                    <div class="divide-y divide-slate-100">
                        @foreach($potensiTerbaru as $potensi)
                            <div class="flex flex-col gap-4 px-5 py-4 transition hover:bg-slate-50/80 sm:flex-row sm:items-center sm:px-6">

                                <!-- FOTO POTENSI -->
                                <div class="h-20 w-full shrink-0 overflow-hidden rounded-xl bg-slate-100 sm:h-16 sm:w-24">
                                    @if($potensi->gambar)
                                        <img
                                            src="{{ asset('storage/' . $potensi->gambar) }}"
                                            alt="{{ $potensi->nama }}"
                                            class="h-full w-full object-cover"
                                            loading="lazy"
                                        >
                                    @else
                                        <div class="flex h-full w-full items-center justify-center text-lime-800">
                                            <svg class="h-8 w-8" viewBox="0 0 24 24" fill="none"
                                                 stroke="currentColor" stroke-width="1.5">
                                                <path d="M3 20 9 8l4 7 3-5 5 10Z"/>
                                                <path d="M3 20h18"/>
                                            </svg>
                                        </div>
                                    @endif
                                </div>

                                <!-- INFORMASI POTENSI -->
                                <div class="min-w-0 flex-1">
                                    <h4 class="line-clamp-2 font-bold leading-5 text-slate-800">
                                        {{ $potensi->nama }}
                                    </h4>

                                    <p class="mt-1 text-xs text-slate-500">
                                        {{ $potensi->kategori ?? 'Kategori belum diisi' }}
                                    </p>

                                    <p class="mt-2 text-xs text-slate-400">
                                        {{ $potensi->created_at?->format('d M Y, H:i') ?? 'Tanggal tidak tersedia' }}
                                    </p>
                                </div>

                                <!-- STATUS DAN AKSI -->
                                <div class="flex shrink-0 items-center justify-between gap-3 sm:flex-col sm:items-end">
                                    @if($potensi->status === 'published')
                                        <span class="inline-flex items-center gap-1.5 rounded-full bg-emerald-50 px-3 py-1.5 text-xs font-bold text-emerald-700">
                                            <span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span>
                                            Terbit
                                        </span>
                                    @else
                                        <span class="inline-flex items-center gap-1.5 rounded-full bg-slate-100 px-3 py-1.5 text-xs font-bold text-slate-600">
                                            <span class="h-1.5 w-1.5 rounded-full bg-slate-400"></span>
                                            Draft
                                        </span>
                                    @endif

                                    <a href="{{ route('admin.potensi.edit', $potensi) }}"
                                       class="text-xs font-bold text-green-800 hover:text-green-950">
                                        Edit →
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="border-t border-slate-100 bg-slate-50/70 px-5 py-4 text-center sm:px-6">
                        <a href="{{ route('admin.potensi.index') }}"
                           class="text-sm font-bold text-green-800 hover:text-green-950">
                            Lihat seluruh potensi →
                        </a>
                    </div>
                @endif
            </section>

            <!-- AKSES CEPAT -->
            <section>
                <div class="mb-5">
                    <h3 class="text-lg font-extrabold text-slate-900">Akses Cepat</h3>
                    <p class="mt-1 text-sm text-slate-500">Pilih tindakan yang ingin dilakukan.</p>
                </div>

                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 xl:grid-cols-4">

                    <!-- Tambah Berita -->
                    <a href="{{ route('admin.berita.create') }}"
                       class="action-card rounded-2xl border border-slate-100 bg-white p-5 shadow-sm">
                        <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-green-50 text-green-800">
                            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                                <circle cx="12" cy="12" r="9"/>
                                <path d="M12 8v8M8 12h8"/>
                            </svg>
                        </div>
                        <h4 class="mt-4 font-bold text-slate-900">Tambah Berita</h4>
                        <p class="mt-2 text-sm leading-5 text-slate-500">Buat informasi atau pengumuman baru.</p>
                        <p class="mt-4 text-sm font-bold text-green-800">Mulai menulis →</p>
                    </a>

                    <!-- Kelola Berita -->
                    <a href="{{ route('admin.berita.index') }}"
                       class="action-card rounded-2xl border border-slate-100 bg-white p-5 shadow-sm">
                        <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-blue-50 text-blue-800">
                            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                                <path d="M4 4h12a2 2 0 0 1 2 2v14H6a2 2 0 0 1-2-2Z"/>
                                <path d="M8 8h6M8 12h6M8 16h4"/>
                            </svg>
                        </div>
                        <h4 class="mt-4 font-bold text-slate-900">Kelola Berita</h4>
                        <p class="mt-2 text-sm leading-5 text-slate-500">Periksa, edit, dan kelola status berita.</p>
                        <p class="mt-4 text-sm font-bold text-blue-800">Buka daftar →</p>
                    </a>

                    <!-- Tambah Potensi -->
                    <a href="{{ route('admin.potensi.create') }}"
                       class="action-card rounded-2xl border border-slate-100 bg-white p-5 shadow-sm">
                        <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-emerald-50 text-emerald-800">
                            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                                <path d="M3 20 9 8l4 7 3-5 5 10Z"/>
                                <path d="M3 20h18M18 3v6M15 6h6"/>
                            </svg>
                        </div>
                        <h4 class="mt-4 font-bold text-slate-900">Tambah Potensi Desa</h4>
                        <p class="mt-2 text-sm leading-5 text-slate-500">Tambahkan produk unggulan, lokasi, atau potensi desa.</p>
                        <p class="mt-4 text-sm font-bold text-green-800">Tambah sekarang →</p>
                    </a>

                    <!-- Kelola Potensi -->
                    <a href="{{ route('admin.potensi.index') }}"
                       class="action-card rounded-2xl border border-slate-100 bg-white p-5 shadow-sm">
                        <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-lime-50 text-lime-800">
                            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                                <path d="M4 4h16v16H4z"/>
                                <path d="M8 8h8M8 12h8M8 16h5"/>
                            </svg>
                        </div>
                        <h4 class="mt-4 font-bold text-slate-900">Kelola Potensi Desa</h4>
                        <p class="mt-2 text-sm leading-5 text-slate-500">Edit informasi, ubah status, atau hapus data potensi.</p>
                        <p class="mt-4 text-sm font-bold text-lime-800">Buka daftar →</p>
                    </a>
                </div>
            </section>

            <!-- FOOTER -->
            <footer class="flex flex-col justify-between gap-2 border-t border-slate-200 pt-6 text-xs text-slate-400 sm:flex-row">
                <p>© {{ date('Y') }} Website Desa Mekarjaya</p>
                <p>Panel Administrasi Desa</p>
            </footer>

            <!-- LOGOUT MOBILE -->
            <div class="pb-2 lg:hidden">
                <a href="{{ route('logout') }}"
                   onclick="return confirm('Yakin ingin keluar dari dashboard?')"
                   class="flex items-center justify-center gap-2 rounded-xl border border-red-200 bg-white px-4 py-3 text-sm font-semibold text-red-700 transition hover:bg-red-50">
                    Keluar dari Akun
                </a>
            </div>

        </div>
    </main>
</div>

</body>
</html>
