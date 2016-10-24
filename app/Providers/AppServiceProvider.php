<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Categories;
use View;

class AppServiceProvider extends ServiceProvider
{
    // protected $categories;
    
    // public function __construct(Categories $categories)
    // {
    //     $this->categories = $categories;
    // }
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $categories = \App\Categories::all();
        View::share('categories', $categories);
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
