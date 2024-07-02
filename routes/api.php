<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\BibleApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('/books', [BibleApiController::class, 'Apiindex']);
Route::get('/books/{book}', [BibleApiController::class, 'Apishow']);
Route::get('/books/{book}/chapters/{chapter}', [BibleApiController::class, 'Apishowchapter']);
Route::get('/books/{book}/chapters/{chapter}/verses/{verse}', [BibleApiController::class,'Apishowverse']);
