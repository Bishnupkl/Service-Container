<?php

namespace App\Providers;

use App\Billing\BankPaymentGateway;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        Schema::defaultStringlength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(BankPaymentGateway::class, function ($app) {
            return new BankPaymentGateway('usd');
        });
    }
}
