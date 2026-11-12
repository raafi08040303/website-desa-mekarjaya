<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Potensi - Admin Desa Mekarjaya</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        .sidebar-link, .potential-row { transition: all .2s ease; }
        .sidebar-link:hover { transform: translateX(3px); }
        .potential-row:hover { background-color: #f8faf9; }
        .pagination nav > div:first-child { display: none; }
        .pagination nav > div:last-child {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 12px;
        }
    </style>
</head>

<body class="min-h-screen bg-[#f5f7f6] text-slate-800">

<div class="min-h-screen lg:flex">

    {{-- SIDEBAR --}}
    <aside class="flex w-full flex-col bg-[#123d2c] text-white lg:fixed lg:inset-y-0 lg:left-0 lg:w-64">

        <div class="border-b border-white/10 px-6 py-6">
            <a href="{{ route('admin') }}" class="flex items-center gap-3">
                <div class="flex h-11 w-11 items-center justify-center rounded-2xl bg-white text-xl font-extrabold text-[#176344]">
                    M
                </div>
                <div>
                    <h1 class="text-sm font-extrabold tracking-wide">DESA MEKARJAYA</h1>
                    <p class="mt-1 text-xs text-green-200">Admin Dashboard</p>
                </div>
            </a>
        </div>

        <nav class="flex flex-wrap gap-2 p-4 lg:flex-col">
            <p class="mb-1 px-3 pt-2 text-[10px] font-bold uppercase tracking-[.2em] text-green-300">
                Menu Utama
            </p>

            <a href="{{ route('admin') }}"
               class="sidebar-link flex items-center gap-3 rounded-xl px-4 py-3 text-sm text-green-100 hover:bg-white/10">
                <span class="text-lg">▦</span> Dashboard
            </a>

            <a href="{{ route('admin.berita.index') }}"
               class="sidebar-link flex items-center gap-3 rounded-xl px-4 py-3 text-sm text-green-100 hover:bg-white/10">
                <span class="text-lg">▤</span> Kelola Berita
            </a>

            <a href="{{ route('admin.potensi.index') }}"
               class="sidebar-link flex items-center gap-3 rounded-xl bg-white/15 px-4 py-3 text-sm font-bold text-white ring-1 ring-white/10">
                <span class="text-lg">⌂</span>
                Kelola Potensi
                <span class="ml-auto h-2 w-2 rounded-full bg-emerald-300"></span>
            </a>

            <a href="{{ route('potensi') }}" target="_blank" rel="noopener noreferrer"
               class="sidebar-link flex items-center gap-3 rounded-xl px-4 py-3 text-sm text-green-100 hover:bg-white/10">
                <span class="text-lg">↗</span> Lihat Website
            </a>
        </nav>

        <div class="mt-auto hidden p-4 lg:block">
            <div class="rounded-2xl border border-white/10 bg-white/5 p-4">
                <p class="text-xs font-semibold text-green-200">Sistem Informasi Desa</p>
                <p class="mt-2 text-xs leading-5 text-green-100/70">
                    Kelola informasi dan potensi unggulan Desa Mekarjaya dalam satu tempat.
                </p>
            </div>
        </div>

        <div class="border-t border-white/10 px-6 py-4">
            <p class="text-xs text-green-200">Panel Administrator</p>
            <p class="mt-1 text-sm font-semibold">Desa Mekarjaya</p>
        </div>
    </aside>

    {{-- MAIN CONTENT --}}
    <main class="min-w-0 flex-1 lg:ml-64">

        {{-- TOPBAR --}}
        <header class="sticky top-0 z-20 border-b border-slate-200/80 bg-white/90 backdrop-blur">
            <div class="flex items-center justify-between gap-4 px-5 py-4 sm:px-8">
                <div>
                    <p class="text-xs font-medium text-slate-400">Administrator / Konten</p>
                    <h2 class="mt-1 text-sm font-extrabold text-slate-800 sm:text-base">
                        Manajemen Konten
                    </h2>
                </div>

                <a href="{{ route('admin') }}"
                   class="inline-flex items-center gap-2 rounded-xl border border-slate-200 bg-white px-3 py-2.5 text-xs font-bold text-slate-600 shadow-sm transition hover:border-green-300 hover:text-green-800 sm:px-4 sm:text-sm">
                    <span>←</span>
                    <span class="hidden sm:inline">Kembali ke Dashboard</span>
                    <span class="sm:hidden">Dashboard</span>
                </a>
            </div>
        </header>

        <div class="mx-auto max-w-[1500px] space-y-7 p-5 sm:p-8">

            {{-- PAGE TITLE --}}
            <section class="flex flex-col justify-between gap-5 md:flex-row md:items-end">
                <div>
                    <div class="mb-3 inline-flex items-center gap-2 rounded-full border border-green-100 bg-green-50 px-3 py-1.5 text-xs font-bold text-green-800">
                        <span class="h-2 w-2 rounded-full bg-green-600"></span>
                        Pengelolaan Potensi Desa
                    </div>

                    <h1 class="text-2xl font-extrabold tracking-tight text-slate-900 sm:text-3xl">
                        Kelola Potensi
                    </h1>

                    <p class="mt-2 max-w-2xl text-sm leading-6 text-slate-500">
                        Kelola, perbarui, dan publikasikan potensi serta produk unggulan Desa Mekarjaya.
                    </p>
                </div>

                <a href="{{ route('admin.potensi.create') }}"
                   class="inline-flex items-center justify-center gap-2 rounded-xl bg-[#176344] px-5 py-3.5 text-sm font-bold text-white shadow-lg shadow-green-900/10 transition hover:bg-[#104c33]">
                    <span class="text-xl leading-none">+</span>
                    Tambah Potensi Baru
                </a>
            </section>

            {{-- NOTIFICATIONS --}}
            @if (session('success'))
                <div class="flex items-start gap-3 rounded-2xl border border-green-200 bg-green-50 p-4 text-green-800">
                    <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-green-100 font-bold">✓</span>
                    <div>
                        <p class="text-sm font-bold">Berhasil!</p>
                        <p class="mt-1 text-sm">{{ session('success') }}</p>
                    </div>
                </div>
            @endif

            @if (session('error'))
                <div class="rounded-2xl border border-red-200 bg-red-50 p-4 text-sm text-red-700">
                    {{ session('error') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="rounded-2xl border border-red-200 bg-red-50 p-4 text-red-700">
                    <p class="font-bold">Terjadi kesalahan</p>
                    <ul class="mt-2 list-inside list-disc text-sm">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{-- STATISTICS --}}
            <section class="grid grid-cols-1 gap-4 sm:grid-cols-2 xl:grid-cols-3">

                <div class="rounded-2xl border border-slate-200/80 bg-white p-5 shadow-sm">
                    <div class="flex items-start justify-between">
                        <div>
                            <p class="text-sm font-medium text-slate-500">Total Potensi</p>
                            <h3 class="mt-3 text-3xl font-extrabold tracking-tight text-slate-900">
                                {{ number_format($totalPotensi) }}
                            </h3>
                        </div>
                        <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-slate-100 text-xl">⌂</div>
                    </div>
                    <p class="mt-4 text-xs text-slate-400">Seluruh data potensi desa</p>
                </div>

                <div class="rounded-2xl border border-slate-200/80 bg-white p-5 shadow-sm">
                    <div class="flex items-start justify-between">
                        <div>
                            <p class="text-sm font-medium text-slate-500">Sudah Terbit</p>
                            <h3 class="mt-3 text-3xl font-extrabold tracking-tight text-green-700">
                                {{ number_format($totalTerbit) }}
                            </h3>
                        </div>
                        <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-green-50 text-xl">✓</div>
                    </div>
                    <p class="mt-4 text-xs text-slate-400">Tampil sebagai konten publik</p>
                </div>

                <div class="rounded-2xl border border-slate-200/80 bg-white p-5 shadow-sm">
                    <div class="flex items-start justify-between">
                        <div>
                            <p class="text-sm font-medium text-slate-500">Potensi Draf</p>
                            <h3 class="mt-3 text-3xl font-extrabold tracking-tight text-amber-600">
                                {{ number_format($totalDraft) }}
                            </h3>
                        </div>
                        <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-amber-50 text-xl">✎</div>
                    </div>
                    <p class="mt-4 text-xs text-slate-400">Belum dipublikasikan</p>
                </div>

            </section>

            {{-- TABLE --}}
            <section class="overflow-hidden rounded-2xl border border-slate-200/80 bg-white shadow-sm">

                {{-- SEARCH AND FILTER --}}
                <div class="flex flex-col justify-between gap-4 border-b border-slate-100 p-5 sm:p-6 lg:flex-row lg:items-center">
                    <div>
                        <h2 class="text-lg font-extrabold text-slate-900">Daftar Potensi</h2>
                        <p class="mt-1 text-sm text-slate-500">
                            Periksa status dan kelola potensi yang tersimpan.
                        </p>
                    </div>

                    <form action="{{ route('admin.potensi.index') }}" method="GET"
                          class="flex w-full flex-col gap-2 sm:flex-row lg:w-auto">

                        <input type="search" name="search" value="{{ request('search') }}"
                               placeholder="Cari nama potensi..."
                               class="w-full rounded-xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm outline-none transition focus:border-green-500 focus:bg-white focus:ring-4 focus:ring-green-500/10 lg:w-56">

                        <select name="kategori"
                                class="rounded-xl border border-slate-200 bg-slate-50 px-3 py-3 text-sm outline-none focus:border-green-500">
                            <option value="">Semua Kategori</option>
                            @foreach (['Pertanian', 'Peternakan', 'UMKM', 'Wisata', 'Kerajinan', 'Budaya', 'Lainnya'] as $kategori)
                                <option value="{{ $kategori }}" @selected(request('kategori') === $kategori)>
                                    {{ $kategori }}
                                </option>
                            @endforeach
                        </select>

                        <select name="status"
                                class="rounded-xl border border-slate-200 bg-slate-50 px-3 py-3 text-sm outline-none focus:border-green-500">
                            <option value="">Semua Status</option>
                            <option value="published" @selected(request('status') === 'published')>Terbit</option>
                            <option value="draft" @selected(request('status') === 'draft')>Draf</option>
                        </select>

                        <button type="submit"
                                class="rounded-xl bg-slate-800 px-4 py-3 text-sm font-bold text-white transition hover:bg-slate-700">
                            Cari
                        </button>

                        @if (request()->filled('search') || request()->filled('kategori') || request()->filled('status'))
                            <a href="{{ route('admin.potensi.index') }}"
                               class="rounded-xl border border-slate-200 px-4 py-3 text-center text-sm font-bold text-slate-600 transition hover:bg-slate-50">
                                Reset
                            </a>
                        @endif
                    </form>
                </div>

                {{-- TABLE CONTENT --}}
                <div class="overflow-x-auto">
                    <table class="w-full min-w-[850px] text-left">
                        <thead class="bg-slate-50">
                            <tr class="text-[11px] font-bold uppercase tracking-wider text-slate-500">
                                <th class="px-6 py-4">Potensi</th>
                                <th class="px-5 py-4">Kategori</th>
                                <th class="px-5 py-4">Status</th>
                                <th class="px-5 py-4">Tanggal</th>
                                <th class="px-6 py-4 text-right">Tindakan</th>
                            </tr>
                        </thead>

                        <tbody class="divide-y divide-slate-100">
                            @forelse ($potensis as $potensi)
                                <tr class="potential-row">

                                    <td class="px-6 py-5">
                                        <div class="flex items-center gap-4">
                                            <div class="h-[68px] w-[88px] shrink-0 overflow-hidden rounded-xl bg-slate-100">
                                                @if ($potensi->gambar)
                                                    <img src="{{ asset('storage/' . $potensi->gambar) }}"
                                                         alt="{{ $potensi->nama }}"
                                                         class="h-full w-full object-cover"
                                                         loading="lazy">
                                                @else
                                                    <div class="flex h-full w-full items-center justify-center bg-gradient-to-br from-green-50 to-green-100 text-2xl">🌱</div>
                                                @endif
                                            </div>

                                            <div class="min-w-0 max-w-lg">
                                                <p class="font-bold leading-5 text-slate-800">
                                                    {{ $potensi->nama }}
                                                </p>
                                                <p class="mt-1.5 line-clamp-2 text-xs leading-5 text-slate-500">
                                                    {{ \Illuminate\Support\Str::limit($potensi->deskripsi, 100) }}
                                                </p>
                                                @if ($potensi->lokasi)
                                                    <p class="mt-1 text-xs text-slate-400">⌖ {{ $potensi->lokasi }}</p>
                                                @endif
                                            </div>
                                        </div>
                                    </td>

                                    <td class="px-5 py-5">
                                        <span class="inline-flex rounded-full bg-slate-100 px-3 py-1.5 text-xs font-bold text-slate-600">
                                            {{ $potensi->kategori }}
                                        </span>
                                    </td>

                                    <td class="px-5 py-5">
                                        @if ($potensi->status === 'published')
                                            <span class="inline-flex items-center gap-1.5 rounded-full bg-green-50 px-3 py-1.5 text-xs font-bold text-green-700 ring-1 ring-inset ring-green-600/15">
                                                <span class="h-1.5 w-1.5 rounded-full bg-green-600"></span>
                                                Terbit
                                            </span>
                                        @else
                                            <span class="inline-flex items-center gap-1.5 rounded-full bg-amber-50 px-3 py-1.5 text-xs font-bold text-amber-700 ring-1 ring-inset ring-amber-600/15">
                                                <span class="h-1.5 w-1.5 rounded-full bg-amber-500"></span>
                                                Draf
                                            </span>
                                        @endif
                                    </td>

                                    <td class="px-5 py-5">
                                        <p class="text-sm font-semibold text-slate-700">
                                            {{ $potensi->created_at?->format('d M Y') ?? '-' }}
                                        </p>
                                        <p class="mt-1 text-xs text-slate-400">
                                            {{ $potensi->created_at?->format('H:i') ?? '' }}
                                        </p>
                                    </td>

                                    <td class="px-6 py-5">
                                        <div class="flex items-center justify-end gap-2">
                                            <a href="{{ route('admin.potensi.edit', $potensi) }}"
                                               title="Edit potensi"
                                               class="inline-flex items-center gap-2 rounded-lg border border-slate-200 px-3 py-2 text-xs font-bold text-slate-600 transition hover:border-green-200 hover:bg-green-50 hover:text-green-800">
                                                <span>✎</span> Edit
                                            </a>

                                            <form action="{{ route('admin.potensi.destroy', $potensi) }}"
                                                  method="POST"
                                                  onsubmit="return confirm('Yakin ingin menghapus potensi ini? Data yang dihapus tidak dapat dikembalikan.')">
                                                @csrf
                                                @method('DELETE')

                                                <button type="submit"
                                                        title="Hapus potensi"
                                                        class="inline-flex items-center gap-2 rounded-lg border border-red-100 px-3 py-2 text-xs font-bold text-red-600 transition hover:border-red-200 hover:bg-red-50">
                                                    <span>×</span> Hapus
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="px-6 py-20 text-center">
                                        <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-2xl bg-green-50 text-3xl">🌱</div>

                                        <h3 class="mt-5 font-extrabold text-slate-800">Belum ada potensi</h3>

                                        <p class="mx-auto mt-2 max-w-sm text-sm leading-6 text-slate-500">
                                            @if (request()->filled('search') || request()->filled('kategori') || request()->filled('status'))
                                                Tidak ada potensi yang sesuai dengan pencarian atau filter yang dipilih.
                                            @else
                                                Mulai isi informasi desa dengan menambahkan potensi atau produk unggulan pertama.
                                            @endif
                                        </p>

                                        @if (request()->filled('search') || request()->filled('kategori') || request()->filled('status'))
                                            <a href="{{ route('admin.potensi.index') }}"
                                               class="mt-5 inline-flex items-center gap-2 rounded-xl border border-slate-200 px-5 py-3 text-sm font-bold text-slate-600 hover:bg-slate-50">
                                                Reset Pencarian
                                            </a>
                                        @else
                                            <a href="{{ route('admin.potensi.create') }}"
                                               class="mt-5 inline-flex items-center gap-2 rounded-xl bg-[#176344] px-5 py-3 text-sm font-bold text-white hover:bg-[#104c33]">
                                                + Tambah Potensi Pertama
                                            </a>
                                        @endif
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                {{-- PAGINATION --}}
                <div class="flex flex-col justify-between gap-3 border-t border-slate-100 px-5 py-4 sm:flex-row sm:items-center sm:px-6">
                    <p class="text-xs text-slate-500">
                        Menampilkan
                        <span class="font-bold text-slate-700">{{ $potensis->firstItem() ?? 0 }}–{{ $potensis->lastItem() ?? 0 }}</span>
                        dari
                        <span class="font-bold text-slate-700">{{ $potensis->total() }}</span>
                        potensi
                    </p>

                    <div class="pagination">
                        {{ $potensis->links() }}
                    </div>
                </div>

            </section>

            <footer class="pb-3 text-center text-xs text-slate-400">
                © {{ date('Y') }} Pemerintah Desa Mekarjaya · Panel Administrasi
            </footer>

        </div>
    </main>
</div>

</body>
</html>
```