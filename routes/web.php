<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TopController;
use App\Http\Controllers\StaffController;


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
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});

Route::get('/user', [UserController::class, 'index']);

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::get('/top', [TopController::class, 'index'])->name('top');

Route::get('/staff', [StaffController::class, 'index'])->name('staffHome');
Route::get('/staff-add', [StaffController::class, 'add'])->name('staffAdd');
Route::get('/staff-search', [StaffController::class, 'search'])->name('staffSearch');
Route::post('/staff-confirm', [StaffController::class, 'confirm'])->name('staffConfirm');
Route::post('/staff-register', [StaffController::class, 'register'])->name('staffRegister');
Route::get('/staff-delete', [StaffController::class, 'delete'])->name('staffDelete');
Route::get('/staff/{id}', [StaffController::class, 'edit'])->name('staffEdit');
Route::post('/staff-update', [StaffController::class, 'update'])->name('staffUpdate');
