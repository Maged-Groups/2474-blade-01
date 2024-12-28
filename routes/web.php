<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ComponentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BladeController;
use App\Http\Controllers\TempController;
use App\Http\Controllers\DirctvController;

/* |-------------------------------------------------------------------------- | Web Routes |-------------------------------------------------------------------------- | | Here is where you can register web routes for your application. These | routes are loaded by the RouteServiceProvider within a group which | contains the "web" middleware group. Now create something great! | */

Route::get('/', function () {
    return view('welcome');
});

Route::name('blade.')
    ->prefix('blade')
    ->controller(BladeController::class)
    ->group(function () {
        Route::get('vars', 'vars')->name('vars');
        Route::get('array', 'array')->name('array');
        Route::get('extracted', 'extracted')->name('extracted');
    });

Route::name('temp.')
    ->prefix('temp')
    ->controller(TempController::class)
    ->group(function () {
        Route::get('page_1', 'page_1')->name('page_1');
        Route::get('page_2', 'page_2')->name('page_2');
        Route::get('page_3', 'page_3')->name('page_3');
        Route::get('page_4', 'page_4')->name('page_4');
    });

Route::name('dirctv.')
    ->prefix('dirctv')
    ->controller(DirctvController::class)
    ->group(function () {
        for ($i = 1; $i <= 7; $i++) {
            Route::get("page_$i", "page_$i")->name("page_$i");
        }
    });


Route::name('comps.')
    ->prefix('comps')
    ->controller(ComponentController::class)
    ->group(function () {
        Route::get('input', 'input')->name('input');
    });



// Auth

Route::prefix('auth')
    ->name('auth.')
    ->controller(AuthController::class)->group(function () {
        Route::get('login', 'login')->name('login');
        Route::get('register', 'register')->name('register');
        Route::get('logout', 'logout')->name('logout');
        Route::get('logout', 'logout')->name('logout');
    });

Route::prefix('users')
    ->controller(UserController::class)
    ->name('users.')
    ->group(function () {
        Route::get('account', 'account')->name('account');
        Route::get('profile', 'profile')->name('profile');
    });
