<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BibleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('/books');
});
Route::get('/books', [BibleController::class, 'index']);
Route::get('/books/{book}', [BibleController::class, 'show']);
Route::get('/books/{book}/chapters/{chapter}', [BibleController::class, 'showchapter']);
Route::get('/books/{book}/chapters/{chapter}/verses/{verse}', [BibleController::class,'showverse']);
Route::get('/search', [BibleController::class, 'search'])->name('search');

