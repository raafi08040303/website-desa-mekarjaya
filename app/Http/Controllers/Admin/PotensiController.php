<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Potensi;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class PotensiController extends Controller
{
    /**
     * Menampilkan daftar potensi beserta pencarian,
     * filter kategori, filter status, dan statistik.
     */
    public function index(Request $request)
    {
        $query = Potensi::query();

        // Pencarian berdasarkan nama, deskripsi, dan lokasi
        if ($request->filled('search')) {
            $search = $request->search;

            $query->where(function ($q) use ($search) {
                $q->where('nama', 'like', "%{$search}%")
                    ->orWhere('deskripsi', 'like', "%{$search}%")
                    ->orWhere('lokasi', 'like', "%{$search}%");
            });
        }

        // Filter berdasarkan kategori
        if ($request->filled('kategori')) {
            $query->where('kategori', $request->kategori);
        }

        // Filter berdasarkan status
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        // Pagination tetap mempertahankan parameter pencarian dan filter
        $potensis = $query->latest()
            ->paginate(10)
            ->withQueryString();

        // Statistik menghitung seluruh data, tidak terpengaruh filter
        $totalPotensi = Potensi::count();

        $totalTerbit = Potensi::where('status', 'published')
            ->count();

        $totalDraft = Potensi::where('status', 'draft')
            ->count();

        return view('admin.potensi.index', compact(
            'potensis',
            'totalPotensi',
            'totalTerbit',
            'totalDraft'
        ));
    }

    /**
     * Menampilkan formulir tambah potensi.
     */
    public function create()
    {
        return view('admin.potensi.create');
    }

    /**
     * Menyimpan potensi baru.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'kategori' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'lokasi' => 'nullable|string|max:255',
            'kontak' => 'nullable|string|max:255',
            'status' => 'required|in:draft,published',
        ]);

        // Membuat slug unik berdasarkan nama potensi
        $validated['slug'] = $this->generateUniqueSlug(
            $validated['nama']
        );

        // Upload gambar jika tersedia
        if ($request->hasFile('gambar')) {
            $validated['gambar'] = $request->file('gambar')
                ->store('potensi', 'public');
        }

        Potensi::create($validated);

        return redirect()
            ->route('admin.potensi.index')
            ->with('success', 'Potensi desa berhasil ditambahkan.');
    }

    /**
     * Menampilkan formulir edit potensi.
     */
    public function edit(Potensi $potensi)
    {
        return view('admin.potensi.edit', compact('potensi'));
    }

    /**
     * Memperbarui data potensi.
     */
    public function update(Request $request, Potensi $potensi)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'kategori' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'lokasi' => 'nullable|string|max:255',
            'kontak' => 'nullable|string|max:255',
            'status' => 'required|in:draft,published',
        ]);

        // Membuat slug unik tanpa bentrok dengan data lain
        $validated['slug'] = $this->generateUniqueSlug(
            $validated['nama'],
            $potensi->id
        );

        // Ganti gambar hanya jika pengguna mengunggah gambar baru
        if ($request->hasFile('gambar')) {
            $gambarLama = $potensi->gambar;

            $gambarBaru = $request->file('gambar')
                ->store('potensi', 'public');

            $validated['gambar'] = $gambarBaru;

            if ($gambarLama) {
                Storage::disk('public')->delete($gambarLama);
            }
        } else {
            // Pertahankan gambar lama jika tidak ada gambar baru
            unset($validated['gambar']);
        }

        $potensi->update($validated);

        return redirect()
            ->route('admin.potensi.index')
            ->with('success', 'Potensi desa berhasil diperbarui.');
    }

    /**
     * Menghapus potensi beserta gambar terkait.
     */
    public function destroy(Potensi $potensi)
    {
        if ($potensi->gambar) {
            Storage::disk('public')->delete($potensi->gambar);
        }

        $potensi->delete();

        return redirect()
            ->route('admin.potensi.index')
            ->with('success', 'Potensi desa berhasil dihapus.');
    }

    /**
     * Membuat slug unik untuk potensi.
     */
    private function generateUniqueSlug(
        string $nama,
        ?int $exceptId = null
    ): string {
        $slugAwal = Str::slug($nama);

        // Antisipasi nama yang tidak menghasilkan slug
        if ($slugAwal === '') {
            $slugAwal = 'potensi';
        }

        $slug = $slugAwal;
        $nomor = 1;

        while (
            Potensi::where('slug', $slug)
                ->when(
                    $exceptId !== null,
                    fn ($query) => $query->where('id', '!=', $exceptId)
                )
                ->exists()
        ) {
            $slug = $slugAwal . '-' . $nomor;
            $nomor++;
        }

        return $slug;
    }
}