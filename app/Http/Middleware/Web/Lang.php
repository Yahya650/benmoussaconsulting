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
        $lang = $request->route('lang') ?? session('lang', Config::get('app.fallback_locale'));

        if (!in_array($lang, Config::get('app.languages_available'))) {
            return redirect()->route('redirect');
            // $lang = Config::get('app.fallback_locale');
        }

        App::setLocale($lang);

        session()->put('lang', $lang);

        return $next($request);
    }
}
