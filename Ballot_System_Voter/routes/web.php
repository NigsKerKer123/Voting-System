<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SboController;
use App\Http\Controllers\SscController;
use App\Http\Controllers\CastOrEditController;

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
    return redirect()->route('Auth.index');
});

//Authentication and welcome route
Route::controller(AuthController::class)->group(function () {
    //Login
    Route::get('/login', 'index')->name('Auth.index')->middleware('guest');
    Route::post('/login', 'login')->name('Auth.login');
    Route::get('/logout', 'logout')->name('Auth.logout')->middleware('auth');

    //Passkey
    Route::get('/sendPasskey', 'forgotPasskey')->name('passkey.index')->middleware('guest');
    Route::post('/sendPasskey', 'sendPasskey')->name('passkey.send')->middleware('guest');

    //welcome
    Route::get('/welcome', 'welcome')->name('welcome')->middleware('auth');
});

//SBO API
Route::middleware(['auth'])->group(function () {
    Route::controller(SboController::class)->group(function () {
        Route::get('/sbo', 'index')->name('sbo.index');
        Route::post('/sbo', 'vote')->name('sbo.vote');
    });
});

//SSC API
Route::middleware(['auth'])->group(function () {
    Route::controller(SscController::class)->group(function () {
        Route::get('/ssc', 'index')->name('ssc.index');
        Route::post('/ssc', 'vote')->name('ssc.vote');
    });
});

//Cast or Edit API
Route::middleware(['auth'])->group(function () {
    Route::controller(CastOrEditController::class)->group(function () {
        Route::get('/castOrEdit', 'index')->name('castOrEdit.index');
        Route::post('/castOrEdit', 'cast')->name('castOrEdit.cast');
    });
});

Route::get('/goodbye', function () {
    return view('goodbye');
})->name('goodbye');