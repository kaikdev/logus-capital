<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class SetLocale
{
    public function handle($request, Closure $next)
    {
        $locale = $request->route('locale') 
            ?? Session::get('locale') 
            ?? config('app.locale');

        if (in_array($locale, config('app.available_locales'))) {
            App::setLocale($locale);
            Session::put('locale', $locale);
        }

        return $next($request);
    }
}