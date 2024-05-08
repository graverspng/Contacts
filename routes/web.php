<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contacts', function () {
    return view('contacts');
});

Route::get('/create-contacts', function () {
    return view('create-contacts');
});

Route::get('/existing-contacts', function () {
    return view('existing-contacts');
});

Route::get('/dashboard', function () {
    return redirect('/contacts');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware('auth')->group(function () {
    Route::get('/create-contacts', [ContactController::class, 'create'])->name('contacts.create');
    Route::post('/create-contacts', [ContactController::class, 'store'])->name('contacts.store');
});

require __DIR__.'/auth.php';
