<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

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

//Halaman Beranda dan User
Route::get('/', [UserController::class, 'index']);
Route::get('/login', [UserController::class, 'login']);
Route::post('/login', [UserController::class, 'loginAkun']);
Route::post('/logout', [UserController::class, 'logoutAkun']);
Route::get('/register', [UserController::class, 'register']);
Route::post('/registerAkun', [UserController::class, 'registerAkun']);

Route::get('/user/{id}', [UserController::class, 'detail']);
Route::get('/user/edit/{id}', [UserController::class, 'edit']);
Route::post('/user/update/{id}', [UserController::class, 'update']);

//Halaman admin
Route::get('/admin', [AdminController::class, 'index']);