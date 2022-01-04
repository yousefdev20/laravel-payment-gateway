<?php

namespace Yousef\PaymentGateway;

use Illuminate\Support\ServiceProvider;
use Yousef\PaymentGateway\Gateways\Payment;
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
        $this->publishes([
            __DIR__.'/../config/payment-gateway.php' => config_path('payment-gateway.php')
        ]);
    }

}