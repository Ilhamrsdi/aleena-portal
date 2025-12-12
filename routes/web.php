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

Route::get('/', [LandingpageController::class, 'index'])->name('landingpage');
Route::get('/berita/{slug}', [BeritaController::class, 'show'])->name('berita.show');
// Login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.process');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Dashboard + Admin Panel
Route::prefix('admin')->middleware('auth')->group(function () {

    // Dashboard
    Route::get('/dashboard', function () {
        return view('admin.dashboard.index');
    })->name('dashboard');

    // CRUD Berita (Admin)
    Route::resource('/berita', BeritaController::class)->parameters([
    'berita' => 'berita'
])->names([
    'index'   => 'admin.berita.index',
    'create'  => 'admin.berita.create',
    'store'   => 'admin.berita.store',
    'edit'    => 'admin.berita.edit',
    'update'  => 'admin.berita.update',
    'destroy' => 'admin.berita.destroy',
    'show'    => 'admin.berita.show'
]);
    // CRUD Team (Admin)
    Route::resource('/team', TeamController::class)->parameters([
    'team' => 'team'
])->names([
    'index'   => 'admin.team.index',
    'create'  => 'admin.team.create',
    'store'   => 'admin.team.store',
    'edit'    => 'admin.team.edit',
    'update'  => 'admin.team.update',
    'destroy' => 'admin.team.destroy',
    'show'    => 'admin.team.show'
]);

    // CRUD Portofolio & Pencapaian (Admin)
    Route::resource('/portofolio', PortofolioController::class)->parameters([
    'portofolio' => 'portofolio'
])->names([

    'index'   => 'admin.portofolio.index',
    'create'  => 'admin.portofolio.create',
    'store'   => 'admin.portofolio.store',
    'edit'    => 'admin.portofolio.edit',
    'update'  => 'admin.portofolio.update',
    'destroy' => 'admin.portofolio.destroy',
    'show'    => 'admin.portofolio.show'
 
]);


});
