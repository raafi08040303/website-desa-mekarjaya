<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berhasil - Admin Desa Mekarjaya</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'DM Sans', sans-serif; }
        h1, h2 { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="flex min-h-screen items-center justify-center bg-slate-50 px-5 py-10 text-slate-800">

    <main class="w-full max-w-xl rounded-3xl border border-slate-200 bg-white p-7 text-center shadow-sm sm:p-10">

        <div class="mx-auto flex h-20 w-20 items-center justify-center rounded-full bg-green-100 text-green-700">
            <svg class="h-10 w-10" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="m5 12 4 4L19 6"/>
            </svg>
        </div>

        <p class="mt-6 text-xs font-bold uppercase tracking-widest text-green-700">
            Admin Desa Mekarjaya
        </p>

        <h1 class="mt-3 text-2xl font-extrabold text-slate-900 sm:text-3xl">
            Berhasil!
        </h1>

        <p class="mt-3 text-slate-600">
            {{ session('success', 'Perubahan berita berhasil disimpan.') }}
        </p>

        <p class="mt-2 text-sm leading-6 text-slate-500">
            Silakan pilih halaman yang ingin kamu buka selanjutnya.
        </p>

        <div class="mt-8 grid gap-3 sm:grid-cols-2">
            <a href="{{ route('admin') }}"
               class="flex items-center justify-center gap-2 rounded-xl bg-green-800 px-5 py-3.5 text-sm font-bold text-white transition hover:bg-green-900">
                <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                    <rect x="3" y="3" width="7" height="7" rx="1"/>
                    <rect x="14" y="3" width="7" height="7" rx="1"/>
                    <rect x="14" y="14" width="7" height="7" rx="1"/>
                    <rect x="3" y="14" width="7" height="7" rx="1"/>
                </svg>
                Ke Dashboard
            </a>

            <a href="{{ route('admin.berita.index') }}"
               class="flex items-center justify-center gap-2 rounded-xl border border-slate-200 px-5 py-3.5 text-sm font-bold text-slate-700 transition hover:bg-slate-50">
                <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8 6h13M8 12h13M8 18h13M3 6h.01M3 12h.01M3 18h.01"/>
                </svg>
                Kelola Berita
            </a>
        </div>

        <p class="mt-7 text-xs text-slate-400">
            Website Resmi Desa Mekarjaya
        </p>
    </main>

</body>
</html>
