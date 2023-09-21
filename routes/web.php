<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TagShowController;
use App\Http\Controllers\PostShowController;
use App\Http\Controllers\PostIndexController;

Route::get('/', PostIndexController::class)->name('posts.index');
Route::get('/{post:slug}', PostShowController::class)->name('posts.show');
Route::get('/tags/{tag}', TagShowController::class)->name('tags.show');




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
