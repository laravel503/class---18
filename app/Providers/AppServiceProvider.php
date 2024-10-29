<?php

namespace App\Providers;

use Illuminate\Support\Facades\View as ShareView;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades;
use Illuminate\View\View;

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
    public function boot(): void
    {
        $name = ["Habib", "Rubel", "Sumon"];

        $man = ["name"=> "Ridoy", "age"=>25, "address"=>"Khulna"];
        ShareView::share("man", $man);

        Facades\View::composer('welcome', function (View $view) {
            $view->with("name1", "unknown");
        });
    }
}
