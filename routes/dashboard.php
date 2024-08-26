<?php

use App\Http\Controllers\Dashboard\Auth\AuthController;
use App\Http\Controllers\Dashboard\Home\HomeController;
use App\Http\Controllers\Dashboard\User\UserController;
use App\Http\Controllers\Dashboard\Structure\HomeStructureController;
use App\Http\Controllers\Dashboard\Structure\ContactUsStructureController;
use App\Http\Controllers\Dashboard\Advertisements\AdvertisementsController;
use App\Http\Controllers\Dashboard\Doctor\DoctorController;
use App\Http\Controllers\Dashboard\ContactUsController;
use App\Http\Controllers\Dashboard\Info\InfoController;
use App\Http\Controllers\Dashboard\Program\ProgramController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers\Dashboard\MemberController;
use App\Http\Controllers\Dashboard\GraduateController;
use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'],
], function () {
    Route::group(['prefix' => 'auth', 'as' => 'auth.'], function () {
        Route::get('login', [AuthController::class, '_login'])->name('_login');

        Route::post('login', [AuthController::class, 'login'])->name('login');

        Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    });

    Route::group(['middleware' => 'auth'], function () {
        Route::get('/', [HomeController::class, 'index'])->name('/');
        Route::resource('users', UserController::class);
        Route::post('users/toggle2',[UserController::class,'toggle'])->name('toggleUser2');
        Route::post('users/{id}', [UserController::class,'reply'])->name('user.reply');
        Route::get('infos/edit',[InfoController::class,'edit'])->name('infos.edit');
        Route::post('infos/update',[InfoController::class,'update'])->name('infos.update');
        Route::group(['prefix' => 'structures'], function () {
            Route::resource('home-content', HomeStructureController::class)->only(['index', 'store']);
            Route::resource('contact-us-content', ContactUsStructureController::class)->only('store','index');
        });

        Route::resource('advertisements', AdvertisementsController::class);
        Route::resource('programs', ProgramController::class);
        Route::resource('homedoctors', DoctorController::class);
        Route::resource('contactus', ContactUsController::class);
        Route::post('contactusreply/{id}', [ContactUsController::class,'reply'])->name('contactus.reply');

        Route::resource('members', MemberController::class);
        Route::resource('graduates', GraduateController::class);

    });
});
