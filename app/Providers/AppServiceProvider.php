<?php

namespace App\Providers;

use App\Models\Contact;
use App\Models\Footer;
use App\Models\ServiceDetail;
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
        $contact = Contact::first();
        $services = ServiceDetail::get();
        $footer = Footer::first();
        view()->share('contacts', $contact);
        view()->share('servicess', $services);
        view()->share('footer', $footer);
    }
}
