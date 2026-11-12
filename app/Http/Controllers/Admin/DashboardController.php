<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Berita;

class DashboardController extends Controller
{
    public function index()
    {
        $totalBerita = Berita::count();

        $beritaTerbit = Berita::where('status', 'published')
            ->whereNotNull('published_at')
            ->where('published_at', '<=', now())
            ->count();

        $beritaDraft = Berita::where('status', 'draft')->count();

        $beritaTerjadwal = Berita::where('status', 'published')
            ->whereNotNull('published_at')
            ->where('published_at', '>', now())
            ->count();

        $beritaTerbaru = Berita::latest()
            ->take(5)
            ->get();

        return view('admin.dashboard', compact(
            'totalBerita',
            'beritaTerbit',
            'beritaDraft',
            'beritaTerjadwal',
            'beritaTerbaru'
        ));
    }
}
