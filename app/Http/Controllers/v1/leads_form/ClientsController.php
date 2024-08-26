<?php

namespace App\Http\Controllers\v1\leads_form;

use App\Models\Client;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Mail\NewLeadNotifMail;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Config;
use RalphJSmit\Laravel\SEO\Support\SEOData;

class ClientsController extends Controller
{

    public function changeLang()
    {


        // dd(Route::currentRouteName());

        // dd(session()->get('lang'));

        if ($lang = request()->lang) {
            App::setLocale($lang);
            session()->put('lang', $lang);
            return redirect()->route('lead_form', ['lang' => $lang]);
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

        return redirect()->route('lead_form', ['lang' => $lang]);
    }
    public function getLeadForm()
    {

        $seoData = new SEOData(
            description: "Mohamed BenMoussa est bien plus qu'un coach ordinaire. Avec des années d'expérience et une compréhension profonde des complexités de la vie moderne, il offre des conseils perspicaces et des stratégies pratiques pour aider les individus à surmonter les obstacles, à développer un état d'esprit positif et à établir des relations significatives et épanouissantes",
            robots: 'index,follow,max-snippet:-1,max-image-preview:large,max-video-preview:-1',
            title: 'Prendre Rendez-Vous',
            image: asset('/web/images/favicon1.png'),
            canonical_url: route('lead_form', ['lang' => session()->get('lang')]),
            openGraphTitle: 'Mohamed BenMoussa Consulting',
            author: 'BenMoussaConsulting',
            locale: 'fr'

        );

        return view('v1.leads_form.form', compact('seoData'));
    }

    public function PostLeadForm()
    {


        $oldClient = Client::where('phone_number', request()->phone_number)->first();
        if ($oldClient) {
            return response()->json([
                'message' => __('messages.lead_already_exist') . " 📋\n" . __('messages.contact_us_on') . " 0520816447 / 0665228542"
            ], 400);
        }
        try {
            $req = request();
            $client = new Client();
            $client->full_name = $req->full_name ? $req->full_name : null;
            $client->phone_number = $req->phone_number;
            $client->campaign_name = $req->campaign_name ? $req->campaign_name : null;
            $client->adset_name = $req->adset_name ? $req->adset_name : null;
            $client->ad_name = $req->ad_name ? $req->ad_name : null;
            $client->created_at = now("Africa/Casablanca");
            $client->updated_at = now("Africa/Casablanca");
            $client->save();

            // Pass the $client object as part of the data array
            Mail::to("contact@benmoussaconsulting.com")->send(new NewLeadNotifMail($client));

            return response()->json(['redirect' => route('confirmation.message', ['client' => cryptID($client->id), 'lang' => session()->get('lang')])]);
        } catch (\Throwable $th) {
            return response()->json(['message' => $th->getMessage()], 500);
        }
    }




    public function showConfirmation(Request $request)
    {

        $seoData = new SEOData(
            description: "Mohamed BenMoussa est bien plus qu'un coach ordinaire. Avec des années d'expérience et une compréhension profonde des complexités de la vie moderne, il offre des conseils perspicaces et des stratégies pratiques pour aider les individus à surmonter les obstacles, à développer un état d'esprit positif et à établir des relations significatives et épanouissantes",
            robots: 'index,follow,max-snippet:-1,max-image-preview:large,max-video-preview:-1',
            title: 'Confirmation du rendez-vous',
            image: asset('/web/images/favicon1.png'),
            canonical_url: route('confirmation.message', ['lang' => session()->get('lang')]),
            openGraphTitle: 'Mohamed BenMoussa Consulting',
            author: 'BenMoussaConsulting',
            locale: 'fr'

        );

        

        $client = Client::where('id', dcryptID($request->client))->first();

        if (!$client) {
            return redirect()->route('web.home', ['lang' => session()->get('lang')]);
        }

        return view('v1.leads_form.success_page', compact('client', 'seoData'));
    }
}
