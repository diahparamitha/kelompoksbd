<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\TvshowController;
use App\Http\Controllers\daftarkuController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\EpisodeController;
use App\Http\Controllers\DirectorController;
use App\Http\Controllers\PemainController;

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
Route::get('/film-info/{daftar_film}', [FilmController::class, 'film2'])->middleware('auth');
Route::get('/film/tambah', [FilmController::class, 'tambahFilm'])->middleware('admin');
Route::post('/film/tambah', [FilmController::class, 'tambahFilm1']);
Route::get('/film-info/edit/{id}', [FilmController::class, 'edit']);
Route::post('/film-info/update/{id}', [FilmController::class, 'update']);
Route::post('/film-info/delete/{id}', [FilmController::class, 'delete']);

//Halaman tvshow
Route::get('/tvshow', [TvshowController::class, 'index'])->middleware('auth');
Route::get('/tvshow-info/{daftar_tvshow}', [TvshowController::class, 'infoShow'])->middleware('auth');
Route::get('/tvshow/tambah', [TvshowController::class, 'tambahShow'])->middleware('admin');
Route::post('/tvshow/tambah', [TvshowController::class, 'tambahShow1']);
Route::get('/tvshow-info/edit/{id}', [TvshowController::class, 'edit']);
Route::post('/tvshow-info/delete/{id}', [TvshowController::class, 'delete']);
Route::post('/tvshow-info/update/{id}', [TvshowController::class, 'update']);

//Halaman genre
Route::get('/genre', [GenreController::class, 'index']);
Route::post('/genre/tambah', [GenreController::class, 'tambah']);
Route::get('/genre/edit/{id}', [GenreController::class, 'edit']);
Route::post('/genre/update/{id}', [GenreController::class, 'update']);

//Halaman menu
Route::get('/menu', [MenuController::class, 'index']);
Route::post('/menu/tambah', [MenuController::class, 'tambah']);
Route::get('/menu/edit/{id}', [MenuController::class, 'edit']);
Route::post('/menu/update/{id}', [MenuController::class, 'update']);

//Halaman episode
Route::get('/episode', [EpisodeController::class, 'index']);
Route::post('/episode/tambah', [EpisodeController::class, 'tambah']);
Route::get('/episode/edit/{id}', [EpisodeController::class, 'edit']);
Route::post('/episode/update/{id}', [EpisodeController::class, 'update']);

//Halaman director
Route::get('/director', [DirectorController::class, 'index']);
Route::post('/director/tambah', [DirectorController::class, 'tambah']);
Route::get('/director/edit/{id}', [DirectorController::class, 'edit']);
Route::post('/director/update/{id}', [DirectorController::class, 'update']);

//Halaman pemain
Route::get('/pemain', [PemainController::class, 'index']);
Route::post('/pemain/tambah', [PemainController::class, 'tambah']);
Route::get('/pemain/edit/{id}', [PemainController::class, 'edit']);
Route::post('/pemain/update/{id}', [PemainController::class, 'update']);

//Halaman daftarku
Route::get('/daftarku', [daftarkuController::class, 'daftarku']);
Route::get('/history', [daftarkuController::class, 'history']);
