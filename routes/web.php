<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers\Website\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



    Route::get('/home',[HomeController::class,'index'])->name('index');
    Route::get('/doctors',[HomeController::class,'doctors'])->name('doctors');
    Route::get('/membershome',[HomeController::class,'members'])->name('membershome');
    Route::get('/graduateshome',[HomeController::class,'graduates'])->name('graduateshome');
    Route::get('/contact',[HomeController::class,'contact'])->name('contact');
    Route::post('/contact',[HomeController::class,'storecontact'])->name('storecontact');
    Route::get('/ads-details/{id}',[HomeController::class,'ads_details'])->name('ads_details');
    Route::get('/program-details/{id}',[HomeController::class,'program_details'])
    // ->middleware('auth.site:your_guard_name')
    ->middleware('auth.site:website')->name('program_details');

    Route::get('/register',[HomeController::class,'getregister'])->name('getregister');
    Route::post('/register',[HomeController::class,'register'])->name('register');
    Route::get('/login',[HomeController::class,'getlogin'])->name('getlogin');
    Route::post('/login',[HomeController::class,'login'])->name('login');
    Route::post('logout', [HomeController::class, 'logout'])->name('logout');
