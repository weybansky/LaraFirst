<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

// added so as to prevent db string error
use Illuminate\Support\Facades\Schema;
use App\Post;

class AppServiceProvider extends ServiceProvider
{
    
    public function boot()
    {
        //added so as to prevent db string error
        Schema::defaultStringlength(191);

        view()->composer('include.sidebar', function($view){
            $view->with('archives', Post::archives());
        });

    }

    public function register()
    {
        //
    }
}
