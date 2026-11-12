<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Throwable;

class BeritaController extends Controller
{
    /**
     * Menampilkan daftar berita, statistik, pencarian, dan filter status.
     */
    public function index(Request $request)
    {
        $totalBerita = Berita::count();

        $totalTerbit = Berita::where('status', 'published')
            ->whereNotNull('published_at')
            ->where('published_at', '<=', now())
            ->count();

        $totalDraft = Berita::where('status', 'draft')->count();

        $totalTerjadwal = Berita::where('status', 'published')
            ->whereNotNull('published_at')
            ->where('published_at', '>', now())
            ->count();

        $query = Berita::query()->latest();

        if ($request->filled('search')) {
            $search = trim($request->input('search'));

            $query->where('judul', 'like', '%' . $search . '%');
        }

        if (in_array($request->input('status'), ['draft', 'published'], true)) {
            $query->where('status', $request->input('status'));
        }

        $beritas = $query->paginate(10)->withQueryString();

        return view('admin.berita.index', compact(
            'beritas',
            'totalBerita',
            'totalTerbit',
            'totalDraft',
            'totalTerjadwal'
        ));
    }

    /**
     * Form tambah berita.
     */
    public function create()
    {
        return view('admin.berita.create');
    }

    /**
     * Menyimpan berita baru.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'ringkasan' => 'nullable|string',
            'isi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:10240',
            'status' => ['required', Rule::in(['draft', 'published'])],
        ]);

        $gambarBaru = null;

        try {
            if ($request->hasFile('gambar')) {
                $gambarBaru = $request->file('gambar')
                    ->store('berita', 'public');

                $validated['gambar'] = $gambarBaru;
            }

            $validated['slug'] = $this->buatSlugUnik(
                $validated['judul']
            );

            $validated['published_at'] =
                $validated['status'] === 'published' ? now() : null;

            Berita::create($validated);
        } catch (Throwable $e) {
            if ($gambarBaru) {
                Storage::disk('public')->delete($gambarBaru);
            }

            report($e);

            return back()
                ->withInput($request->except('gambar'))
                ->with('error', 'Berita gagal disimpan. Silakan coba kembali.');
        }

        return redirect()
            ->route('admin.berita.selesai')
            ->with('success', 'Berita berhasil ditambahkan!')
            ->with('aksi', 'create');
    }

    /**
     * Form edit berita.
     * Parameter $beritum disesuaikan dengan route {beritum}.
     */
    public function edit(Berita $beritum)
    {
        $berita = $beritum;

        return view('admin.berita.edit', compact('berita'));
    }

    /**
     * Memperbarui berita.
     */
    public function update(Request $request, Berita $beritum)
    {
        $berita = $beritum;

        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'ringkasan' => 'nullable|string',
            'isi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:10240',
            'status' => ['required', Rule::in(['draft', 'published'])],
        ]);

        $gambarLama = $berita->gambar;
        $gambarBaru = null;

        try {
            if ($request->hasFile('gambar')) {
                $gambarBaru = $request->file('gambar')
                    ->store('berita', 'public');

                $validated['gambar'] = $gambarBaru;
            }

            if ($berita->judul !== $validated['judul']) {
                $validated['slug'] = $this->buatSlugUnik(
                    $validated['judul'],
                    $berita->id
                );
            }

            if ($validated['status'] === 'draft') {
                $validated['published_at'] = null;
            } elseif (
                $berita->status !== 'published' ||
                !$berita->published_at
            ) {
                $validated['published_at'] = now();
            } else {
                $validated['published_at'] = $berita->published_at;
            }

            DB::transaction(function () use ($berita, $validated) {
                $berita->update($validated);
            });
        } catch (Throwable $e) {
            if ($gambarBaru) {
                Storage::disk('public')->delete($gambarBaru);
            }

            report($e);

            return back()
                ->withInput($request->except('gambar'))
                ->with('error', 'Berita gagal diperbarui. Silakan coba kembali.');
        }

        if ($gambarBaru && $gambarLama) {
            Storage::disk('public')->delete($gambarLama);
        }

        return redirect()
            ->route('admin.berita.selesai')
            ->with('success', 'Berita berhasil diperbarui!')
            ->with('aksi', 'update');
    }

    /**
     * Menghapus berita.
     */
    public function destroy(Berita $beritum)
    {
        $berita = $beritum;
        $gambarLama = $berita->gambar;

        try {
            $berita->delete();
        } catch (Throwable $e) {
            report($e);

            return redirect()
                ->route('admin.berita.index')
                ->with('error', 'Berita gagal dihapus. Silakan coba kembali.');
        }

        if ($gambarLama) {
            Storage::disk('public')->delete($gambarLama);
        }

        return redirect()
            ->route('admin.berita.index')
            ->with('success', 'Berita berhasil dihapus.');
    }

    /**
     * Halaman konfirmasi setelah tambah atau edit berita.
     */
    public function selesai()
    {
        if (!session()->has('success') || !session()->has('aksi')) {
            return redirect()->route('admin.berita.index');
        }

        return view('admin.berita.selesai');
    }

    /**
     * Membuat slug unik agar tidak bentrok dengan berita lain.
     */
    private function buatSlugUnik(
        string $judul,
        ?int $kecualiId = null
    ): string {
        $slugDasar = Str::slug($judul);

        if ($slugDasar === '') {
            $slugDasar = 'berita';
        }

        $slug = $slugDasar;
        $nomor = 1;

        while (
            Berita::where('slug', $slug)
                ->when($kecualiId, function ($query) use ($kecualiId) {
                    $query->where('id', '!=', $kecualiId);
                })
                ->exists()
        ) {
            $slug = $slugDasar . '-' . $nomor;
            $nomor++;
        }

        return $slug;
    }
}
