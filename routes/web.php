<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\MusicController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [MainController::class, "index"])->name("main");
Route::get('/about', [MainController::class, "about"])->name("about");
Route::get('/upload', [MainController::class, "upload"])->name("upload");
Route::post('/upload/file', [MusicController::class, "store"])->name("music.store");
Route::get("/music/{title}", [MusicController::class, "get"])->name('music');
