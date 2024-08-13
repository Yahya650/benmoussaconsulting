<?php

namespace App\Http\Controllers\v1\web;

use App\Http\Controllers\Controller;
use RalphJSmit\Laravel\SEO\Support\SEOData;

class HomeController extends Controller
{
    public function index()
    {

        $seoData = new SEOData(
            description: "Mohamed BenMoussa est bien plus qu'un coach ordinaire. Avec des années d'expérience et une compréhension profonde des complexités de la vie moderne, il offre des conseils perspicaces et des stratégies pratiques pour aider les individus à surmonter les obstacles, à développer un état d'esprit positif et à établir des relations significatives et épanouissantes",
            robots: 'index,follow,max-snippet:-1,max-image-preview:large,max-video-preview:-1',
            title: 'Accueil',
            image: asset('/web/images/favicon1.png'),
            canonical_url: route('web.home'),
            openGraphTitle: 'Mohamed BenMoussa Consulting',
            author: 'BenMoussaConsulting',
            locale: 'fr'

        );

        return view('v1.web.index', compact('seoData'));
        // return "500";
    }

    public function contact()
    {

        $seoData = new SEOData(
            description: "Mohamed BenMoussa est bien plus qu'un coach ordinaire. Avec des années d'expérience et une compréhension profonde des complexités de la vie moderne, il offre des conseils perspicaces et des stratégies pratiques pour aider les individus à surmonter les obstacles, à développer un état d'esprit positif et à établir des relations significatives et épanouissantes",
            robots: 'index,follow,max-snippet:-1,max-image-preview:large,max-video-preview:-1',
            title: 'Contactez-nous',
            image: asset('/web/images/favicon1.png'),
            canonical_url: route('web.contact'),
            openGraphTitle: 'Mohamed BenMoussa Consulting',
            author: 'BenMoussaConsulting',
            locale: 'fr'
        );

        return view('v1.web.pages.contact', compact('seoData'));
        // return "500";
    }

    public function coachingTypes()
    {

        $seoData = new SEOData(
            description: "Mohamed BenMoussa est bien plus qu'un coach ordinaire. Avec des années d'expérience et une compréhension profonde des complexités de la vie moderne, il offre des conseils perspicaces et des stratégies pratiques pour aider les individus à surmonter les obstacles, à développer un état d'esprit positif et à établir des relations significatives et épanouissantes",
            robots: 'index,follow,max-snippet:-1,max-image-preview:large,max-video-preview:-1',
            title: 'Les différents types de coaching individuel',
            image: asset('/web/images/favicon1.png'),
            canonical_url: route('web.coaching.types'),
            openGraphTitle: 'Mohamed BenMoussa Consulting',
            author: 'BenMoussaConsulting',
            locale: 'fr'
        );

        return view('v1.web.pages.coaching-types', compact('seoData'));
        // return "500";
    }
}
