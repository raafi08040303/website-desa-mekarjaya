
<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PotensiController;
use App\Models\Berita;
use App\Models\Potensi;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| PUBLIC ROUTES
|--------------------------------------------------------------------------
*/

// Halaman utama
Route::get('/', function () {
    $beritas = Berita::where('status', 'published')
        ->whereNotNull('published_at')
        ->where('published_at', '<=', now())
        ->latest('published_at')
        ->take(2)
        ->get();

    $potensis = Potensi::where('status', 'published')
        ->latest()
        ->take(3)
        ->get();

    return view('home', compact('beritas', 'potensis'));
});

// Redirect /home ke halaman utama
Route::get('/home', function () {
    return redirect('/');
});

// Profil desa
Route::get('/profil', function () {
    return view('profile');
});

// Layanan desa
Route::get('/layanan', function () {
    return view('layanan');
});

// Potensi desa untuk pengunjung
Route::get('/potensi', function () {
    $potensis = Potensi::where('status', 'published')
        ->latest()
        ->get();

    return view('potensi', compact('potensis'));
})->name('potensi');

// Berita publik
Route::get('/berita', function () {
    $beritas = Berita::where('status', 'published')
        ->whereNotNull('published_at')
        ->where('published_at', '<=', now())
        ->latest('published_at')
        ->paginate(9);

    return view('berita', compact('beritas'));
})->name('berita');


/*
|--------------------------------------------------------------------------
| AUTHENTICATION ROUTES
|--------------------------------------------------------------------------
*/

// Login
Route::get('/login', [AuthController::class, 'loginPage'])
    ->name('login');

Route::post('/login', [AuthController::class, 'login']);

// Register
Route::get('/register', [AuthController::class, 'registerPage']);

Route::post('/register', [AuthController::class, 'register']);

// Logout
Route::get('/logout', [AuthController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');


/*
|--------------------------------------------------------------------------
| ROLE-BASED ROUTES
|--------------------------------------------------------------------------
*/

// Dashboard admin
Route::get('/admin', [DashboardController::class, 'index'])
    ->middleware(['auth', 'role:admin'])
    ->name('admin');

// Halaman staff
Route::get('/staff', function () {
    return 'Halo Staff!';
})->middleware(['auth', 'role:staff']);

// Halaman user
Route::get('/user', function () {
    return 'Halo User!';
})->middleware(['auth', 'role:user']);


/*
|--------------------------------------------------------------------------
| ADMIN ROUTES
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'role:admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        // =========================
        // ADMIN BERITA
        // =========================

        // Halaman konfirmasi setelah tambah atau edit berita
        Route::get('/berita-selesai', [
            BeritaController::class,
            'selesai'
        ])->name('berita.selesai');

        // CRUD berita
        Route::resource('berita', BeritaController::class);

        // =========================
        // ADMIN POTENSI DESA
        // =========================

        // CRUD potensi desa
        Route::resource('potensi', PotensiController::class);
    });
