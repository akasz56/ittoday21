<?php

use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserController;
use App\Models\Team;
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
Route::view('/', 'home')
    ->name('home');
Route::view('/about', 'about')
    ->name('about');
Route::view('/event', 'event')
    ->name('event');
Route::view('/competition', 'competition')
    ->name('competition');
Route::get('/home', function () {
    return redirect()->route('home');
});

//Events
Route::view('/ilkommunity', 'event.ilk')
    ->name('event.ilk');
Route::view('/international', 'event.int')
    ->name('event.int');
Route::view('/workshop', 'event.work')
    ->name('event.work');

//Competition
Route::view('/hacktoday', 'comp.hack')
    ->name('comp.hack');
Route::view('/uxdesign', 'comp.ux')
    ->name('comp.ux');
Route::view('/itbusiness', 'comp.busy')
    ->name('comp.busy');

// //UserController
// Route::middleware(['guest'])->group(function () {
//     Route::get('/login', [UserController::class, 'login'])
//         ->name('login');
//     Route::get('/register', [UserController::class, 'register'])
//         ->name('register');
//     Route::post('/create', [UserController::class, 'create'])
//         ->name('auth.create');
//     Route::post('/check', [UserController::class, 'check'])
//         ->name('auth.check');
// });
// Route::middleware(['auth'])->group(function () {
//     Route::get('/logout', [UserController::class, 'logout'])
//         ->name('logout');
// });

// //TeamController
// Route::middleware(['auth'])->group(function () {
//     Route::get('/dashboard', [TeamController::class, 'index'])
//         ->name('dashboard');
//     Route::post('/upload', [TeamController::class, 'upload'])
//         ->name('upload');
// });