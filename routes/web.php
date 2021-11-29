<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\TvshowController;
use App\Http\Controllers\daftarkuController;
use App\Http\Controllers\IndexController;

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
Route::get('/', [IndexController::class, 'index']);
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login', [UserController::class, 'loginAkun']);
Route::post('/logout', [UserController::class, 'logoutAkun']);
Route::get('/register', [UserController::class, 'register']);
Route::post('/registerAkun', [UserController::class, 'registerAkun']);

Route::get('/user/{id}', [UserController::class, 'detail']);
Route::get('/user/edit/{id}', [UserController::class, 'edit']);
Route::post('/user/update/{id}', [UserController::class, 'update']);
Route::post('/user/delete/{id}', [UserController::class, 'delete']);

//Halaman admin
Route::get('/admin', [AdminController::class, 'index']);
Route::get('/data-tontonan', [AdminController::class, 'tonton']);
Route::get('/data-tontonan/film', [AdminController::class, 'tontonFilm']);

//Halaman film
Route::get('/film', [FilmController::class, 'index'])->middleware('auth');
Route::get('/film-info/{id}', [FilmController::class, 'film2']);
Route::get('/film/tambah', [FilmController::class, 'tambahFilm'])->middleware('admin');
Route::post('/film/tambah', [FilmController::class, 'tambahFilm1']);
Route::post('/film-info/delete/{id}', [FilmController::class, 'delete']);

//Halaman tvshow
Route::get('/tvshow', [TvshowController::class, 'index'])->middleware('auth');
Route::get('/tvshow-info/{id}', [TvshowController::class, 'infoShow']);
Route::get('/tvshow/tambah', [TvshowController::class, 'tambahShow'])->middleware('admin');
Route::post('/tvshow/tambah', [TvshowController::class, 'tambahShow1']);
Route::get('/tvshow-info/edit/{id}', [TvshowController::class, 'edit']);
Route::post('/tvshow-info/delete/{id}', [TvshowController::class, 'delete']);
Route::post('/tvshow-info/update/{id}', [TvshowController::class, 'update']);

//Halaman daftarku
Route::get('/daftarku', [daftarkuController::class, 'daftarku']);

