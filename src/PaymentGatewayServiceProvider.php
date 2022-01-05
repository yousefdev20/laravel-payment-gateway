<?php

namespace Yousef\PaymentGateway;

use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;
use Yousef\PaymentGateway\Gateways\Payment;
use Yousef\PaymentGateway\Http\Middleware\CatchCurrencies;
use Yousef\PaymentGateway\UrlGenerator\Generator;

class PaymentGatewayServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->bind('Generator', function () {
            return new Generator();
        });

        $this->app->bind('Payment', function () {
            return new Payment();
        });
    }

    public function boot()
    {
        $router = $this->app->make(Router::class);
        $router->aliasMiddleware('currency', CatchCurrencies::class);

        $this->publishes([
            __DIR__.'/../config/payment-gateway.php' => config_path('payment-gateway.php'),
            __DIR__.'/../config/multi-currency-gateway.php' => config_path('multi-currency-gateway.php')
        ]);
    }

}