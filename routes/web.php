<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjetsController;
use App\Http\Controllers\TachesController;
//
Route::get('/', function () {
    return view('welcome');
});


// Projets route 

Route::get('/projets/create', [ProjetsController::class, 'create'])->name('projets.create');
Route::post('/projets', [ProjetsController::class, 'store'])->name('projets.store');
Route::get('/projets/show', [ProjetsController::class, 'show'])->name('projets.show');
Route::delete('/projets/destroy', [ProjetsController::class, 'destroy'])->name('projets.destroy');
Route::patch('/projets/update-status', [ProjetsController::class, 'updateStatus'])->name('projets.updateStatus');
Route::put('/projets/update', [ProjetsController::class, 'update'])->name('projets.update');
Route::get('/projets/edit', [ProjetsController::class, 'edit'])->name('projets.edit');


//Tache route
Route::get('/taches/create', [TachesController::class, 'create'])->name('taches.create');
Route::post('/taches', [TachesController::class, 'store'])->name('taches.store');
Route::get('/taches/show', [TachesController::class, 'show'])->name('taches.show');





// breeze 
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';
