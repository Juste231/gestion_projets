<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\ProjetsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/projets', function () {
    return view('projects');
})->name('projets');
Route::get('/projets/create', [ProjetsController::class, 'create'])->name('projets.create');
Route::post('/projets', [ProjetsController::class, 'store'])->name('projets.store');

Route::get('/taches', function () {
    return view('taches');
})->name('taches');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';
