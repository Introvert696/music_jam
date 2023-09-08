<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\MusicController;
use App\Http\Controllers\MusicPlaylistController;
use App\Http\Controllers\PlaylistController;
use App\Http\Controllers\UserController;
use App\Models\Playlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;



Route::get('/', [MainController::class, "index"])->name("main");
Route::get('/about', [MainController::class, "about"])->name("about");
Route::get("/music/{title}", [MusicController::class, "get"])->name('music');

Route::middleware("auth")->group(function () {
    Route::get('/upload', [MainController::class, "upload"])->name("upload");
    Route::post('/upload/file', [MusicController::class, "store"])->name("music.store");
    Route::get('/profile', [UserController::class, "index"])->name("profile");
    Route::get('/playlist/{id}', [PlaylistController::class, "show"])->name("playlist.show");
    Route::post('/musicplaylist', [MusicPlaylistController::class, "store"])->name("musicplaylist.store");
});

Auth::routes();
