<?php

namespace Yousef\PaymentGateway\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static \Illuminate\Http\Client\Response createSession(float $amount = 0, int $orderId = 0, string $currency = 'USD', string $operationType = 'PURCHASE')
 * @method static \Illuminate\Http\Client\Response pay(string $transactionId = '')
 **/
class Payment extends Facade
{

    protected static function getFacadeAccessor(): string
    {
        return "Payment";
    }
}