<?php

use App\Http\Controllers\WorkController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::get('/', function () {
    return Inertia::render('About');
})->name('sobre-mi');

Route::get('/resumen', function () {
    return Inertia::render('Resume');
})->name('resumen');

Route::get('trabajos', [WorkController::class, 'index'])->name('trabajos');

Route::get('blog', [PostController::class, 'blog'])->name('blog');
Route::get('blog/{post}', [PostController::class, 'article'])->name('article');


/* Route::get('/contacto', function () {
    return Inertia::render('Contact');
})->name('contacto');
 */

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
