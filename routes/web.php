<?php

use App\Http\Controllers\AlumniController;
use App\Http\Controllers\BeasiswaController;
use App\Http\Controllers\BiayaController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\MitraController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontController::class, 'index'])->name('front.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // Route::post('/profile', [ProfileController::class, 'store'])->name('profile.store');

    Route::prefix('admin')->name('admin.')->group(function () {
        Route::middleware('can:manage alumnis')->group(function () {
            Route::resource('alumnis', AlumniController::class);
        });

        Route::middleware('can:manage mitras')->group(function () {
            Route::resource('mitras', MitraController::class);
        });

        Route::middleware('can:manage pendaftarans')->group(function () {
            Route::resource('pendaftarans', PendaftaranController::class);
        });

        Route::middleware('can:manage biayas')->group(function () {
            Route::resource('biayas', BiayaController::class);
        });

        Route::middleware('can:manage beasiswas')->group(function () {
            Route::resource('beasiswas', BeasiswaController::class);
        });

        Route::middleware('can:manage fasilitas')->group(function () {
            Route::resource('fasilitas', FasilitasController::class);
        });
    });
});

require __DIR__ . '/auth.php';