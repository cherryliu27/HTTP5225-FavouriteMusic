<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\AlbumsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get(
    'artists/trash/{id}',
    [ArtistController::class, 'trash']
    )->name('artists.trash');
    
    Route::get(
    'artists/trashed/',
    [ArtistController::class, 'trashed']
    )->name('artists.trashed');
    
    Route::get(
    'artists/restore/{id}',
    [ArtistController::class, 'trash']
    )->name('artists.restore');
    
    Route::resource('artists', ArtistController::class)->middleware(['auth', 'verified']);;

require __DIR__.'/auth.php';

Route::get(
    'albums/trash/{id}',
    [AlbumsController::class, 'trash']
    )->name('albums.trash');
    
    Route::get(
    'albums/trashed/',
    [AlbumsController::class, 'trashed']
    )->name('albums.trashed');
    
    Route::get(
    'albums/restore/{id}',
    [AlbumsController::class, 'trash']
    )->name('albums.restore');
    
    Route::resource('albums', AlbumsController::class)->middleware(['auth', 'verified']);;

require __DIR__.'/auth.php';

Route::get('/artists/{id}/albums', [ArtistController::class, 'albums'])->name('artists.albums');
