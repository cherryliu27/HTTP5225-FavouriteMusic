<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtistController;
use App\Models\Artist;

Route::get('/', function () {
    return view('welcome');
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

Route::resource('artists', ArtistController::class);