<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\LandingpageController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PortofolioController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// =======================
// LANDING PAGE
// =======================
Route::get('/', [LandingpageController::class, 'index'])
    ->name('landingpage');

// Detail Berita (Frontend)
Route::get('/berita/{slug}', [BeritaController::class, 'show'])
    ->name('berita.show');


// =======================
// AUTH
// =======================
Route::get('/login', [LoginController::class, 'showLoginForm'])
    ->name('login');

Route::post('/login', [LoginController::class, 'login'])
    ->name('login.process');

Route::post('/logout', [LoginController::class, 'logout'])
    ->name('logout');


// =======================
// ADMIN PANEL
// =======================
Route::prefix('admin')->middleware('auth')->group(function () {

    // Dashboard
    Route::get('/dashboard', function () {
        return view('admin.dashboard.index');
    })->name('dashboard');


    // =======================
    // CRUD BERITA (ADMIN)
    // =======================
    Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index');
    Route::get('/berita/create', [BeritaController::class, 'create'])->name('berita.create');
    Route::post('/berita', [BeritaController::class, 'store'])->name('berita.store');
    Route::get('/berita/{slug}/edit', [BeritaController::class, 'edit'])->name('berita.edit');
    Route::put('/berita/{slug}', [BeritaController::class, 'update'])->name('berita.update');
    Route::delete('/berita/{slug}', [BeritaController::class, 'destroy'])->name('berita.destroy');



    // =======================
    // CRUD TEAM (ADMIN)
    // =======================
    Route::resource('team', TeamController::class)
        ->names([
            'index'   => 'admin.team.index',
            'create'  => 'admin.team.create',
            'store'   => 'admin.team.store',
            'edit'    => 'admin.team.edit',
            'update'  => 'admin.team.update',
            'destroy' => 'admin.team.destroy',
            'show'    => 'admin.team.show',
        ]);


    // =======================
    // CRUD PORTOFOLIO (ADMIN)
    // =======================
    Route::resource('portofolio', PortofolioController::class)
        ->names([
            'index'   => 'admin.portofolio.index',
            'create'  => 'admin.portofolio.create',
            'store'   => 'admin.portofolio.store',
            'edit'    => 'admin.portofolio.edit',
            'update'  => 'admin.portofolio.update',
            'destroy' => 'admin.portofolio.destroy',
            'show'    => 'admin.portofolio.show',
        ]);

});
