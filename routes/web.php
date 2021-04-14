<?php

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

//mainpages
Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/event', 'event')->name('event');
Route::view('/competition', 'competition')->name('competition');

//auth
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/create', [UserController::class, 'create'])->name('auth.create');
Route::post('/check', [UserController::class, 'check'])->name('auth.check');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

//dashboards
Route::view('/dashboard', 'dashboard')->name('dashboard')->middleware('auth');
