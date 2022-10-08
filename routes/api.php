<?php

use App\Http\Controllers\SongListController;
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

Route::post('/login', [\App\Http\Controllers\UserController::class, 'getToken']);

Route::prefix('songs')->group(function () {
    Route::controller(SongController::class)->group(function () {
        Route::get('/{song}', 'show')->middleware(['auth:sanctum', 'ability:song-edit']);
    });
});

Route::apiResource('/songlists', SongListController::class);

