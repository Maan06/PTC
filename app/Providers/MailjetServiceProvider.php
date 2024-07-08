<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Mailjet\Client;

class MailjetServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('mailjet', function() {
            $mj = new Client(config('services.mailjet.api_key'), config('services.mailjet.api_secret'), true, ['version' => 'v3.1']);
            return $mj;
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
