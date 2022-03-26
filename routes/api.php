<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TestApiController;
use App\Http\Controllers\Api\NotificationApiController;
use App\Http\Controllers\Api\LoginApiController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login', [LoginApiController::class, 'index']);

Route::post('notification', [NotificationApiController::class, 'index']);
Route::post('read', [NotificationApiController::class, 'read']);

Route::get('test', [TestApiController::class, 'index']);
