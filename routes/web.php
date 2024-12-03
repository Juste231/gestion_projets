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
Route::get('/projets', function () {
    return view('projects');
})->name('projets');
Route::get('/projets/create', [ProjetsController::class, 'create'])->name('projets.create');
Route::post('/projets', [ProjetsController::class, 'store'])->name('projets.store');
Route::get('/projets', function () {return view('viewprojets');})->name('projets.show');
Route::resource('projets', ProjetsController::class);



//Tache route
Route::get('/taches/create', [TachesController::class, 'create'])->name('taches.create');
Route::post('/taches', [TachesController::class, 'store'])->name('taches.store');





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
