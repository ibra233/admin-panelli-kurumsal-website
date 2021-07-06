<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;

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
        //
     $time=DB::table('calisma_saat')->first();

     view()->share('workTime', $time);

     $contact=DB::table('iletisim')->first();
     view()->share('contact',$contact);
    }
}
