<?php

use App\Mail\NewLeadNotifMail;
use Illuminate\Support\Facades\Mail;
// use App\Http\Controllers\v1\dashboard\auth\AuthController;
// use App\Http\Controllers\v1\dashboard\admin\home\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\v1\leads_form\ClientsController;
use App\Http\Controllers\v1\web\HomeController as WebHomeController;

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


Route::view('/test', 'v1.mails.new_lead');

Route::get('/take-appointment', [ClientsController::class, 'getLeadForm'])->name('lead_form');
Route::post('/post-appointment', [ClientsController::class, 'postLeadForm'])->name('leads.store');
Route::get('/confirmation-message', [ClientsController::class, 'showConfirmation'])->name('confirmation.message');

// Route::prefix('auth')->group(function () {
//     Route::get('/signin', [AuthController::class, 'getLogin'])->name('auth.signin');
//     Route::post('signin', [AuthController::class, 'postSignin'])->name('auth.signin.post');
// });

// Route::middleware(['auth'])->group(function () {
//     Route::prefix('admin')->name('admin.')->group(function () {
//         Route::get('/', [HomeController::class, 'index'])->name('home');
//     });
// });
