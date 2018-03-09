<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;


class AppServiceProvider extends ServiceProvider
{
    /**
     * @return void
     */
    
    public function boot()
    {
View::share('raktas', 'kintamsis');
    View::composer(
            'layout.main', 'App\Http\ViewComposers\DataComposer'
        );
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
