<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Menus;
use App\Ads;
use App\Articles;
use App\Homepagesettings;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
         view()->composer('frontend/*', function ($view)
        {
            $listele = Homepagesettings::first();

            $view->with('listele', $listele);
        });


         view()->composer('frontend/*', function ($view)
        {
            $menu = Menus::all();

            $view->with('menu', $menu);
        });

        view()->composer('frontend/*', function ($view)
        {
            $reklam = Ads::first();

            $view->with('reklam', $reklam);
        });

         view()->composer('frontend/*', function ($view)
        {
            $articles = Articles::orderBy('id', 'desc')->first();

            $view->with('articles', $articles);
        });

         view()->composer('frontend/*', function ($view)
        {
            $artic = Articles::orderBy('id', 'desc')->take(4)->get();

            $view->with('artic', $artic);
        });

         view()->composer('frontend/*', function ($view)
        {
            $allarticles = Articles::orderBy('id', 'desc')->paginate(10);

            $view->with('allarticles', $allarticles);
        });
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
