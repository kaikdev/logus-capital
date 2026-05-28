<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use App\Models\Metatags;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        View::composer('*', function ($view) {

            $routeName = Route::currentRouteName();
    
            $metatag = null;
    
            if ($routeName) {
                $metatag = Metatags::where('route_name', $routeName)->first();
            }
    
            $view->with('metatag', $metatag);
        });
    }
}
