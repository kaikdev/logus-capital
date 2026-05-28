<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\RateLimiter;
use Devrabiul\ToastMagic\Facades\ToastMagic;

class RateLimitContato
{
    public function handle($request, Closure $next)
    {
        $key = 'contato:' . $request->ip();

        if (RateLimiter::tooManyAttempts($key, 5)) {
            ToastMagic::error('Muitas tentativas. Aguarde alguns minutos.');
            return redirect()->back();
        }

        RateLimiter::hit($key, 60);

        return $next($request);
    }
}
