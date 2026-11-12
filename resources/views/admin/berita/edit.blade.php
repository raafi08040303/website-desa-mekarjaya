
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Berita - Admin Desa Mekarjaya</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'DM Sans', sans-serif;
        }

        h1, h2, h3 {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        .field {
            width: 100%;
            border: 1px solid #d1d5db;
            border-radius: 12px;
            padding: 12px 14px;
            outline: none;
            background: white;
            transition: border-color .2s, box-shadow .2s;
        }

        .field:focus {
            border-color: #15803d;
            box-shadow: 0 0 0 3px rgb(21 128 61 / 10%);
        }
    </style>
</head>

<body class="min-h-screen bg-slate-50 text-slate-800">

    <header class="border-b border-slate-200 bg-white">
        <div class="mx-auto flex max-w-7xl flex-wrap items-center justify-between gap-4 px-5 py-4 lg:px-8">

            <div class="flex items-center gap-3">
                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-green-800 text-white">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 10.5 12 4l9 6.5M5.5 9.5V20h13V9.5M9 20v-6h6v6"/>
                    </svg>
                </div>

                <div>
                    <h1 class="text-base font-extrabold text-slate-900">Admin Desa Mekarjaya</h1>
                    <p class="text-xs text-slate-500">Sistem Pengelolaan Konten Desa</p>
                </div>
            </div>

            <a href="{{ route('admin') }}"
               class="inline-flex items-center gap-2 rounded-xl border border-slate-200 px-4 py-2.5 text-sm font-semibold text-slate-700 transition hover:border-green-700 hover:bg-green-50 hover:text-green-800">
                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m15 18-6-6 6-6M9 12h12"/>
                </svg>
                Dashboard
            </a>

        </div>
    </header>

    <main class="mx-auto max-w-5xl px-5 py-8 lg:px-8 lg:py-10">

        <div class="mb-7">

            <div class="mb-3 flex flex-wrap items-center gap-2 text-sm text-slate-500">
                <a href="{{ route('admin') }}" class="hover:text-green-800">Dashboard</a>
                <span>/</span>
                <a href="{{ route('admin.berita.index') }}" class="hover:text-green-800">Kelola Berita</a>
                <span>/</span>
                <span class="font-semibold text-green-800">Edit Berita</span>
            </div>

            <div class="flex flex-wrap items-end justify-between gap-4">

                <div>
                    <div class="mb-2 inline-flex items-center gap-2 rounded-full bg-amber-100 px-3 py-1 text-xs font-bold text-amber-800">
                        <span class="h-1.5 w-1.5 rounded-full bg-amber-500"></span>
                        PEMBARUAN KONTEN
                    </div>

                    <h2 class="text-2xl font-extrabold tracking-tight text-slate-900 sm:text-3xl">
                        Edit Berita
                    </h2>

                    <p class="mt-2 text-sm text-slate-500">
                        Perbarui informasi berita Desa Mekarjaya sesuai kebutuhan.
                    </p>
                </div>

                <a href="{{ route('admin.berita.index') }}"
                   class="text-sm font-semibold text-slate-600 transition hover:text-green-800">
                    Lihat daftar berita →
                </a>

            </div>
        </div>

        @if (session('success'))
            <div class="mb-6 rounded-xl border border-green-200 bg-green-50 p-4 text-sm font-medium text-green-800">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="mb-6 rounded-xl border border-red-200 bg-red-50 p-4 text-sm font-medium text-red-800">
                {{ session('error') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="mb-6 rounded-xl border border-red-200 bg-red-50 p-4 text-red-800">
                <p class="font-bold">Ada data yang perlu diperbaiki.</p>

                <ul class="mt-2 list-inside list-disc space-y-1 text-sm">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.berita.update', ['beritum' => $berita->getRouteKey()]) }}"
              method="POST"
              enctype="multipart/form-data">

            @csrf
            @method('PUT')

            <div class="grid gap-6 lg:grid-cols-3">

                <section class="space-y-6 lg:col-span-2">

                    <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm sm:p-7">

                        <div class="mb-6 border-b border-slate-100 pb-4">
                            <h3 class="font-bold text-slate-900">Informasi Berita</h3>
                            <p class="mt-1 text-sm text-slate-500">
                                Periksa dan perbarui judul serta isi berita.
                            </p>
                        </div>

                        <div class="space-y-5">

                            <div>
                                <label for="judul" class="mb-2 block text-sm font-bold text-slate-700">
                                    Judul Berita <span class="text-red-500">*</span>
                                </label>

                                <input
                                    type="text"
                                    id="judul"
                                    name="judul"
                                    value="{{ old('judul', $berita->judul) }}"
                                    required
                                    maxlength="255"
                                    class="field"
                                >

                                @error('judul')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="ringkasan" class="mb-2 block text-sm font-bold text-slate-700">
                                    Ringkasan Berita
                                </label>

                                <textarea
                                    id="ringkasan"
                                    name="ringkasan"
                                    rows="3"
                                    placeholder="Tuliskan gambaran singkat berita..."
                                    class="field resize-y"
                                >{{ old('ringkasan', $berita->ringkasan) }}</textarea>

                                @error('ringkasan')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="isi" class="mb-2 block text-sm font-bold text-slate-700">
                                    Isi Berita <span class="text-red-500">*</span>
                                </label>

                                <textarea
                                    id="isi"
                                    name="isi"
                                    rows="12"
                                    required
                                    class="field resize-y leading-7"
                                >{{ old('isi', $berita->isi) }}</textarea>

                                @error('isi')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                        </div>
                    </div>

                </section>

                <aside class="space-y-6">

                    <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">

                        <div class="mb-5">
                            <h3 class="font-bold text-slate-900">Publikasi</h3>
                            <p class="mt-1 text-sm text-slate-500">Atur status berita.</p>
                        </div>

                        <label for="status" class="mb-2 block text-sm font-bold text-slate-700">
                            Status Publikasi <span class="text-red-500">*</span>
                        </label>

                        <select id="status" name="status" required class="field">
                            <option value="draft" @selected(old('status', $berita->status) === 'draft')>
                                Draf
                            </option>

                            <option value="published" @selected(old('status', $berita->status) === 'published')>
                                Terbitkan
                            </option>
                        </select>

                        <div class="mt-3 rounded-xl bg-slate-50 p-3 text-xs leading-5 text-slate-600">
                            <p id="status-help">
                                Status saat ini:
                                {{ $berita->status === 'published' ? 'Terbitkan' : 'Draf' }}.
                            </p>
                        </div>

                        @error('status')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror

                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">

                        <div class="mb-4">
                            <h3 class="font-bold text-slate-900">Foto Berita</h3>
                            <p class="mt-1 text-sm text-slate-500">
                                Foto yang digunakan pada berita.
                            </p>
                        </div>

                        @if ($berita->gambar)

                            <div id="current-image-container" class="mb-4">
                                <img
                                    src="{{ asset('storage/' . $berita->gambar) }}"
                                    alt="Foto {{ $berita->judul }}"
                                    class="max-h-56 w-full rounded-xl border border-slate-200 object-cover"
                                >

                                <p class="mt-2 text-xs text-slate-500">Foto saat ini</p>
                            </div>

                        @else

                            <div id="current-image-container" class="mb-4 rounded-xl border border-dashed border-slate-300 bg-slate-50 p-6 text-center">
                                <svg class="mx-auto h-8 w-8 text-slate-400" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                    <rect x="3" y="3" width="18" height="18" rx="2"/>
                                    <circle cx="8.5" cy="8.5" r="1.5"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m21 15-5-5L5 21"/>
                                </svg>

                                <p class="mt-2 text-sm text-slate-500">Belum ada foto.</p>
                            </div>

                        @endif

                        <div id="preview-container" class="mb-4 hidden">
                            <img
                                id="preview-image"
                                src=""
                                alt="Pratinjau foto baru"
                                class="max-h-56 w-full rounded-xl border border-green-200 object-cover"
                            >

                            <p class="mt-2 text-xs font-semibold text-green-700">
                                Pratinjau foto pengganti
                            </p>

                            <button
                                type="button"
                                id="remove-image"
                                class="mt-2 text-xs font-semibold text-red-600 hover:text-red-800"
                            >
                                Batalkan foto pengganti
                            </button>
                        </div>

                        <label for="gambar" class="mb-2 block text-sm font-bold text-slate-700">
                            Ganti Foto (Opsional)
                        </label>

                        <input
                            type="file"
                            id="gambar"
                            name="gambar"
                            accept=".jpg,.jpeg,.png,.webp,image/jpeg,image/png,image/webp"
                            class="block w-full cursor-pointer rounded-xl border border-slate-200 bg-slate-50 p-3 text-sm file:mr-3 file:rounded-lg file:border-0 file:bg-green-100 file:px-3 file:py-2 file:font-semibold file:text-green-800 hover:file:bg-green-200"
                        >

                        <p class="mt-3 text-xs leading-5 text-slate-500">
                            JPG, JPEG, PNG, atau WEBP. Maksimal 10 MB.
                            Kosongkan jika foto tidak ingin diganti.
                        </p>

                        @error('gambar')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror

                    </div>

                    <div class="rounded-2xl border border-green-100 bg-green-50 p-5">
                        <p class="text-sm font-bold text-green-900">Catatan</p>
                        <p class="mt-1 text-xs leading-5 text-green-800">
                            Perubahan baru tersimpan setelah tombol Simpan Perubahan ditekan.
                        </p>
                    </div>

                </aside>

            </div>

            <div class="mt-6 flex flex-col-reverse justify-between gap-3 rounded-2xl border border-slate-200 bg-white p-4 shadow-sm sm:flex-row sm:items-center sm:px-6">

                <a
                    href="{{ route('admin') }}"
                    class="inline-flex items-center justify-center gap-2 rounded-xl px-4 py-3 text-sm font-semibold text-slate-600 transition hover:bg-slate-100"
                >
                    ← Kembali ke Dashboard
                </a>

                <div class="flex flex-col-reverse gap-3 sm:flex-row">

                    <a
                        href="{{ route('admin.berita.index') }}"
                        class="inline-flex items-center justify-center rounded-xl border border-slate-200 px-5 py-3 text-sm font-bold text-slate-700 transition hover:bg-slate-50"
                    >
                        Batal
                    </a>

                    <button
                        type="submit"
                        class="inline-flex items-center justify-center gap-2 rounded-xl bg-green-800 px-6 py-3 text-sm font-bold text-white shadow-sm transition hover:bg-green-900 focus:outline-none focus:ring-4 focus:ring-green-200"
                    >
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                        </svg>

                        Simpan Perubahan
                    </button>

                </div>
            </div>

        </form>

    </main>

    <script>
        const fileInput = document.getElementById('gambar');
        const previewContainer = document.getElementById('preview-container');
        const previewImage = document.getElementById('preview-image');
        const currentImageContainer = document.getElementById('current-image-container');
        const removeImage = document.getElementById('remove-image');

        let previewUrl = null;

        // Menampilkan pratinjau gambar baru.
        fileInput.addEventListener('change', function () {
            const file = this.files[0];

            if (previewUrl) {
                URL.revokeObjectURL(previewUrl);
                previewUrl = null;
            }

            if (!file) {
                previewContainer.classList.add('hidden');
                previewImage.src = '';

                if (currentImageContainer) {
                    currentImageContainer.classList.remove('hidden');
                }

                return;
            }

            const allowedTypes = [
                'image/jpeg',
                'image/png',
                'image/webp'
            ];

            if (!allowedTypes.includes(file.type)) {
                this.value = '';
                previewContainer.classList.add('hidden');

                if (currentImageContainer) {
                    currentImageContainer.classList.remove('hidden');
                }

                alert('Silakan pilih gambar JPG, JPEG, PNG, atau WEBP.');

                return;
            }

            if (file.size > 10 * 1024 * 1024) {
                this.value = '';
                previewContainer.classList.add('hidden');

                if (currentImageContainer) {
                    currentImageContainer.classList.remove('hidden');
                }

                alert('Ukuran gambar maksimal 10 MB.');

                return;
            }

            previewUrl = URL.createObjectURL(file);
            previewImage.src = previewUrl;

            previewContainer.classList.remove('hidden');

            if (currentImageContainer) {
                currentImageContainer.classList.add('hidden');
            }
        });

        // Membatalkan pemilihan gambar pengganti.
        if (removeImage) {
            removeImage.addEventListener('click', function () {
                fileInput.value = '';

                previewContainer.classList.add('hidden');
                previewImage.src = '';

                if (currentImageContainer) {
                    currentImageContainer.classList.remove('hidden');
                }

                if (previewUrl) {
                    URL.revokeObjectURL(previewUrl);
                    previewUrl = null;
                }
            });
        }

        // Memperbarui keterangan status publikasi.
        document.getElementById('status').addEventListener('change', function () {
            document.getElementById('status-help').textContent =
                this.value === 'published'
                    ? 'Berita dipilih untuk diterbitkan. Waktu publikasi mengikuti aturan di server.'
                    : 'Draf disimpan tanpa ditampilkan sebagai berita terbit.';
        });

        // Membersihkan URL pratinjau ketika halaman ditinggalkan.
        window.addEventListener('beforeunload', function () {
            if (previewUrl) {
                URL.revokeObjectURL(previewUrl);
            }
        });
    </script>

</body>
</html>
