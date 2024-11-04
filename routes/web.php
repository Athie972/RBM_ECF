<?php

use App\Http\Controllers\AdherentController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;



Route::get('/', [AdherentController::class, 'index'])->name('adherent.index');
Route::post('/destroy/{id}', [AdherentController::class, 'destroy'])->name('adherent.destroy');
Route::get('/edit/{id}', [AdherentController::class, 'edit'])->name('adherent.edit');
Route::post('/update/{id}', [AdherentController::class, 'update'])->name('adherent.update');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
