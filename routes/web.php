<?php

use App\Mail\NewLeadNotifMail;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;
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

Route::get('/', [WebHomeController::class, 'redirect'])->name('redirect');
Route::get('/change-lang', [ClientsController::class, 'changeLang'])->name('lead_form.change_lang');

Route::middleware(['lang'])->prefix('{lang}')->group(function () {
    // Route::get('/toggle-language', [WebHomeController::class, 'toggleLanguage'])->name('toggle.language');

    Route::namespace('web')->name('web.')->group(function () {
        Route::get('/', [WebHomeController::class, 'index'])->name('home');
        Route::get('/contact', [WebHomeController::class, 'contact'])->name('contact');
        Route::get('/les-differents-types-de-coaching', [WebHomeController::class, 'coachingTypes'])->name('coaching.types');
    });

    Route::post('/send-message', [MessageController::class, 'sendMessage'])->name('send.message');
    Route::get('/prendre-rendez-vous', [ClientsController::class, 'getLeadForm'])->name('lead_form');
    Route::post('/save-appointement', [ClientsController::class, 'postLeadForm'])->name('leads.store');
    Route::get('/confirmation-message', [ClientsController::class, 'showConfirmation'])->name('confirmation.message');
    Route::get('/sitemap', function () {

        $lang = App::getLocale();


        $sitemap = SitemapGenerator::create(config('app.url'))->getSitemap();

        $sitemap->add(route('web.home', ['lang' => $lang]));
        $sitemap->add(route('web.contact', ['lang' => $lang]));
        $sitemap->add(route('web.coaching.types', ['lang' => $lang]));
        $sitemap->add(route('lead_form', ['lang' => $lang]));
        // $sitemap->add(route('toggle.language', ['lang' => $lang]));
        $sitemap->add(route('confirmation.message', ['lang' => $lang]));

        $sitemap->writeToFile(public_path('sitemap.xml'));
    });
});
