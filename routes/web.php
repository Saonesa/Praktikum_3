<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\TripController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
    return view('auth.login2');
});

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/user-profile', [DashboardController::class, 'profile']);
Route::get('/list-post', [PostController::class, 'index']);
Route::get('/add-post', [PostController::class, 'create']);
Route::get('/edit-post', [PostController::class, 'edit']);
Route::get('/list-user', [UserController::class, 'index']);

Route::get('/list-article', [ArticleController::class, 'index'])->name('article.index');


Route::get('/list-trip', [TripController::class, 'index']);

