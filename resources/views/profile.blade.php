
<x-layouts.main title="Profil Desa - Desa Mekarjaya">

    {{-- ======================================================
         HERO PROFIL
    ======================================================= --}}
    <section class="relative overflow-hidden bg-green-950">
        <div class="absolute inset-0">
            <img
                    src="{{ asset('images/poto_desa.png') }}"
                    alt="Foto lingkungan Desa Mekarjaya"
                    loading="lazy"
                    class="h-80 w-full rounded-3xl object-cover shadow-xl md:h-[470px]"
                >
            <div class="absolute inset-0 bg-gradient-to-r from-green-950 via-green-950/80 to-green-900/40"></div>
        </div>

        <div class="relative mx-auto max-w-7xl px-6 py-16 md:py-20">
            <div class="max-w-3xl">
                <a href="{{ url('/') }}"
                   class="mb-6 inline-flex items-center gap-2 text-sm text-green-200 transition hover:text-white">
                    <span aria-hidden="true">←</span>
                    Kembali ke Beranda
                </a>

                <p class="mb-3 text-sm font-bold uppercase tracking-widest text-lime-300">
                    Mengenal Desa Kami
                </p>

                <h1 class="mb-5 text-4xl font-extrabold leading-tight text-white md:text-6xl">
                    Profil
                    <span class="text-lime-300">Desa Mekarjaya</span>
                </h1>

                <p class="max-w-2xl text-base leading-relaxed text-green-50/90 md:text-lg">
                    Mengenal lebih dekat Desa Mekarjaya melalui informasi
                    umum, sejarah, kondisi geografis, demografi, fasilitas,
                    serta struktur pemerintahan desa.
                </p>
            </div>
        </div>
    </section>


    {{-- ======================================================
         TENTANG DESA
    ======================================================= --}}
    <section class="bg-white py-12 md:py-16">
        <div class="mx-auto max-w-7xl px-6">
            <div class="grid grid-cols-1 items-center gap-8 lg:grid-cols-2">

                <div class="relative">
                    <img
                    src="{{ asset('images/poto_desa.png') }}"
                    alt="Foto lingkungan Desa Mekarjaya"
                    loading="lazy"
                    class="h-80 w-full rounded-3xl object-cover shadow-xl md:h-[470px]"
                    >

                    <div class="absolute bottom-5 left-5 right-5 rounded-2xl bg-white/95 p-5 shadow-lg">
                        <p class="mb-1 text-xs font-bold uppercase tracking-widest text-green-800">
                            Kecamatan Cikalongwetan
                        </p>
                        <p class="text-lg font-bold text-gray-900">
                            Kabupaten Bandung Barat
                        </p>
                    </div>
                </div>

                <div>
                    <span class="text-sm font-bold uppercase tracking-widest text-green-800">
                        Tentang Desa
                    </span>

                    <h2 class="mb-5 mt-3 text-3xl font-extrabold leading-tight text-gray-900 md:text-4xl">
                        Mengenal Lebih Dekat
                        <span class="text-green-800">Desa Mekarjaya</span>
                    </h2>

                    <p class="mb-4 leading-relaxed text-gray-600">
                        Desa Mekarjaya merupakan salah satu desa yang berada
                        di wilayah Kecamatan Cikalongwetan, Kabupaten Bandung Barat,
                        Provinsi Jawa Barat. Wilayah desa memiliki kondisi geografis
                        berupa dataran dan perbukitan dengan ketinggian sekitar
                        700–1.300 meter di atas permukaan laut.
                    </p>

                    <p class="mb-4 leading-relaxed text-gray-600">
                        Berdasarkan Profil Desa Mekarjaya Tahun 2023,
                        luas wilayah desa mencapai sekitar 879,148 hektare.
                        Wilayah tersebut terdiri dari kawasan permukiman,
                        persawahan, perkebunan, dan penggunaan lahan lainnya.
                        Secara administratif, Desa Mekarjaya terbagi menjadi
                        empat dusun, 20 RW, dan 53 RT.
                    </p>
                </div>

            </div>
        </div>
    </section>


    {{-- ======================================================
         SEJARAH DESA
    ======================================================= --}}
    <section class="bg-green-50 py-12 md:py-16">
        <div class="mx-auto max-w-5xl px-6">

            <div class="mx-auto mb-8 max-w-2xl text-center">
                <span class="text-sm font-bold uppercase tracking-widest text-green-800">
                    Perjalanan Desa
                </span>

                <h2 class="mb-4 mt-3 text-3xl font-extrabold text-gray-900 md:text-4xl">
                    Sejarah Desa Mekarjaya
                </h2>

                <p class="leading-relaxed text-gray-600">
                    Mengenal awal terbentuknya Desa Mekarjaya dan
                    perjalanan perkembangannya.
                </p>
            </div>

            <div class="rounded-3xl border border-green-100 bg-white p-6 shadow-sm md:p-8">
                <div class="flex flex-col gap-5 sm:flex-row">

                    <div class="flex h-16 w-16 shrink-0 items-center justify-center rounded-2xl bg-green-100 text-2xl">
                        📖
                    </div>

                    <div>
                        <div class="mb-4">
                            <span class="inline-flex rounded-full bg-green-100 px-4 py-2 text-sm font-bold text-green-800">
                                23 Agustus 1986
                            </span>
                        </div>

                        <h3 class="mb-3 text-xl font-bold text-gray-900">
                            Awal Berdirinya Desa Mekarjaya
                        </h3>

                        <p class="mb-4 leading-relaxed text-gray-600">
                            Berdasarkan dokumen Profil Desa Mekarjaya,
                            desa ini merupakan hasil pemekaran dari desa induk,
                            yaitu Desa Cipada. Pada tanggal 23 Agustus 1986
                            diterbitkan keputusan dari Menteri Dalam Negeri
                            yang menandai terbentuknya Desa Mekarjaya sebagai
                            desa tersendiri.
                        </p>

                        <p class="mb-4 leading-relaxed text-gray-600">
                            Nama Mekarjaya berasal dari dua suku kata,
                            yaitu <strong class="text-gray-800">Mekar</strong>
                            yang berarti berkembang dan
                            <strong class="text-gray-800">Jaya</strong>
                            yang berarti berhasil. Nama tersebut mengandung
                            harapan agar desa dapat terus berkembang,
                            berhasil, dan mampu meningkatkan pembangunan
                            serta kesejahteraan masyarakat.
                        </p>

                        <div class="mt-5 border-l-4 border-green-700 bg-green-50 p-4">
                            <p class="text-sm leading-relaxed text-gray-700">
                                Desa Mekarjaya merupakan bagian dari wilayah
                                Kecamatan Cikalongwetan, Kabupaten Bandung Barat.
                            </p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>


    {{-- ======================================================
         KONDISI GEOGRAFIS DAN DEMOGRAFI
    ======================================================= --}}
    <section class="bg-white py-12 md:py-16">
        <div class="mx-auto max-w-7xl px-6">

            <div class="mx-auto mb-8 max-w-2xl text-center">
                <span class="text-sm font-bold uppercase tracking-widest text-green-800">
                    Gambaran Wilayah
                </span>

                <h2 class="mb-4 mt-3 text-3xl font-extrabold text-gray-900 md:text-4xl">
                    Kondisi Geografis dan Demografi
                </h2>

                <p class="leading-relaxed text-gray-600">
                    Gambaran kondisi wilayah dan kependudukan Desa Mekarjaya
                    berdasarkan Profil Desa Tahun 2023.
                </p>
            </div>

            {{-- STATISTIK UTAMA --}}
            <div class="mb-6 grid grid-cols-2 gap-4 lg:grid-cols-4">
                @foreach ([
                    ['angka' => '9.561', 'label' => 'Jumlah Penduduk', 'ikon' => '👥'],
                    ['angka' => '3.136', 'label' => 'Jumlah Kepala Keluarga', 'ikon' => '🏠'],
                    ['angka' => '4', 'label' => 'Jumlah Dusun', 'ikon' => '🏡'],
                    ['angka' => '53', 'label' => 'Jumlah RT', 'ikon' => '📍'],
                ] as $statistik)
                    <div class="rounded-2xl border border-green-100 bg-white p-5 text-center shadow-sm">
                        <div class="mb-3 text-3xl">{{ $statistik['ikon'] }}</div>
                        <p class="text-2xl font-extrabold text-green-900 md:text-3xl">
                            {{ $statistik['angka'] }}
                        </p>
                        <p class="mt-2 text-sm font-medium text-gray-600">
                            {{ $statistik['label'] }}
                        </p>
                    </div>
                @endforeach
            </div>

            {{-- DATA PENDUDUK BERDASARKAN JENIS KELAMIN --}}
            <div class="mb-8 grid grid-cols-1 gap-4 sm:grid-cols-2">
                <div class="rounded-2xl border border-green-100 bg-green-50 p-6">
                    <p class="text-sm font-semibold text-gray-500">
                        Penduduk Laki-laki
                    </p>
                    <p class="mt-2 text-3xl font-extrabold text-green-900">
                        4.495
                        <span class="text-base font-medium text-gray-500">jiwa</span>
                    </p>
                </div>

                <div class="rounded-2xl border border-green-100 bg-green-50 p-6">
                    <p class="text-sm font-semibold text-gray-500">
                        Penduduk Perempuan
                    </p>
                    <p class="mt-2 text-3xl font-extrabold text-green-900">
                        4.452
                        <span class="text-base font-medium text-gray-500">jiwa</span>
                    </p>
                </div>
            </div>

            {{-- GEOGRAFIS DAN BATAS WILAYAH --}}
            <div class="mb-8 grid grid-cols-1 gap-6 lg:grid-cols-2">

                <div class="rounded-3xl border border-gray-100 bg-white p-6 shadow-sm md:p-8">
                    <h3 class="mb-5 text-xl font-extrabold text-gray-900">
                        Kondisi Geografis
                    </h3>

                    <div class="space-y-4">
                        <div class="flex items-center justify-between gap-4 border-b border-gray-100 pb-3">
                            <span class="text-sm text-gray-500">Luas Wilayah</span>
                            <strong class="text-gray-900">879,148 Ha</strong>
                        </div>

                        <div class="flex items-center justify-between gap-4 border-b border-gray-100 pb-3">
                            <span class="text-sm text-gray-500">Ketinggian</span>
                            <strong class="text-gray-900">700–1.300 mdpl</strong>
                        </div>

                        <div class="flex items-center justify-between gap-4 border-b border-gray-100 pb-3">
                            <span class="text-sm text-gray-500">Kondisi Wilayah</span>
                            <strong class="text-right text-gray-900">Dataran dan Perbukitan</strong>
                        </div>

                        <div class="flex items-center justify-between gap-4 border-b border-gray-100 pb-3">
                            <span class="text-sm text-gray-500">Kecamatan</span>
                            <strong class="text-gray-900">Cikalongwetan</strong>
                        </div>

                        <div class="flex items-center justify-between gap-4">
                            <span class="text-sm text-gray-500">Kabupaten</span>
                            <strong class="text-gray-900">Bandung Barat</strong>
                        </div>
                    </div>

                    <div class="mt-5 rounded-xl bg-green-50 p-5">
                        <p class="mb-3 text-sm font-bold text-green-900">
                            Penggunaan Lahan
                        </p>

                        <div class="space-y-3 text-sm text-gray-700">
                            @foreach ([
                                ['nama' => 'Permukiman', 'luas' => '199,322 Ha'],
                                ['nama' => 'Persawahan', 'luas' => '165,100 Ha'],
                                ['nama' => 'Perkebunan', 'luas' => '375,226 Ha'],
                                ['nama' => 'Lain-lain', 'luas' => '139,5 Ha'],
                            ] as $lahan)
                                <div class="flex justify-between gap-3">
                                    <span>{{ $lahan['nama'] }}</span>
                                    <strong>{{ $lahan['luas'] }}</strong>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="rounded-3xl border border-gray-100 bg-white p-6 shadow-sm md:p-8">
                    <h3 class="mb-5 text-xl font-extrabold text-gray-900">
                        Batas Wilayah Desa
                    </h3>

                    <div class="space-y-3">
                        @foreach ([
                            ['arah' => 'Utara', 'desa' => 'Desa Cipada', 'kecamatan' => 'Cikalongwetan'],
                            ['arah' => 'Selatan', 'desa' => 'Desa Campaka Mekar', 'kecamatan' => 'Padalarang'],
                            ['arah' => 'Timur', 'desa' => 'Desa Sadangmekar', 'kecamatan' => 'Cisarua'],
                            ['arah' => 'Barat', 'desa' => 'Desa Mandalasari', 'kecamatan' => 'Cikalongwetan'],
                        ] as $batas)
                            <div class="rounded-xl bg-green-50 px-4 py-3">
                                <div class="flex items-center justify-between gap-3">
                                    <span class="text-sm font-bold text-green-800">
                                        {{ $batas['arah'] }}
                                    </span>
                                    <span class="text-right text-sm font-semibold text-gray-800">
                                        {{ $batas['desa'] }}
                                    </span>
                                </div>
                                <p class="mt-1 text-right text-xs text-gray-500">
                                    Kecamatan {{ $batas['kecamatan'] }}
                                </p>
                            </div>
                        @endforeach
                    </div>

                    <div class="mt-5 rounded-xl border border-green-100 p-5">
                        <p class="text-sm leading-relaxed text-gray-600">
                            Desa Mekarjaya memiliki wilayah berupa dataran
                            dan perbukitan. Kondisi wilayah tersebut menjadi
                            bagian dari karakteristik lingkungan dan kehidupan
                            masyarakat desa.
                        </p>
                    </div>
                </div>

            </div>

            {{-- PEMBAGIAN WILAYAH ADMINISTRATIF --}}
            <div class="overflow-hidden rounded-3xl border border-green-100 bg-white shadow-sm">
                <div class="border-b border-green-100 p-6">
                    <h3 class="text-xl font-extrabold text-gray-900">
                        Pembagian Wilayah Administratif
                    </h3>
                    <p class="mt-2 text-sm text-gray-600">
                        Rincian jumlah dusun, RW, dan RT di Desa Mekarjaya.
                    </p>
                </div>

                <div class="overflow-x-auto p-5 md:p-6">
                    <table class="w-full min-w-[420px] text-left">
                        <thead>
                            <tr class="border-b border-gray-200 text-sm text-gray-500">
                                <th class="pb-4 font-semibold">Nama Dusun</th>
                                <th class="pb-4 text-center font-semibold">Jumlah RW</th>
                                <th class="pb-4 text-center font-semibold">Jumlah RT</th>
                            </tr>
                        </thead>

                        <tbody class="text-sm text-gray-700">
                            @foreach ([
                                ['dusun' => 'Dusun I', 'rw' => 5, 'rt' => 12],
                                ['dusun' => 'Dusun II', 'rw' => 5, 'rt' => 13],
                                ['dusun' => 'Dusun III', 'rw' => 5, 'rt' => 17],
                                ['dusun' => 'Dusun IV', 'rw' => 5, 'rt' => 11],
                            ] as $wilayah)
                                <tr class="border-b border-gray-100">
                                    <td class="py-3 font-semibold text-gray-900">
                                        {{ $wilayah['dusun'] }}
                                    </td>
                                    <td class="py-3 text-center">{{ $wilayah['rw'] }}</td>
                                    <td class="py-3 text-center">{{ $wilayah['rt'] }}</td>
                                </tr>
                            @endforeach

                            <tr class="bg-green-50 font-extrabold text-green-900">
                                <td class="py-3">Total</td>
                                <td class="py-3 text-center">20</td>
                                <td class="py-3 text-center">53</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <p class="mt-5 text-center text-xs text-gray-400">
                Sumber data geografis dan demografi: Profil Desa Mekarjaya Tahun 2023.
            </p>

        </div>
    </section>


    {{-- ======================================================
         FASILITAS DESA
    ======================================================= --}}
    <section class="bg-green-50 py-12 md:py-16">
        <div class="mx-auto max-w-7xl px-6">

            <div class="mx-auto mb-8 max-w-2xl text-center">
                <span class="text-sm font-bold uppercase tracking-widest text-green-800">
                    Sarana dan Prasarana
                </span>

                <h2 class="mb-4 mt-3 text-3xl font-extrabold text-gray-900 md:text-4xl">
                    Fasilitas Desa
                </h2>

                <p class="leading-relaxed text-gray-600">
                    Gambaran fasilitas pendidikan, kesehatan, keagamaan,
                    dan olahraga yang tercatat dalam Profil Desa Mekarjaya Tahun 2023.
                </p>
            </div>

            <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-4">

                {{-- PENDIDIKAN --}}
                <div class="rounded-2xl border border-green-100 bg-white p-6 shadow-sm transition hover:-translate-y-1 hover:shadow-md">
                    <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-green-100 text-2xl">
                        🎓
                    </div>

                    <h3 class="mb-4 font-extrabold text-gray-900">
                        Pendidikan
                    </h3>

                    <ul class="space-y-3 text-sm text-gray-600">
                        @foreach ([
                            ['nama' => 'Play Group', 'jumlah' => 6],
                            ['nama' => 'TK', 'jumlah' => 1],
                            ['nama' => 'SD', 'jumlah' => 6],
                            ['nama' => 'SMP', 'jumlah' => 2],
                            ['nama' => 'SMA', 'jumlah' => 2],
                            ['nama' => 'Lembaga pendidikan agama', 'jumlah' => 9],
                        ] as $fasilitas)
                            <li class="flex justify-between gap-2">
                                <span>{{ $fasilitas['nama'] }}</span>
                                <strong class="text-green-900">{{ $fasilitas['jumlah'] }}</strong>
                            </li>
                        @endforeach
                    </ul>
                </div>

                {{-- KESEHATAN --}}
                <div class="rounded-2xl border border-green-100 bg-white p-6 shadow-sm transition hover:-translate-y-1 hover:shadow-md">
                    <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-green-100 text-2xl">
                        🏥
                    </div>

                    <h3 class="mb-4 font-extrabold text-gray-900">
                        Kesehatan
                    </h3>

                    <ul class="space-y-3 text-sm text-gray-600">
                        @foreach ([
                            ['nama' => 'Poliklinik', 'jumlah' => 3],
                            ['nama' => 'Posyandu', 'jumlah' => 17],
                            ['nama' => 'Balai kesehatan swasta', 'jumlah' => 1],
                            ['nama' => 'Rumah bersalin', 'jumlah' => 3],
                            ['nama' => 'Balai kesehatan ibu dan anak', 'jumlah' => 17],
                            ['nama' => 'Bidan', 'jumlah' => 3],
                        ] as $fasilitas)
                            <li class="flex justify-between gap-2">
                                <span>{{ $fasilitas['nama'] }}</span>
                                <strong class="text-green-900">{{ $fasilitas['jumlah'] }}</strong>
                            </li>
                        @endforeach
                    </ul>
                </div>

                {{-- SARANA IBADAH --}}
                <div class="rounded-2xl border border-green-100 bg-white p-6 shadow-sm transition hover:-translate-y-1 hover:shadow-md">
                    <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-green-100 text-2xl">
                        🕌
                    </div>

                    <h3 class="mb-4 font-extrabold text-gray-900">
                        Sarana Ibadah
                    </h3>

                    <ul class="space-y-3 text-sm text-gray-600">
                        <li class="flex justify-between gap-2">
                            <span>Masjid</span>
                            <strong class="text-green-900">31</strong>
                        </li>
                        <li class="flex justify-between gap-2">
                            <span>Mushola/Surau</span>
                            <strong class="text-green-900">8</strong>
                        </li>
                    </ul>
                </div>

                {{-- OLAHRAGA --}}
                <div class="rounded-2xl border border-green-100 bg-white p-6 shadow-sm transition hover:-translate-y-1 hover:shadow-md">
                    <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-green-100 text-2xl">
                        ⚽
                    </div>

                    <h3 class="mb-4 font-extrabold text-gray-900">
                        Olahraga
                    </h3>

                    <ul class="space-y-3 text-sm text-gray-600">
                        @foreach ([
                            ['nama' => 'Lapangan sepak bola', 'jumlah' => 1],
                            ['nama' => 'Lapangan bulu tangkis', 'jumlah' => 1],
                            ['nama' => 'Meja pingpong', 'jumlah' => 3],
                            ['nama' => 'Lapangan voli', 'jumlah' => 10],
                        ] as $fasilitas)
                            <li class="flex justify-between gap-2">
                                <span>{{ $fasilitas['nama'] }}</span>
                                <strong class="text-green-900">{{ $fasilitas['jumlah'] }}</strong>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <p class="mt-6 text-center text-xs text-gray-400">
                Sumber: Profil Desa Mekarjaya Tahun 2023.
            </p>
        </div>
    </section>


    
{{-- ======================================================
     VISI DAN MISI DESA MEKARJAYA
======================================================= --}}
<section class="relative overflow-hidden bg-white py-12 md:py-16">
    <div class="mx-auto max-w-7xl px-6">

        {{-- JUDUL SECTION --}}
        <div class="mx-auto mb-10 max-w-2xl text-center">
            <span class="text-sm font-bold uppercase tracking-widest text-green-800">
                Arah Pembangunan Desa
            </span>

            <h2 class="mb-4 mt-3 text-3xl font-extrabold text-gray-900 md:text-4xl">
                Visi dan Misi Desa Mekarjaya
            </h2>

            <p class="leading-relaxed text-gray-600">
                Visi dan misi Pemerintah Desa Mekarjaya menjadi landasan
                dalam penyelenggaraan pemerintahan, pembangunan, serta
                peningkatan kesejahteraan masyarakat.
            </p>
        </div>

        {{-- VISI DESA --}}
        <div class="relative mb-8 overflow-hidden rounded-3xl bg-green-950 p-8 text-white shadow-lg md:p-12">

            <div class="absolute -right-16 -top-16 h-64 w-64 rounded-full bg-green-800/40"></div>
            <div class="absolute -bottom-20 -left-10 h-56 w-56 rounded-full bg-lime-400/10"></div>

            <div class="relative">
                <div class="mb-6 flex items-center gap-4">
                    <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-white/10 text-2xl">
                        🎯
                    </div>

                    <div>
                        <p class="text-sm font-bold uppercase tracking-widest text-lime-300">
                            Visi Pemerintah Desa
                        </p>
                        <p class="mt-1 text-sm text-green-100/80">
                            Periode 2019–2027
                        </p>
                    </div>
                </div>

                <h3 class="mb-6 max-w-4xl text-2xl font-extrabold leading-relaxed md:text-4xl">
                    "Bersama Masyarakat mewujudkan
                    <span class="text-lime-300">Mekarjaya MAJU</span>"
                </h3>

                <p class="mb-7 max-w-3xl leading-relaxed text-green-50/90">
                    Mekarjaya MAJU memiliki arti Mandiri, Aspiratif, Jujur,
                    dan Unggul. Visi ini menggambarkan harapan agar Desa
                    Mekarjaya terus berkembang dan mengalami peningkatan
                    dalam berbagai aspek kehidupan melalui semangat
                    kebersamaan dan gotong royong.
                </p>

                {{-- NILAI MAJU --}}
                <div class="grid grid-cols-2 gap-3 md:grid-cols-4">
                    @foreach ([
                        ['huruf' => 'M', 'nama' => 'Mandiri'],
                        ['huruf' => 'A', 'nama' => 'Aspiratif'],
                        ['huruf' => 'J', 'nama' => 'Jujur'],
                        ['huruf' => 'U', 'nama' => 'Unggul'],
                    ] as $nilai)
                        <div class="rounded-2xl border border-white/10 bg-white/10 p-5 text-center">
                            <p class="text-3xl font-extrabold text-lime-300">
                                {{ $nilai['huruf'] }}
                            </p>
                            <p class="mt-2 text-sm font-semibold text-white">
                                {{ $nilai['nama'] }}
                            </p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- MISI DESA --}}
        <div class="mb-8">
            <div class="mb-6">
                <div class="mb-3 flex h-12 w-12 items-center justify-center rounded-xl bg-green-100 text-2xl">
                    🌱
                </div>

                <h3 class="text-2xl font-extrabold text-gray-900 md:text-3xl">
                    Misi Desa Mekarjaya
                </h3>

                <p class="mt-2 max-w-2xl leading-relaxed text-gray-600">
                    Untuk mewujudkan visi yang telah ditetapkan,
                    Pemerintah Desa Mekarjaya melaksanakan enam misi
                    sebagai arah penyelenggaraan pemerintahan dan
                    pembangunan desa.
                </p>
            </div>

            @php
                $misiDesa = [
                    [
                        'judul' => 'Meningkatkan Tata Pemerintahan Desa',
                        'deskripsi' => 'Meningkatkan tata pemerintahan desa yang makin baik, bersih, dan amanah.',
                        'ikon' => '🏛️',
                    ],
                    [
                        'judul' => 'Meningkatkan Kualitas Keagamaan',
                        'deskripsi' => 'Meningkatkan kualitas keagamaan di kalangan seluruh masyarakat.',
                        'ikon' => '🤝',
                    ],
                    [
                        'judul' => 'Mengembangkan Potensi Agrobisnis',
                        'deskripsi' => 'Meningkatkan pemanfaatan potensi agrobisnis untuk meningkatkan kesejahteraan masyarakat.',
                        'ikon' => '🌾',
                    ],
                    [
                        'judul' => 'Meningkatkan Kualitas Sumber Daya Manusia',
                        'deskripsi' => 'Meningkatkan kualitas Sumber Daya Manusia (SDM) melalui pembinaan kesehatan lingkungan dan pendidikan.',
                        'ikon' => '🎓',
                    ],
                    [
                        'judul' => 'Pemerataan Pembangunan',
                        'deskripsi' => 'Mewujudkan pemerataan pembangunan di berbagai bidang.',
                        'ikon' => '🏗️',
                    ],
                    [
                        'judul' => 'Memantapkan Pertumbuhan Ekonomi',
                        'deskripsi' => 'Memantapkan pertumbuhan ekonomi dan pemerataan secara berkelanjutan.',
                        'ikon' => '📈',
                    ],
                ];
            @endphp

            <div class="grid grid-cols-1 gap-5 md:grid-cols-2 lg:grid-cols-3">
                @foreach ($misiDesa as $index => $misi)
                    <article class="group rounded-2xl border border-green-100 bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-green-300 hover:shadow-lg">

                        <div class="mb-5 flex items-center justify-between">
                            <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-green-50 text-2xl transition group-hover:bg-green-100">
                                {{ $misi['ikon'] }}
                            </div>

                            <span class="text-3xl font-extrabold text-green-100 transition group-hover:text-green-200">
                                {{ sprintf('%02d', $index + 1) }}
                            </span>
                        </div>

                        <h4 class="mb-3 text-lg font-extrabold leading-snug text-gray-900">
                            {{ $misi['judul'] }}
                        </h4>

                        <p class="text-sm leading-relaxed text-gray-600">
                            {{ $misi['deskripsi'] }}
                        </p>

                    </article>
                @endforeach
            </div>
        </div>

        {{-- PENJABARAN VISI --}}
        <div class="rounded-3xl border border-green-100 bg-green-50 p-7 md:p-10">
            <div class="mb-5 flex items-center gap-3">
                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-white text-xl shadow-sm">
                    🌄
                </div>

                <h3 class="text-xl font-extrabold text-gray-900">
                    Harapan Pembangunan Desa
                </h3>
            </div>

            <p class="mb-5 leading-relaxed text-gray-700">
                Desa Mekarjaya yang MAJU ditandai dengan kondisi kehidupan
                masyarakat yang memenuhi standar kelayakan dalam pemenuhan
                kebutuhan di bidang pendidikan, kesehatan, dan mata
                pencaharian yang layak, serta jaminan keamanan dengan
                senantiasa mempertimbangkan kelestarian daya dukung
                lingkungan secara berkelanjutan.
            </p>

            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-4">
                @foreach ([
                    ['judul' => 'Kesejahteraan', 'deskripsi' => 'Meningkatnya kesejahteraan masyarakat.'],
                    ['judul' => 'Pendidikan', 'deskripsi' => 'Peningkatan kualitas pendidikan dan sumber daya manusia.'],
                    ['judul' => 'Ekonomi', 'deskripsi' => 'Pengembangan potensi ekonomi dan agrobisnis desa.'],
                    ['judul' => 'Kesehatan', 'deskripsi' => 'Peningkatan kualitas kesehatan masyarakat.'],
                ] as $harapan)
                    <div class="rounded-xl border border-green-100 bg-white p-5">
                        <h4 class="mb-2 font-bold text-green-900">
                            {{ $harapan['judul'] }}
                        </h4>

                        <p class="text-sm leading-relaxed text-gray-600">
                            {{ $harapan['deskripsi'] }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>

        <p class="mt-6 text-center text-xs text-gray-400">
            Sumber: Dokumen Visi dan Misi Desa Mekarjaya, Pemerintah Desa Mekarjaya Tahun 2019–2027.
        </p>

    </div>
</section>



    {{-- ======================================================
         STRUKTUR PEMERINTAHAN DESA
    ======================================================= --}}
    @php
        /*
         * Pencarian foto berdasarkan beberapa ekstensi.
         * Foto disimpan di public/images/aparatur/
         */
        $cariFotoAparatur = function ($namaFile) {
            foreach (['jpg', 'jpeg', 'png', 'webp'] as $ekstensi) {
                $path = 'images/aparatur/' . $namaFile . '.' . $ekstensi;

                if (file_exists(public_path($path))) {
                    return asset($path);
                }
            }

            return null;
        };

        $aparaturPelaksana = [
            [
                'jabatan' => 'Kasi Pemerintahan',
                'nama' => 'Popy Rahmawati',
                'foto' => 'KasiPemerintahan'
            ],
            [
                'jabatan' => 'Kasi Pelayanan',
                'nama' => 'Lufita Putri Lestari',
                'foto' => 'KasiPelayanan'
            ],
            [
                'jabatan' => 'Kasi Kesejahteraan',
                'nama' => 'Chandra Amirudin',
                'foto' => 'KasiKesra'
            ],
            [
                'jabatan' => 'Kaur Keuangan',
                'nama' => 'Sri Mega Lestari',
                'foto' => 'KaurKeuangan'
            ],
            [
                'jabatan' => 'Kaur Perencanaan',
                'nama' => 'Dian Andiani',
                'foto' => 'KaurPerencanaan'
            ],
            [
                'jabatan' => 'Kaur Tata Usaha dan Umum',
                'nama' => 'Ahmad Saepul Komar, S.Pd',
                'foto' => 'KaurTU&Umum'
            ],
        ];

        $kepalaDusun = [
            [
                'jabatan' => 'Kepala Dusun I',
                'nama' => 'Rizki Mubarok',
                'foto' => 'Kadus1'
            ],
            [
                'jabatan' => 'Kepala Dusun II',
                'nama' => 'Ahmad Hidayat, S.Pd.I',
                'foto' => 'Kadus2'
            ],
            [
                'jabatan' => 'Kepala Dusun III',
                'nama' => 'Enjang Mujahidin',
                'foto' => 'Kadus3'
            ],
            [
                'jabatan' => 'Kepala Dusun IV',
                'nama' => 'Ujang Hermawan',
                'foto' => 'Kadus4'
            ],
        ];

        $stafDesa = [
            [
                'jabatan' => 'Staf Kaur Keuangan',
                'nama' => 'Fazry Ermawan',
                'foto' => 'SatffKaurKeuangan',
            ],
        ];
    @endphp

    <section class="bg-white py-12 md:py-16">
        <div class="mx-auto max-w-7xl px-5 sm:px-6">

            {{-- JUDUL --}}
            <div class="mx-auto mb-8 max-w-3xl text-center">
                <span class="text-sm font-bold uppercase tracking-widest text-green-800">
                    Organisasi Desa
                </span>

                <h2 class="mb-4 mt-3 text-3xl font-extrabold text-gray-900 md:text-4xl">
                    Struktur Pemerintahan Desa
                </h2>

                <p class="leading-relaxed text-gray-600">
                    Susunan aparatur Pemerintah Desa Mekarjaya yang terdiri
                    dari kepala desa, sekretaris desa, kepala urusan,
                    kepala seksi, kepala dusun, serta staf pendukung.
                </p>
            </div>


            {{-- KEPALA DESA --}}
            <div class="mx-auto mb-6 max-w-xs">
                <article class="group overflow-hidden rounded-2xl border border-green-200 bg-white text-center shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-xl">

                    <div class="flex min-h-56 items-center justify-center bg-green-100 p-4">
                        @if ($fotoKades = $cariFotoAparatur('KADES'))
                            <img
                                src="{{ $fotoKades }}"
                                alt="Foto Kepala Desa Mekarjaya"
                                loading="lazy"
                                class="h-48 w-40 rounded-xl object-cover object-top shadow-sm transition duration-300 group-hover:scale-[1.02]"
                            >
                        @else
                            <div class="flex h-48 w-40 items-center justify-center rounded-xl border border-dashed border-green-200 bg-white px-3 text-center text-sm text-gray-500">
                                Foto belum ditemukan
                            </div>
                        @endif
                    </div>

                    <div class="p-5">
                        <p class="mb-2 text-xs font-bold uppercase tracking-widest text-green-800">
                            Kepala Desa
                        </p>

                        <h3 class="text-lg font-extrabold text-gray-900">
                            Obar Sobarna, S.IP
                        </h3>
                    </div>

                </article>
            </div>


            {{-- SEKRETARIS DESA --}}
            <div class="mx-auto mb-8 max-w-xs">
                <article class="group overflow-hidden rounded-2xl border border-gray-200 bg-white text-center shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-xl">

                    <div class="flex min-h-56 items-center justify-center bg-green-50 p-4">
                        @if ($fotoSekdes = $cariFotoAparatur('SEKDES'))
                            <img
                                src="{{ $fotoSekdes }}"
                                alt="Foto Sekretaris Desa"
                                loading="lazy"
                                class="h-48 w-40 rounded-xl object-cover object-top shadow-sm transition duration-300 group-hover:scale-[1.02]"
                            >
                        @else
                            <div class="flex h-48 w-40 items-center justify-center rounded-xl border border-dashed border-green-200 bg-white px-3 text-center text-sm text-gray-500">
                                Foto belum ditemukan
                            </div>
                        @endif
                    </div>

                    <div class="p-5">
                        <p class="mb-2 text-xs font-bold uppercase tracking-widest text-green-800">
                            Sekretaris Desa
                        </p>

                        <h3 class="font-bold text-gray-900">
                            Robby Akhroman, S.IP
                        </h3>
                    </div>

                </article>
            </div>


            {{-- KEPALA URUSAN DAN KEPALA SEKSI --}}
            <div class="mb-10 border-t border-green-100 pt-7">
                <div class="mb-5 text-center">
                    <h3 class="text-xl font-extrabold text-gray-900">
                        Kepala Urusan dan Kepala Seksi
                    </h3>

                    <p class="mt-2 text-sm text-gray-500">
                        Susunan aparatur pelaksana Pemerintah Desa Mekarjaya.
                    </p>
                </div>

                <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                    @foreach ($aparaturPelaksana as $aparatur)
                        <article class="group overflow-hidden rounded-2xl border border-gray-200 bg-white text-center shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-xl">

                            <div class="flex min-h-60 items-center justify-center bg-gradient-to-b from-green-50 to-white p-4">
                                @if ($foto = $cariFotoAparatur($aparatur['foto']))
                                    <img
                                        src="{{ $foto }}"
                                        alt="Foto {{ $aparatur['nama'] }}"
                                        loading="lazy"
                                        class="h-48 w-40 rounded-xl object-cover object-top shadow-sm transition duration-300 group-hover:scale-[1.02]"
                                    >
                                @else
                                    <div class="flex h-48 w-40 items-center justify-center rounded-xl border border-dashed border-green-200 bg-gray-50 px-3 text-center text-sm text-gray-500">
                                        Foto belum ditemukan
                                    </div>
                                @endif
                            </div>

                            <div class="px-4 pb-5">
                                <h4 class="font-bold text-gray-900">
                                    {{ $aparatur['nama'] }}
                                </h4>

                                <p class="mt-1 text-sm font-semibold text-green-800">
                                    {{ $aparatur['jabatan'] }}
                                </p>
                            </div>

                        </article>
                    @endforeach
                </div>
            </div>


            {{-- KEPALA DUSUN --}}
            <div class="mb-10 border-t border-green-100 pt-7">
                <div class="mb-5 text-center">
                    <h3 class="text-xl font-extrabold text-gray-900">
                        Kepala Dusun
                    </h3>

                    <p class="mt-2 text-sm text-gray-500">
                        Perangkat kewilayahan Desa Mekarjaya.
                    </p>
                </div>

                <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-4">
                    @foreach ($kepalaDusun as $kadus)
                        <article class="group overflow-hidden rounded-2xl border border-gray-200 bg-white text-center shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-xl">

                            <div class="flex min-h-60 items-center justify-center bg-gradient-to-b from-green-50 to-white p-4">
                                @if ($foto = $cariFotoAparatur($kadus['foto']))
                                    <img
                                        src="{{ $foto }}"
                                        alt="Foto {{ $kadus['nama'] }}"
                                        loading="lazy"
                                        class="h-48 w-40 rounded-xl object-cover object-top shadow-sm transition duration-300 group-hover:scale-[1.02]"
                                    >
                                @else
                                    <div class="flex h-48 w-40 items-center justify-center rounded-xl border border-dashed border-green-200 bg-gray-50 px-3 text-center text-sm text-gray-500">
                                        Foto belum ditemukan
                                    </div>
                                @endif
                            </div>

                            <div class="px-4 pb-5">
                                <h4 class="font-bold text-gray-900">
                                    {{ $kadus['nama'] }}
                                </h4>

                                <p class="mt-1 text-sm font-semibold text-green-800">
                                    {{ $kadus['jabatan'] }}
                                </p>
                            </div>

                        </article>
                    @endforeach
                </div>
            </div>


            {{-- STAF DAN TENAGA PENDUKUNG --}}
            <div class="border-t border-green-100 pt-7">
                <div class="mb-5 text-center">
                    <h3 class="text-xl font-extrabold text-gray-900">
                        Staf dan Tenaga Pendukung
                    </h3>

                    <p class="mt-2 text-sm text-gray-500">
                        Staf pendukung penyelenggaraan pemerintahan desa.
                    </p>
                </div>

                <div class="mx-auto grid max-w-4xl grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach ($stafDesa as $staf)
                        <article class="group overflow-hidden rounded-2xl border border-gray-200 bg-white text-center shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-xl">

                            <div class="flex min-h-60 items-center justify-center bg-gradient-to-b from-green-50 to-white p-4">
                                @if ($foto = $cariFotoAparatur($staf['foto']))
                                    <img
                                        src="{{ $foto }}"
                                        alt="Foto {{ $staf['nama'] }}"
                                        loading="lazy"
                                        class="h-48 w-40 rounded-xl object-cover object-top shadow-sm transition duration-300 group-hover:scale-[1.02]"
                                    >
                                @else
                                    <div class="flex h-48 w-40 items-center justify-center rounded-xl border border-dashed border-green-200 bg-gray-50 px-3 text-center text-sm text-gray-500">
                                        Foto belum ditemukan
                                    </div>
                                @endif
                            </div>

                            <div class="px-4 pb-5">
                                <h4 class="font-bold text-gray-900">
                                    {{ $staf['nama'] }}
                                </h4>

                                <p class="mt-1 text-sm font-semibold text-green-800">
                                    {{ $staf['jabatan'] }}
                                </p>
                            </div>

                        </article>
                    @endforeach
                </div>
            </div>

            <p class="mt-7 text-center text-xs text-gray-400">
                Sumber data aparatur: Profil Desa Mekarjaya Tahun 2023.
            </p>

        </div>
    </section>

</x-layouts.main>
