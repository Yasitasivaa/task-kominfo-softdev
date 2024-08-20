<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Laravel\Passport\Passport;

class AppServiceProvider extends ServiceProvider
{
    public function boot():void
    {
        // $this->registerPolicies();
        // Passport::routes();
        Passport::enablePasswordGrant();
        // Passport::tokensExpireIn(now()->addDays(15));
        // Passport::refreshTokensExpireIn(now()->addDays(30));
        // Passport::personalAccessTokensExpireIn(now()->addMonths(6));
    }
}
