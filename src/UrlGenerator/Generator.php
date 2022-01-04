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
        $this->url = config('payment-gateway.gateway_url', '') . '/version/' .
        config('payment-gateway.version', '61');

        return $this->url;
    }

}