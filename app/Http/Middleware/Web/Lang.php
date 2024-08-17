<?php

namespace App\Http\Middleware\Web;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;

class Lang
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // Get the current language from the session or use the fallback locale
        $lang = session()->get('lang', Config::get('app.fallback_locale'));

        // Ensure the selected language is one of the available languages
        if (!in_array($lang, Config::get('app.languages_available'))) {
            $lang = Config::get('app.fallback_locale');
        }

        // Set the application locale to the selected language
        App::setLocale($lang);

        // Update the session with the current language
        session()->put('lang', $lang);

        // Proceed with the request
        return $next($request);
    }
}
