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
        $lang = session()->get('lang', Config::get('app.fallback_locale'));

        // Check if the language is available in the app's configured languages
        if (!in_array($lang, Config::get('app.languages_available'))) {
            $lang = Config::get('app.fallback_locale');
        }

        // Set the application locale
        App::setLocale($lang);

        // Update the session with the current language
        session()->put('lang', $lang);

        return $next($request);
    }
}
