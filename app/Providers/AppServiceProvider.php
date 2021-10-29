<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\CompanyAnnouncement;
use App\Models\ProductAnnouncement;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer(
            'website.layouts.nav', 
            function ($view) {
                $view->with('latest_product', ProductAnnouncement::orderBy('created_at','desc')->take(1)->get());
                $view->with('latest_company', CompanyAnnouncement::orderBy('created_at','desc')->take(1)->get());
            }
        );
    }
}
