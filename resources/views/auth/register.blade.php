<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#14532d">
    <title>Daftar Akun | Desa Mekarjaya</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        * { box-sizing: border-box; }
        body { font-family: 'DM Sans', sans-serif; }
        h1, h2 { font-family: 'Plus Jakarta Sans', sans-serif; }
        .auth-bg {
            background:
                radial-gradient(ellipse at 10% 10%, rgba(134,239,172,.18), transparent 40%),
                radial-gradient(ellipse at 90% 90%, rgba(250,204,21,.12), transparent 35%),
                linear-gradient(145deg, #052e16 0%, #14532d 50%, #166534 100%);
        }
        .pattern {
            background-image: radial-gradient(rgba(255,255,255,.13) 1px, transparent 1px);
            background-size: 23px 23px;
        }
        .field { transition: border-color .2s, box-shadow .2s; }
        .field:focus {
            outline: none;
            border-color: #15803d;
            box-shadow: 0 0 0 4px rgba(21,128,61,.10);
        }
        .register-btn { transition: all .2s ease; }
        .register-btn:hover { transform: translateY(-1px); }
    </style>
</head>
<body class="min-h-screen bg-[#f3f6f2] text-slate-800">

<div class="min-h-screen grid lg:grid-cols-2">

    <!-- PANEL KIRI -->
    <section class="auth-bg relative hidden lg:flex flex-col justify-between overflow-hidden p-12 xl:p-16 text-white">
        <div class="pattern absolute inset-0 opacity-60"></div>
        <div class="absolute -right-28 top-24 h-80 w-80 rounded-full border border-white/10"></div>
        <div class="absolute -right-12 top-40 h-48 w-48 rounded-full border border-white/10"></div>

        <a href="{{ url('/') }}" class="relative z-10 flex items-center gap-3 w-fit">
            <div class="flex h-12 w-12 items-center justify-center rounded-2xl border border-white/20 bg-white/10">
                <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                    <path d="M3 11 12 4l9 7"/>
                    <path d="M5 10v10h14V10M9 20v-6h6v6"/>
                    <path d="M2 21h20"/>
                </svg>
            </div>
            <div>
                <p class="text-lg font-bold tracking-wide">Desa Mekarjaya</p>
                <p class="text-xs text-green-100/75">Portal Informasi Desa</p>
            </div>
        </a>

        <div class="relative z-10 my-12 max-w-xl">
            <span class="mb-6 inline-flex items-center gap-2 rounded-full border border-white/20 bg-white/10 px-4 py-2 text-xs font-semibold tracking-wide text-green-50">
                <span class="h-2 w-2 rounded-full bg-emerald-300"></span>
                BERGABUNG BERSAMA KAMI
            </span>

            <h1 class="text-4xl font-extrabold leading-tight xl:text-5xl">
                Satu langkah<br>
                <span class="text-emerald-300">untuk terhubung.</span>
            </h1>

            <p class="mt-6 max-w-md text-base leading-7 text-green-50/80">
                Buat akun untuk mengakses portal Desa Mekarjaya. Isi data dengan benar agar proses pendaftaran berjalan lancar.
            </p>

            <div class="mt-10 space-y-4">
                <div class="flex items-center gap-4 rounded-2xl border border-white/15 bg-white/5 p-4">
                    <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-white/10">
                        <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                            <path d="M12 22s8-4 8-11V5l-8-3-8 3v6c0 7 8 11 8 11Z"/>
                            <path d="m9 12 2 2 4-4"/>
                        </svg>
                    </div>
                    <div>
                        <p class="font-bold">Akses yang terkelola</p>
                        <p class="mt-1 text-sm text-green-50/70">Gunakan akun sesuai kebutuhan dan hak akses.</p>
                    </div>
                </div>

                <div class="flex items-center gap-4 rounded-2xl border border-white/15 bg-white/5 p-4">
                    <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-white/10">
                        <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                            <rect x="3" y="4" width="18" height="16" rx="2"/>
                            <path d="M3 9h18M8 4v5M8 13h3M8 16h7"/>
                        </svg>
                    </div>
                    <div>
                        <p class="font-bold">Informasi dalam satu portal</p>
                        <p class="mt-1 text-sm text-green-50/70">Terhubung dengan informasi dan layanan desa.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="relative z-10 border-t border-white/15 pt-6 text-xs text-green-50/65">
            © {{ date('Y') }} Pemerintah Desa Mekarjaya
        </div>
    </section>

    <!-- PANEL KANAN -->
    <main class="flex min-h-screen items-center justify-center px-5 py-10 sm:px-10 lg:px-12">
        <div class="w-full max-w-md">

            <a href="{{ url('/') }}" class="mb-8 flex items-center gap-3 lg:hidden">
                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-green-800 text-white">
                    <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                        <path d="M3 11 12 4l9 7M5 10v10h14V10M9 20v-6h6v6"/>
                    </svg>
                </div>
                <div>
                    <p class="font-bold text-green-950">Desa Mekarjaya</p>
                    <p class="text-xs text-slate-500">Portal Informasi Desa</p>
                </div>
            </a>

            <div class="mb-7">
                <div class="mb-5 flex h-14 w-14 items-center justify-center rounded-2xl bg-green-100 text-green-800">
                    <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                        <path d="M16 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                        <circle cx="10" cy="7" r="4"/>
                        <path d="M20 8v6M17 11h6"/>
                    </svg>
                </div>
                <p class="mb-2 text-sm font-bold uppercase tracking-[.18em] text-green-700">Pendaftaran Akun</p>
                <h2 class="text-3xl font-extrabold tracking-tight text-slate-900 sm:text-4xl">Buat akun baru</h2>
                <p class="mt-3 leading-6 text-slate-500">Lengkapi informasi berikut untuk mendaftarkan akun Anda.</p>
            </div>

            @if(session('success'))
                <div role="status" class="mb-5 rounded-xl border border-green-200 bg-green-50 p-4 text-sm text-green-800">
                    {{ session('success') }}
                </div>
            @endif

            @if($errors->any())
                <div role="alert" class="mb-5 rounded-xl border border-red-200 bg-red-50 p-4 text-sm text-red-700">
                    <p class="mb-1 font-bold">Pendaftaran belum berhasil</p>
                    <ul class="list-inside list-disc space-y-1">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ url('/register') }}" method="POST" class="space-y-4">
                @csrf

                <div>
                    <label for="name" class="mb-2 block text-sm font-semibold text-slate-700">Nama lengkap</label>
                    <div class="relative">
                        <svg class="pointer-events-none absolute left-4 top-1/2 h-5 w-5 -translate-y-1/2 text-slate-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                            <circle cx="12" cy="8" r="4"/>
                            <path d="M4 21v-2a8 8 0 0 1 16 0v2"/>
                        </svg>
                        <input type="text" id="name" name="name" value="{{ old('name') }}" class="field w-full rounded-xl border border-slate-200 bg-white py-3.5 pl-12 pr-4 text-sm placeholder:text-slate-400" placeholder="Masukkan nama lengkap" autocomplete="name" required>
                    </div>
                </div>

                <div>
                    <label for="email" class="mb-2 block text-sm font-semibold text-slate-700">Alamat email</label>
                    <div class="relative">
                        <svg class="pointer-events-none absolute left-4 top-1/2 h-5 w-5 -translate-y-1/2 text-slate-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                            <rect x="3" y="5" width="18" height="14" rx="2"/>
                            <path d="m4 7 8 6 8-6"/>
                        </svg>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" class="field w-full rounded-xl border border-slate-200 bg-white py-3.5 pl-12 pr-4 text-sm placeholder:text-slate-400" placeholder="nama@email.com" autocomplete="email" required>
                    </div>
                </div>

                <div>
                    <label for="password" class="mb-2 block text-sm font-semibold text-slate-700">Password</label>
                    <div class="relative">
                        <svg class="pointer-events-none absolute left-4 top-1/2 h-5 w-5 -translate-y-1/2 text-slate-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                            <rect x="4" y="10" width="16" height="11" rx="2"/>
                            <path d="M8 10V7a4 4 0 0 1 8 0v3"/>
                        </svg>
                        <input type="password" id="password" name="password" class="field w-full rounded-xl border border-slate-200 bg-white py-3.5 pl-12 pr-14 text-sm placeholder:text-slate-400" placeholder="Minimal 8 karakter" autocomplete="new-password" minlength="8" required>
                        <button type="button" data-toggle="password" class="absolute right-3 top-1/2 -translate-y-1/2 rounded-lg p-2 text-slate-400 hover:bg-slate-100 hover:text-green-800" aria-label="Tampilkan password">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                                <path d="M2 12s3.5-7 10-7 10 7 10 7-3.5 7-10 7S2 12 2 12Z"/>
                                <circle cx="12" cy="12" r="3"/>
                            </svg>
                        </button>
                    </div>
                    <p class="mt-2 text-xs text-slate-400">Gunakan password minimal 8 karakter.</p>
                </div>

                <div>
                    <label for="password_confirmation" class="mb-2 block text-sm font-semibold text-slate-700">Konfirmasi password</label>
                    <div class="relative">
                        <svg class="pointer-events-none absolute left-4 top-1/2 h-5 w-5 -translate-y-1/2 text-slate-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                            <rect x="4" y="10" width="16" height="11" rx="2"/>
                            <path d="M8 10V7a4 4 0 0 1 8 0v3"/>
                        </svg>
                        <input type="password" id="password_confirmation" name="password_confirmation" class="field w-full rounded-xl border border-slate-200 bg-white py-3.5 pl-12 pr-14 text-sm placeholder:text-slate-400" placeholder="Ulangi password" autocomplete="new-password" minlength="8" required>
                        <button type="button" data-toggle="password_confirmation" class="absolute right-3 top-1/2 -translate-y-1/2 rounded-lg p-2 text-slate-400 hover:bg-slate-100 hover:text-green-800" aria-label="Tampilkan konfirmasi password">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                                <path d="M2 12s3.5-7 10-7 10 7 10 7-3.5 7-10 7S2 12 2 12Z"/>
                                <circle cx="12" cy="12" r="3"/>
                            </svg>
                        </button>
                    </div>
                </div>

                <button type="submit" class="register-btn flex w-full items-center justify-center gap-3 rounded-xl bg-green-800 px-5 py-4 text-sm font-bold text-white shadow-lg shadow-green-900/15 hover:bg-green-900 focus:outline-none focus:ring-4 focus:ring-green-200">
                    Buat Akun
                    <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M5 12h14M13 6l6 6-6 6"/>
                    </svg>
                </button>
            </form>

            <p class="mt-7 text-center text-sm text-slate-500">
                Sudah punya akun?
                <a href="{{ url('/login') }}" class="font-bold text-green-800 hover:text-green-950 hover:underline">Masuk di sini</a>
            </p>

            <a href="{{ url('/') }}" class="mt-6 flex items-center justify-center gap-2 text-sm text-slate-500 transition hover:text-green-800">
                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                    <path d="m15 18-6-6 6-6"/>
                </svg>
                Kembali ke website desa
            </a>

            <p class="mt-8 text-center text-xs text-slate-400">© {{ date('Y') }} Pemerintah Desa Mekarjaya</p>
        </div>
    </main>
</div>

<script>
    document.querySelectorAll('[data-toggle]').forEach(function (button) {
        button.addEventListener('click', function () {
            const input = document.getElementById(button.dataset.toggle);
            input.type = input.type === 'password' ? 'text' : 'password';
        });
    });
</script>

</body>
</html>
