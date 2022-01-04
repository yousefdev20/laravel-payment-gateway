<?php

namespace Yousef\PaymentGateway\UrlGenerator;

class Generator
{
    protected string $url;

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return config('payment-gateway.gateway_url', '') .
            '/version/' .
            config('payment-gateway.gateway_url', 'version');
    }

}