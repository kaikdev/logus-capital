<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class SetLocale
{
    public function handle($request, Closure $next)
    {
        $urlLocale = $request->route('locale')
            ?? Session::get('locale')
            ?? 'pt_br';

        Session::put('locale', $urlLocale);

        App::setLocale(match ($urlLocale) {
            'pt_br' => 'pt_BR',
            default => $urlLocale,
        });

        return $next($request);
    }
}