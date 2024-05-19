<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }


    public function boot()
    {
        if (!$this->app->runningInConsole()) {

            view()->composer([
                'frontend.inc.sidebar',
                'frontend.inc.menu',
            ], function ($view) {
                $categories = Category::with('subCategories')->whereNull('parent_id')->get();
                $view->with('categories', $categories);
            });
        }
    }
}
