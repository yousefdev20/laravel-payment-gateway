<?php

namespace Yousef\PaymentGateway;

use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;
use Yousef\PaymentGateway\Gateways\Payment;
use Yousef\PaymentGateway\Http\Middleware\CatchCurrencies;

class PaymentGatewayServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->bind('Payment', function () {
            return new Payment();
        });
    }

    public function boot()
    {
        $router = $this->app->make(Router::class);
        $router->aliasMiddleware('currency', CatchCurrencies::class);

        $this->publishes([
            __DIR__.'/../config/multi-currency-gateway.php' => config_path('multi-currency-gateway.php'),
            __DIR__.'/../database/migrations/create_transactions_table.php' => database_path('migrations/' . date('Y_m_d_His', time()) . '_create_transaction_table.php')
        ]);

        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
    }

}