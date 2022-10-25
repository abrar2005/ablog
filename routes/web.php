<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserPages;
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

// Navigation bar pages controller.
Route::get('/trending', [HomeController::class, 'trending'])->name('home.trending');
Route::get('/about', [HomeController::class, 'about'])->name('home.about');
Route::get('/explore', [HomeController::class, 'explore'])->name('home.explore');
Route::get('/blogit', [HomeController::class, 'blogit'])->name('home.blogit')->middleware("auth");


// Authentication controller.
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/sign_up', [AuthController::class, 'sign_up'])->name('sign_up');
Route::post('/register_login', [AuthController::class, 'register_login'])->name('register_login');
Route::post('/register_sign_up', [AuthController::class, 'register_sign_up'])->name('register_sign_up');


// All post controller
Route::get('/post', [PostController::class, 'show_post'])->name('show_post');


// chage the redirct of the ('/') in this route.
Route::get('/{url_userID?}', [UserPages::class, 'show_user'])->name('show_user');   