<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\ContactInfo;
use App\Models\Category;

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
        $contact_info = ContactInfo::first();
        $categories   = Category::all();
        View::share([
            'contact'   => $contact_info ,
            'categories'=> $categories ,
        ]);
    }
}
