
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Potensi Desa - Admin Desa Mekarjaya</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        body { font-family: 'DM Sans', sans-serif; }
        h1, h2, h3 { font-family: 'Plus Jakarta Sans', sans-serif; }

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

    {{-- HEADER --}}
    <header class="border-b border-slate-200 bg-white">
        <div class="mx-auto flex max-w-7xl flex-wrap items-center justify-between gap-4 px-5 py-4 lg:px-8">
            <div class="flex items-center gap-3">
                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-green-800 text-white">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor"
                         stroke-width="1.8" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M3 10.5 12 4l9 6.5M5.5 9.5V20h13V9.5M9 20v-6h6v6"/>
                    </svg>
                </div>
                <div>
                    <h1 class="text-base font-extrabold text-slate-900">Admin Desa Mekarjaya</h1>
                    <p class="text-xs text-slate-500">Sistem Pengelolaan Konten Desa</p>
                </div>
            </div>

            <a href="{{ route('admin') }}"
               class="inline-flex items-center gap-2 rounded-xl border border-slate-200 px-4 py-2.5 text-sm font-semibold text-slate-700 transition hover:border-green-700 hover:bg-green-50 hover:text-green-800">
                <svg class="h-4 w-4" fill="none" stroke="currentColor"
                     stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="m15 18-6-6 6-6M9 12h12"/>
                </svg>
                Dashboard
            </a>
        </div>
    </header>

    <main class="mx-auto max-w-7xl px-5 py-8 lg:px-8 lg:py-10">

        {{-- JUDUL DAN BREADCRUMB --}}
        <div class="mb-7">
            <div class="mb-3 flex flex-wrap items-center gap-2 text-sm text-slate-500">
                <a href="{{ route('admin') }}" class="hover:text-green-800">Dashboard</a>
                <span>/</span>
                <a href="{{ route('admin.potensi.index') }}" class="hover:text-green-800">Kelola Potensi</a>
                <span>/</span>
                <span class="font-semibold text-green-800">Edit Potensi</span>
            </div>

            <div class="flex flex-wrap items-end justify-between gap-4">
                <div>
                    <div class="mb-2 inline-flex items-center gap-2 rounded-full bg-amber-100 px-3 py-1 text-xs font-bold text-amber-800">
                        <span class="h-1.5 w-1.5 rounded-full bg-amber-500"></span>
                        PEMBARUAN KONTEN
                    </div>

                    <h2 class="text-2xl font-extrabold tracking-tight text-slate-900 sm:text-3xl">
                        Edit Potensi Desa
                    </h2>

                    <p class="mt-2 text-sm text-slate-500">
                        Perbarui informasi potensi dan produk unggulan Desa Mekarjaya.
                    </p>
                </div>

                <a href="{{ route('admin.potensi.index') }}"
                   class="text-sm font-semibold text-slate-600 transition hover:text-green-800">
                    Lihat daftar potensi →
                </a>
            </div>
        </div>

        {{-- NOTIFIKASI --}}
        @if (session('success'))
            <div class="mb-6 rounded-xl border border-green-200 bg-green-50 p-4 text-sm font-medium text-green-800">
                {{ session('success') }}
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

        {{-- FORM EDIT --}}
        <form action="{{ route('admin.potensi.update', $potensi) }}"
              method="POST"
              enctype="multipart/form-data">

            @csrf
            @method('PUT')

            <div class="grid gap-6 lg:grid-cols-3">

                {{-- INFORMASI POTENSI --}}
                <section class="space-y-6 lg:col-span-2">
                    <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm sm:p-7">

                        <div class="mb-6 border-b border-slate-100 pb-4">
                            <h3 class="font-bold text-slate-900">Informasi Potensi</h3>
                            <p class="mt-1 text-sm text-slate-500">
                                Periksa dan perbarui informasi potensi desa.
                            </p>
                        </div>

                        <div class="space-y-5">

                            {{-- NAMA --}}
                            <div>
                                <label for="nama" class="mb-2 block text-sm font-bold text-slate-700">
                                    Nama Potensi <span class="text-red-500">*</span>
                                </label>
                                <input type="text" id="nama" name="nama"
                                       value="{{ old('nama', $potensi->nama) }}"
                                       required maxlength="255" class="field"
                                       placeholder="Contoh: Produk Pertanian Unggulan">
                                @error('nama')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            {{-- KATEGORI --}}
                            <div>
                                <label for="kategori" class="mb-2 block text-sm font-bold text-slate-700">
                                    Kategori <span class="text-red-500">*</span>
                                </label>
                                <select id="kategori" name="kategori" required class="field">
                                    @php
                                        $kategoriPilihan = [
                                            'Pertanian', 'Peternakan', 'UMKM',
                                            'Wisata', 'Kerajinan', 'Budaya', 'Lainnya'
                                        ];
                                        $kategoriAktif = old('kategori', $potensi->kategori);
                                    @endphp

                                    @if (!in_array($kategoriAktif, $kategoriPilihan))
                                        <option value="{{ $kategoriAktif }}" selected>
                                            {{ $kategoriAktif }}
                                        </option>
                                    @endif

                                    @foreach ($kategoriPilihan as $kategori)
                                        <option value="{{ $kategori }}"
                                            @selected($kategoriAktif === $kategori)>
                                            {{ $kategori }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('kategori')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            {{-- DESKRIPSI --}}
                            <div>
                                <label for="deskripsi" class="mb-2 block text-sm font-bold text-slate-700">
                                    Deskripsi <span class="text-red-500">*</span>
                                </label>
                                <textarea id="deskripsi" name="deskripsi" rows="9" required
                                          class="field resize-y leading-7"
                                          placeholder="Jelaskan potensi atau produk unggulan desa...">{{ old('deskripsi', $potensi->deskripsi) }}</textarea>
                                @error('deskripsi')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            {{-- LOKASI --}}
                            <div>
                                <label for="lokasi" class="mb-2 block text-sm font-bold text-slate-700">
                                    Lokasi
                                </label>
                                <input type="text" id="lokasi" name="lokasi"
                                       value="{{ old('lokasi', $potensi->lokasi) }}"
                                       maxlength="255" class="field"
                                       placeholder="Contoh: Desa Mekarjaya">
                                @error('lokasi')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            {{-- KONTAK --}}
                            <div>
                                <label for="kontak" class="mb-2 block text-sm font-bold text-slate-700">
                                    Kontak Pengelola
                                </label>
                                <input type="text" id="kontak" name="kontak"
                                       value="{{ old('kontak', $potensi->kontak) }}"
                                       maxlength="255" class="field"
                                       placeholder="Nomor telepon atau kontak pengelola">
                                @error('kontak')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                        </div>
                    </div>
                </section>

                {{-- PANEL KANAN --}}
                <aside class="space-y-6">

                    {{-- PUBLIKASI --}}
                    <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
                        <div class="mb-5">
                            <h3 class="font-bold text-slate-900">Publikasi</h3>
                            <p class="mt-1 text-sm text-slate-500">Atur status potensi desa.</p>
                        </div>

                        <label for="status" class="mb-2 block text-sm font-bold text-slate-700">
                            Status Publikasi <span class="text-red-500">*</span>
                        </label>

                        <select id="status" name="status" required class="field">
                            <option value="draft" @selected(old('status', $potensi->status) === 'draft')>
                                Draf
                            </option>
                            <option value="published" @selected(old('status', $potensi->status) === 'published')>
                                Terbitkan
                            </option>
                        </select>

                        <div class="mt-3 rounded-xl bg-slate-50 p-3 text-xs leading-5 text-slate-600">
                            <p id="status-help">
                                Status saat ini:
                                {{ old('status', $potensi->status) === 'published' ? 'Terbitkan' : 'Draf' }}.
                            </p>
                        </div>

                        @error('status')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- FOTO POTENSI --}}
                    <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
                        <div class="mb-4">
                            <h3 class="font-bold text-slate-900">Foto Potensi</h3>
                            <p class="mt-1 text-sm text-slate-500">
                                Foto yang ditampilkan pada potensi desa.
                            </p>
                        </div>

                        <div id="current-image-container" class="mb-4">
                            @if ($potensi->gambar)
                                <img src="{{ asset('storage/' . $potensi->gambar) }}"
                                     alt="Foto {{ $potensi->nama }}"
                                     class="max-h-56 w-full rounded-xl border border-slate-200 object-cover">
                                <p class="mt-2 text-xs text-slate-500">Foto saat ini</p>
                            @else
                                <div class="rounded-xl border border-dashed border-slate-300 bg-slate-50 p-6 text-center">
                                    <p class="text-sm text-slate-500">Belum ada foto.</p>
                                </div>
                            @endif
                        </div>

                        <div id="preview-container" class="mb-4 hidden">
                            <img id="preview-image" src="" alt="Pratinjau foto baru"
                                 class="max-h-56 w-full rounded-xl border border-green-200 object-cover">
                            <p class="mt-2 text-xs font-semibold text-green-700">
                                Pratinjau foto pengganti
                            </p>
                            <button type="button" id="remove-image"
                                    class="mt-2 text-xs font-semibold text-red-600 hover:text-red-800">
                                Batalkan foto pengganti
                            </button>
                        </div>

                        <label for="gambar" class="mb-2 block text-sm font-bold text-slate-700">
                            Ganti Foto (Opsional)
                        </label>

                        <input type="file" id="gambar" name="gambar"
                               accept=".jpg,.jpeg,.png,.webp,image/jpeg,image/png,image/webp"
                               class="block w-full cursor-pointer rounded-xl border border-slate-200 bg-slate-50 p-3 text-sm file:mr-3 file:rounded-lg file:border-0 file:bg-green-100 file:px-3 file:py-2 file:font-semibold file:text-green-800 hover:file:bg-green-200">

                        <p class="mt-3 text-xs leading-5 text-slate-500">
                            JPG, JPEG, PNG, atau WEBP. Maksimal 2 MB.
                            Kosongkan jika foto tidak ingin diganti.
                        </p>

                        @error('gambar')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- CATATAN --}}
                    <div class="rounded-2xl border border-green-100 bg-green-50 p-5">
                        <p class="text-sm font-bold text-green-900">Catatan</p>
                        <p class="mt-1 text-xs leading-5 text-green-800">
                            Perubahan baru tersimpan setelah tombol Simpan Perubahan ditekan.
                        </p>
                    </div>
                </aside>
            </div>

            {{-- TOMBOL AKSI --}}
            <div class="mt-6 flex flex-col-reverse justify-between gap-3 rounded-2xl border border-slate-200 bg-white p-4 shadow-sm sm:flex-row sm:items-center sm:px-6">
                <a href="{{ route('admin.potensi.index') }}"
                   class="inline-flex items-center justify-center gap-2 rounded-xl px-4 py-3 text-sm font-semibold text-slate-600 transition hover:bg-slate-100">
                    ← Kembali ke Potensi
                </a>

                <div class="flex flex-col-reverse gap-3 sm:flex-row">
                    <a href="{{ route('admin.potensi.index') }}"
                       class="inline-flex items-center justify-center rounded-xl border border-slate-200 px-5 py-3 text-sm font-bold text-slate-700 transition hover:bg-slate-50">
                        Batal
                    </a>

                    <button type="submit"
                            class="inline-flex items-center justify-center gap-2 rounded-xl bg-green-800 px-6 py-3 text-sm font-bold text-white shadow-sm transition hover:bg-green-900 focus:outline-none focus:ring-4 focus:ring-green-200">
                        <svg class="h-4 w-4" fill="none" stroke="currentColor"
                             stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M5 13l4 4L19 7"/>
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
        const statusSelect = document.getElementById('status');
        const statusHelp = document.getElementById('status-help');

        let previewUrl = null;

        fileInput.addEventListener('change', function () {
            const file = this.files[0];

            if (previewUrl) URL.revokeObjectURL(previewUrl);
            previewUrl = null;

            if (!file) {
                previewContainer.classList.add('hidden');
                previewImage.src = '';
                currentImageContainer.classList.remove('hidden');
                return;
            }

            const allowedTypes = ['image/jpeg', 'image/png', 'image/webp'];

            if (!allowedTypes.includes(file.type)) {
                this.value = '';
                previewContainer.classList.add('hidden');
                alert('Pilih gambar JPG, JPEG, PNG, atau WEBP.');
                return;
            }

            if (file.size > 2 * 1024 * 1024) {
                this.value = '';
                previewContainer.classList.add('hidden');
                alert('Ukuran gambar maksimal 2 MB.');
                return;
            }

            previewUrl = URL.createObjectURL(file);
            previewImage.src = previewUrl;
            previewContainer.classList.remove('hidden');
            currentImageContainer.classList.add('hidden');
        });

        if (removeImage) {
            removeImage.addEventListener('click', function () {
                fileInput.value = '';
                previewContainer.classList.add('hidden');
                previewImage.src = '';
                currentImageContainer.classList.remove('hidden');

                if (previewUrl) URL.revokeObjectURL(previewUrl);
                previewUrl = null;
            });
        }

        statusSelect.addEventListener('change', function () {
            statusHelp.textContent = this.value === 'published'
                ? 'Potensi akan ditampilkan sebagai konten terbit.'
                : 'Potensi disimpan sebagai draf dan tidak ditampilkan sebagai konten terbit.';
        });
    </script>

</body>
</html>
