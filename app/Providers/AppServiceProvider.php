<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use GuzzleHttp;

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
        // Force HTTPS connection
        \URL::forceScheme('https');

        // Refresh currency exchange rates every 100000 seconds (~27.8 hours)
        cache()->remember('currency_rates', 100000, function () {
            $reverse_rates = [];
            $client = new GuzzleHttp\Client();
            $result = $client->request('GET', 'http://apilayer.net/api/live', [
                'query' => [
                    'access_key' => config('currencylayer.api'),
                    'source' => 'usd',
                    'currencies' => implode(',', config('app.currencies')),
                    'format' => 1
                ]
            ]);
            if ($result->getStatusCode() == 200) {
                $result = $result->getBody()->getContents();
                $rates = json_decode($result, true)['quotes'];
                // reverse rates
                foreach ($rates as $pair => $rate) {
                    $pair = strtolower(substr($pair, 3));
                    $reverse_rates[$pair] = 1 / $rate;
                }
            }
            return $reverse_rates;
        });
    }
}
