<?php

use App\Mail\NewLeadNotifMail;
use Illuminate\Support\Facades\Mail;
// use App\Http\Controllers\v1\dashboard\auth\AuthController;
// use App\Http\Controllers\v1\dashboard\admin\home\HomeController;
use Spatie\Sitemap\SitemapGenerator;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\v1\web\MessageController;
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



Route::get('/toggle-language', [WebHomeController::class, 'toggleLanguage'])->name('toggle.language');

Route::namespace('web')->name('web.')->group(function () {
    Route::get('/', [WebHomeController::class, 'index'])->name('home');
    Route::get('/contact', [WebHomeController::class, 'contact'])->name('contact');
    Route::get('/les-differents-types-de-coaching', [WebHomeController::class, 'coachingTypes'])->name('coaching.types');
});


// Route::view('/test', 'welcome');

Route::post('/send-message', [MessageController::class, 'sendMessage'])->name('send.message');
Route::get('/prendre-rendez-vous', [ClientsController::class, 'getLeadForm'])->name('lead_form');
Route::post('/save-appointement', [ClientsController::class, 'postLeadForm'])->name('leads.store');
Route::get('/confirmation-message', [ClientsController::class, 'showConfirmation'])->name('confirmation.message');



Route::get('/sitemap', function () {
    $sitemap = SitemapGenerator::create(config('app.url'));

    $sitemap->getSitemap()->add(route('web.home'));
    $sitemap->getSitemap()->add(route('web.contact'));
    $sitemap->getSitemap()->add(route('web.coaching.types'));
    $sitemap->getSitemap()->add(route('lead_form'));
    $sitemap->getSitemap()->add(route('toggle.language'));
    $sitemap->getSitemap()->add(route('confirmation.message'));
    $sitemap->writeToFile(public_path('sitemap.xml'));
});

    // Route::prefix('auth')->group(function () {
    //     Route::get('/signin', [AuthController::class, 'getLogin'])->name('auth.signin');
    //     Route::post('signin', [AuthController::class, 'postSignin'])->name('auth.signin.post');
    // });

    // Route::middleware(['auth'])->group(function () {
    //     Route::prefix('admin')->name('admin.')->group(function () {
    //         Route::get('/', [HomeController::class, 'index'])->name('home');
    //     });
    // });