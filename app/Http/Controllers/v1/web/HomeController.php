<?php

namespace App\Http\Controllers\v1\web;

use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;
use RalphJSmit\Laravel\SEO\Support\SEOData;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Route;

class HomeController extends Controller
{

    public function toggleLanguage()
    {
        // Get the current language from the session or fallback to the default
        $currentLang = request()->lang;

        // Toggle language
        $newLang = $currentLang === 'fr' ? 'ar' : 'fr';

        // Set the new language in the session
        session()->put('lang', $newLang);

        // Set the application locale
        App::setLocale($newLang);
        // dd($newLang);

        // Route::

        // Redirect back to the previous page
        return redirect()->back()->withInput(['lang' => $newLang]);
    }

    public function redirect()
    {

        // dd(session()->get('lang'));

        if ($lang = request()->lang) {
            App::setLocale($lang);
            session()->put('lang', $lang);
            return redirect()->route('web.home', ['lang' => $lang]);
        }

        $lang = session()->get('lang');

        if (in_array($lang, Config::get('app.languages_available'))) {
            App::setLocale($lang);
            session()->put('lang', $lang);
        } else {
            $lang = Config::get('app.fallback_locale');
            App::setLocale($lang);
            session()->put('lang', $lang);
        }

        return redirect()->route('web.home', ['lang' => $lang]);
    }

    public function index()
    {

        $seoData = new SEOData(
            description: "Mohamed BenMoussa est bien plus qu'un coach ordinaire. Avec des années d'expérience et une compréhension profonde des complexités de la vie moderne, il offre des conseils perspicaces et des stratégies pratiques pour aider les individus à surmonter les obstacles, à développer un état d'esprit positif et à établir des relations significatives et épanouissantes",
            robots: 'index,follow,max-snippet:-1,max-image-preview:large,max-video-preview:-1',
            title: 'Accueil',
            image: asset('/web/images/favicon1.png'),
            canonical_url: route('web.home', ['lang' => session()->get('lang')]),
            openGraphTitle: 'Mohamed BenMoussa Consulting',
            author: 'BenMoussaConsulting',
            locale: 'fr'

        );

        return view('v2.web.index', compact('seoData'));
    }

    public function contact()
    {

        $seoData = new SEOData(
            description: "Mohamed BenMoussa est bien plus qu'un coach ordinaire. Avec des années d'expérience et une compréhension profonde des complexités de la vie moderne, il offre des conseils perspicaces et des stratégies pratiques pour aider les individus à surmonter les obstacles, à développer un état d'esprit positif et à établir des relations significatives et épanouissantes",
            robots: 'index,follow,max-snippet:-1,max-image-preview:large,max-video-preview:-1',
            title: 'Contactez-nous',
            image: asset('/web/images/favicon1.png'),
            canonical_url: route('web.contact', ['lang' => session()->get('lang')]),
            openGraphTitle: 'Mohamed BenMoussa Consulting',
            author: 'BenMoussaConsulting',
            locale: 'fr'
        );

        return view('v2.web.pages.contact', compact('seoData'));
        // return "500";
    }

    public function coachingTypes()
    {

        $seoData = new SEOData(
            description: "Mohamed BenMoussa est bien plus qu'un coach ordinaire. Avec des années d'expérience et une compréhension profonde des complexités de la vie moderne, il offre des conseils perspicaces et des stratégies pratiques pour aider les individus à surmonter les obstacles, à développer un état d'esprit positif et à établir des relations significatives et épanouissantes",
            robots: 'index,follow,max-snippet:-1,max-image-preview:large,max-video-preview:-1',
            title: 'Les différents types de coaching individuel',
            image: asset('/web/images/favicon1.png'),
            canonical_url: route('web.coaching.types', ['lang' => session()->get('lang')]),
            openGraphTitle: 'Mohamed BenMoussa Consulting',
            author: 'BenMoussaConsulting',
            locale: 'fr'
        );

        return view('v2.web.pages.coaching-types', compact('seoData'));
        // return "500";
    }
    // public function page404()
    // {

    //     $seoData = new SEOData(
    //         description: "Mohamed BenMoussa est bien plus qu'un coach ordinaire. Avec des années d'expérience et une compréhension profonde des complexités de la vie moderne, il offre des conseils perspicaces et des stratégies pratiques pour aider les individus à surmonter les obstacles, à développer un état d'esprit positif et à établir des relations significatives et épanouissantes",
    //         robots: 'index,follow,max-snippet:-1,max-image-preview:large,max-video-preview:-1',
    //         title: 'Les différents types de coaching individuel',
    //         image: asset('/web/images/favicon1.png'),
    //         canonical_url: route('errors.404', ['lang' => session()->get('lang')]),
    //         openGraphTitle: 'Mohamed BenMoussa Consulting',
    //         author: 'BenMoussaConsulting',
    //         locale: 'fr'
    //     );

    //     return view('errors.404', compact('seoData'));
    // }
}
