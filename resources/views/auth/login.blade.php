<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#14532d">
    <title>Login Admin | Desa Mekarjaya</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        * { box-sizing: border-box; }
        body { font-family: 'DM Sans', sans-serif; }
        h1, h2, h3 { font-family: 'Plus Jakarta Sans', sans-serif; }
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
        .field {
            transition: border-color .2s, box-shadow .2s;
        }
        .field:focus {
            outline: none;
            border-color: #15803d;
            box-shadow: 0 0 0 4px rgba(21,128,61,.10);
        }
        .login-btn { transition: all .2s ease; }
        .login-btn:hover { transform: translateY(-1px); }
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
                PORTAL ADMINISTRASI DESA
            </span>

            <h1 class="text-4xl font-extrabold leading-tight xl:text-5xl">
                Melayani dengan<br>
                <span class="text-emerald-300">sepenuh hati.</span>
            </h1>

            <p class="mt-6 max-w-md text-base leading-7 text-green-50/80">
                Kelola informasi, berita, dan potensi Desa Mekarjaya melalui satu portal yang terintegrasi.
            </p>

            <!-- Ilustrasi desa -->
            <div class="mt-10 overflow-hidden rounded-3xl border border-white/15 bg-white/5 p-3 backdrop-blur-sm">
                <svg viewBox="0 0 520 190" class="w-full" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="420" cy="38" r="20" fill="#fde68a" opacity=".95"/>
                    <path d="M0 110 Q90 35 180 100 T360 90 T520 80 V190 H0Z" fill="#4ade80" opacity=".45"/>
                    <path d="M0 130 Q100 75 210 125 T400 105 T520 115 V190 H0Z" fill="#86efac" opacity=".65"/>
                    <path d="M0 155 Q100 115 210 155 T410 135 T520 145 V190 H0Z" fill="#bbf7d0" opacity=".85"/>
                    <g transform="translate(168 69)">
                        <path d="M-8 44 42 6 92 44" fill="#fef3c7"/>
                        <path d="M2 39 42 10 82 39V85H2Z" fill="#f8fafc"/>
                        <path d="M-8 44 42 6 92 44" stroke="#b45309" stroke-width="5" fill="none" stroke-linejoin="round"/>
                        <path d="M34 85V57Q42 46 50 57V85" fill="#166534"/>
                        <rect x="10" y="48" width="15" height="14" rx="2" fill="#86efac"/>
                        <rect x="59" y="48" width="15" height="14" rx="2" fill="#86efac"/>
                    </g>
                    <g fill="#166534">
                        <rect x="85" y="115" width="5" height="36" rx="2"/>
                        <circle cx="87" cy="104" r="19"/>
                        <circle cx="73" cy="113" r="13"/>
                        <circle cx="101" cy="113" r="13"/>
                        <rect x="411" y="105" width="5" height="37" rx="2"/>
                        <circle cx="414" cy="95" r="20"/>
                        <circle cx="399" cy="105" r="13"/>
                        <circle cx="429" cy="105" r="13"/>
                    </g>
                    <path d="M0 179 Q150 160 260 178 T520 172" stroke="#f0fdf4" stroke-width="2" opacity=".8" fill="none"/>
                </svg>
            </div>
        </div>

        <div class="relative z-10 flex items-center justify-between gap-4 border-t border-white/15 pt-6 text-xs text-green-50/65">
            <span>© {{ date('Y') }} Pemerintah Desa Mekarjaya</span>
            <span>Portal Resmi Desa</span>
        </div>
    </section>

    <!-- PANEL KANAN -->
    <main class="flex min-h-screen items-center justify-center px-5 py-10 sm:px-10 lg:px-12">
        <div class="w-full max-w-md">

            <a href="{{ url('/') }}" class="mb-10 flex items-center gap-3 lg:hidden">
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

            <div class="mb-8">
                <div class="mb-5 flex h-14 w-14 items-center justify-center rounded-2xl bg-green-100 text-green-800">
                    <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                        <rect x="4" y="10" width="16" height="11" rx="2"/>
                        <path d="M8 10V7a4 4 0 0 1 8 0v3M12 14v3"/>
                    </svg>
                </div>
                <p class="mb-2 text-sm font-bold uppercase tracking-[.18em] text-green-700">Admin Desa</p>
                <h2 class="text-3xl font-extrabold tracking-tight text-slate-900 sm:text-4xl">Selamat datang!</h2>
                <p class="mt-3 leading-6 text-slate-500">
                    Silakan masuk ke akun Anda untuk mengelola website Desa Mekarjaya.
                </p>
            </div>

            @if(session('success'))
                <div role="status" class="mb-5 flex gap-3 rounded-xl border border-green-200 bg-green-50 p-4 text-sm text-green-800">
                    <span class="font-bold">✓</span>
                    <p>{{ session('success') }}</p>
                </div>
            @endif

            @if(session('error'))
                <div role="alert" class="mb-5 rounded-xl border border-red-200 bg-red-50 p-4 text-sm text-red-700">
                    {{ session('error') }}
                </div>
            @endif

            @if($errors->any())
                <div role="alert" class="mb-5 rounded-xl border border-red-200 bg-red-50 p-4 text-sm text-red-700">
                    <p class="mb-1 font-bold">Login belum berhasil</p>
                    <ul class="list-inside list-disc space-y-1">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ url('/login') }}" method="POST" class="space-y-5">
                @csrf

                <div>
                    <label for="email" class="mb-2 block text-sm font-semibold text-slate-700">Alamat email</label>
                    <div class="relative">
                        <svg class="pointer-events-none absolute left-4 top-1/2 h-5 w-5 -translate-y-1/2 text-slate-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                            <rect x="3" y="5" width="18" height="14" rx="2"/>
                            <path d="m4 7 8 6 8-6"/>
                        </svg>
                        <input
                            type="email"
                            id="email"
                            name="email"
                            value="{{ old('email') }}"
                            class="field w-full rounded-xl border border-slate-200 bg-white py-3.5 pl-12 pr-4 text-sm text-slate-800 placeholder:text-slate-400"
                            placeholder="nama@email.com"
                            autocomplete="email"
                            required
                            autofocus
                        >
                    </div>
                </div>

                <div>
                    <div class="mb-2 flex items-center justify-between gap-3">
                        <label for="password" class="text-sm font-semibold text-slate-700">Password</label>
                    </div>
                    <div class="relative">
                        <svg class="pointer-events-none absolute left-4 top-1/2 h-5 w-5 -translate-y-1/2 text-slate-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                            <rect x="4" y="10" width="16" height="11" rx="2"/>
                            <path d="M8 10V7a4 4 0 0 1 8 0v3"/>
                        </svg>
                        <input
                            type="password"
                            id="password"
                            name="password"
                            class="field w-full rounded-xl border border-slate-200 bg-white py-3.5 pl-12 pr-14 text-sm text-slate-800 placeholder:text-slate-400"
                            placeholder="Masukkan password"
                            autocomplete="current-password"
                            required
                        >
                        <button type="button" id="togglePassword" class="absolute right-3 top-1/2 -translate-y-1/2 rounded-lg p-2 text-slate-400 hover:bg-slate-100 hover:text-green-800" aria-label="Tampilkan password">
                            <svg id="eyeIcon" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                                <path d="M2 12s3.5-7 10-7 10 7 10 7-3.5 7-10 7S2 12 2 12Z"/>
                                <circle cx="12" cy="12" r="3"/>
                            </svg>
                        </button>
                    </div>
                </div>

                <button type="submit" class="login-btn flex w-full items-center justify-center gap-3 rounded-xl bg-green-800 px-5 py-4 text-sm font-bold text-white shadow-lg shadow-green-900/15 hover:bg-green-900 focus:outline-none focus:ring-4 focus:ring-green-200">
                    Masuk ke Dashboard
                    <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M5 12h14M13 6l6 6-6 6"/>
                    </svg>
                </button>
            </form>

            <div class="my-7 flex items-center gap-4">
                <div class="h-px flex-1 bg-slate-200"></div>
                <span class="text-xs text-slate-400">AKSES PORTAL</span>
                <div class="h-px flex-1 bg-slate-200"></div>
            </div>

            <p class="text-center text-sm text-slate-500">
                Belum punya akun?
                <a href="{{ url('/register') }}" class="font-bold text-green-800 hover:text-green-950 hover:underline">Daftar sekarang</a>
            </p>

            <a href="{{ url('/') }}" class="mt-7 flex items-center justify-center gap-2 text-sm text-slate-500 transition hover:text-green-800">
                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                    <path d="m15 18-6-6 6-6"/>
                </svg>
                Kembali ke website desa
            </a>

            <p class="mt-10 text-center text-xs leading-5 text-slate-400 lg:hidden">
                © {{ date('Y') }} Pemerintah Desa Mekarjaya
            </p>
        </div>
    </main>
</div>

<script>
    const togglePassword = document.getElementById('togglePassword');
    const passwordInput = document.getElementById('password');
    const eyeIcon = document.getElementById('eyeIcon');

    togglePassword.addEventListener('click', function () {
        const show = passwordInput.type === 'password';
        passwordInput.type = show ? 'text' : 'password';

        eyeIcon.innerHTML = show
            ? '<path d="M3 3l18 18M10.6 10.6a2 2 0 0 0 2.8 2.8"/><path d="M9.9 5.2A10.8 10.8 0 0 1 12 5c6.5 0 10 7 10 7a17 17 0 0 1-3.1 3.9M6.2 6.2C3.5 8 2 12 2 12s3.5 7 10 7c1.3 0 2.5-.3 3.5-.7"/>'
            : '<path d="M2 12s3.5-7 10-7 10 7 10 7-3.5 7-10 7S2 12 2 12Z"/><circle cx="12" cy="12" r="3"/>';

        togglePassword.setAttribute('aria-label', show ? 'Sembunyikan password' : 'Tampilkan password');
    });
</script>

</body>
</html>
