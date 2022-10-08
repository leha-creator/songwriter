<?php

use App\Http\Controllers\SongListController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongController;

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

Route::post('login', [UserController::class, 'getToken']);

Route::middleware(['auth:sanctum', 'ability:song-edit'])->group(function () {
    Route::resource('songs', SongController::class)->only([
        'store', 'update', 'destroy'
    ]);

    Route::resource('songlists', SongListController::class)->only([
        'store', 'update', 'destroy'
    ]);
});

Route::resource('songs', SongController::class)->only([
    'index', 'show'
]);

Route::resource('songlists', SongListController::class)->only([
    'index', 'show'
]);



Route::apiResource('/songlists', SongListController::class);

