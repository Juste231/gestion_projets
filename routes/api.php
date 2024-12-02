<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\AuthController;
use App\Http\Controllers\api\ProjetsController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::post('/register', [AuthController::class, 'register'])
        ->name('register');
Route::post('/login', [AuthController::class, 'login'])
        ->name('login');


// Projets
Route::get('/projets', [ProjetsController::class, 'index'])->name('projets.show');
Route::get('/projets/user', [ProjetsController::class, 'show'])->name('projets.user');
Route::post('/projets', [ProjetsController::class, 'store'])->name('projets.store');
Route::post('/projets/edit', [ProjetsController::class, 'edit'])->name('projets.edit');
Route::put('/projets', [ProjetsController::class, 'update'])->name('projets.update');
Route::delete('/projets', [ProjetsController::class, 'destroy'])->name('projets.destroy');
Route::patch('/projets/statut', [ProjetsController::class, 'updateStatut'])->name('projets.updatestatut');
