<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(['pages.index', 'pages.services',
        'pages.contact', 'auth.upload', 'pages.about-us', 'google2fa.index', 'google2fa.register'], 'App\Http\ViewComposers\VerifyComposer');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
