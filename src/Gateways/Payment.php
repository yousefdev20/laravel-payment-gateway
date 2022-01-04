<?php

namespace Yousef\PaymentGateway\Gateways;

use Illuminate\Support\Facades\Http;
use Yousef\PaymentGateway\Facades\URLGenerator;

class Payment implements PaymentInterface
{

    public function pay(string $transactionId = '')
    {
        // TODO: Implement pay() method.
    }

    /**
     * @param float $amount
     * @param int $orderId
     * @param string $currency
     * @param string $operationType
     * @return \Illuminate\Http\Client\Response
     */
    public function createSession(float $amount = 0, int $orderId = 0, string $currency = 'USD', string $operationType = 'PURCHASE'): \Illuminate\Http\Client\Response
    {
        $request = [
            "apiOperation" => "CREATE_CHECKOUT_SESSION",
            "order.id" => $orderId,
            "order.amount" => $amount,
            "order.currency"=> $currency,
            "interaction.operation" => $operationType,
        ];

        return Http::post(URLGenerator::getUrl(), $request);
    }
}