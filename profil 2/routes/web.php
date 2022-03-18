<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\EditGaleriController;
use App\Http\Controllers\EditNewsController;




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

Route::resource('/', HomeController::class);
Route::resource('home', HomeController::class);
Route::resource('profil', ProfilController::class);
Route::resource('news', NewsController::class);
Route::resource('galeri', GaleriController::class);
Route::resource('kontak', KontakController::class);
Route::resource('editgaleri', EditGaleriController::class);
Route::resource('editnews', EditNewsController::class);




