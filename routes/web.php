<?php

use App\Http\Controllers\v1\dashboard\admin\home\HomeController;
use App\Http\Controllers\v1\dashboard\auth\AuthController;
use App\Http\Controllers\v1\web\HomeController as WebHomeController;
use Illuminate\Support\Facades\Route;

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



Route::namespace('web')->name('web.')->group(function () {
    Route::get('/', [WebHomeController::class, 'index'])->name('home');
    Route::get('/contact', [WebHomeController::class, 'contact'])->name('contact');
    Route::get('/les-differents-types-de-coaching', [WebHomeController::class, 'coachingTypes'])->name('coaching.types');
});



Route::prefix('auth')->group(function () {
    Route::get('/signin',[AuthController::class,'getLogin'])->name('auth.signin');
    Route::post('signin', [AuthController::class, 'postSignin'])->name('auth.signin.post');
});

Route::middleware(['auth'])->group(function () {
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('/',[HomeController::class,'index'])->name('home');
    });
});
