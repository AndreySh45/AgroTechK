<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

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
        /* Paginator::defaultView('view-name');
        Paginator::defaultSimpleView('view-name'); */

        view()->composer(['front.shop','front.categories'], function($view){
            $view->with('categories', Category::orderBy('id')->withCount('products')->get());
        });
    }
}
