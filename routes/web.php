<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\TeamController;
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
Route::get('/home', function () {
    return redirect()->route('home');
});

//Events
Route::view('/ilkommunity', 'event.ilk')->name('event.ilk');
Route::view('/international', 'event.int')->name('event.int');
Route::view('/workshop', 'event.work')->name('event.work');

//Competition
Route::view('/hacktoday', 'comp.hack')->name('comp.hack');
Route::view('/uxtoday', 'comp.ux')->name('comp.ux');
Route::view('/itbusiness', 'comp.busy')->name('comp.busy');
Route::get('/rulebook/{id}', [TeamController::class, 'rulebook']);  //Rulebooks

//UserController
Route::middleware(['guest'])->group(function () {
    Route::get('/register', [UserController::class, 'indexRegister'])->name('register');
    Route::post('/register', [UserController::class, 'register'])->name('auth.register');

    Route::get('/login', [UserController::class, 'indexLogin'])->name('login');
    Route::post('/login', [UserController::class, 'login'])->name('auth.login');

    Route::get('/forgot', [UserController::class, 'indexForgot'])->name('forgotpass');
    Route::post('/forgot', [UserController::class, 'forgot'])->name('auth.forgotpass');

    Route::get('/reset/{user}/{token}', [UserController::class, 'indexReset'])->name('resetpass');
    Route::post('/reset', [UserController::class, 'reset'])->name('auth.resetpass');
});
Route::middleware(['auth'])->group(function () {
    Route::get('/logout', [UserController::class, 'logout'])->name('logout');
});

//TeamController
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [TeamController::class, 'index'])->name('dashboard');
    Route::post('/uploadtrf', [TeamController::class, 'uploadtrf'])->name('upload.trf');
    Route::post('/uploadprop', [TeamController::class, 'uploadprop'])->name('upload.proposal');
    Route::post('/uploadlead', [TeamController::class, 'uploadlead'])->name('upload.leader');
    Route::post('/uploadamem', [TeamController::class, 'uploadamem'])->name('upload.amember');
    Route::post('/uploadbmem', [TeamController::class, 'uploadbmem'])->name('upload.bmember');
});

//AdminDownloads
Route::prefix('acasdl')->group(function() {
    Route::get('prop/{namafile}', [AdminController::class, 'downloadProp']);
    Route::get('trf/{namafile}', [AdminController::class, 'downloadtrf']);
    Route::get('ktm/{namafile}', [AdminController::class, 'downloadktm']);
    Route::get('skma/{namafile}', [AdminController::class, 'downloadskma']);
});