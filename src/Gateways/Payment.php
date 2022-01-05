<?php

namespace Yousef\PaymentGateway\Gateways;

use Illuminate\Support\Facades\Http;
use Yousef\PaymentGateway\Facades\URLGenerator;

class Payment implements PaymentInterface
{

    public function pay(string $transactionId = '')
    {
        $request = curl_init();

        $payload = [
            "order.id" => $transactionId,
            "merchant" => config('payment-gateway.merchant_id'),
            "apiPassword" => config('payment-gateway.password'),
            "apiUsername" => config('payment-gateway.username'),
            "apiOperation" => config('payment-gateway.options.new_session')
        ];

        $payload_str = http_build_query($payload);

        curl_setopt($request, CURLOPT_POSTFIELDS, $payload_str ?? []);

        curl_setopt($request, CURLOPT_URL, URLGenerator::getUrl());

        curl_setopt($request, CURLOPT_HTTPHEADER, ["Content-Length: " . strlen($payload_str)]);

        curl_setopt($request, CURLOPT_HTTPHEADER, ["Content-Type: application/x-www-form-urlencoded;charset=UTF-8"]);

        curl_setopt($request, CURLOPT_RETURNTRANSFER, TRUE);

        parse_str(curl_exec($request), $response);

        return $response;
    }

    /**
     * @param float $amount
     * @param int $orderId
     * @param string $currency
     * @param string $operationType
     * @return mixed
     */
    public function createSession(float $amount = 0, int $orderId = 0, string $currency = 'USD', string $operationType = 'PURCHASE')
    {
        $request = curl_init();

        $payload = [
            "order.id" => $orderId,
            "order.amount" => $amount,
            "order.currency"=> $currency,
            "interaction.operation" => $operationType,
            "merchant" => config('payment-gateway.merchant_id'),
            "apiPassword" => config('payment-gateway.password'),
            "apiUsername" => config('payment-gateway.username'),
            "apiOperation" => config('payment-gateway.options.new_session')
        ];

        $payload_str = http_build_query($payload);

        curl_setopt($request, CURLOPT_POSTFIELDS, $payload_str ?? []);

        curl_setopt($request, CURLOPT_URL, URLGenerator::getUrl());

        curl_setopt($request, CURLOPT_HTTPHEADER, ["Content-Length: " . strlen($payload_str)]);

        curl_setopt($request, CURLOPT_HTTPHEADER, ["Content-Type: application/x-www-form-urlencoded;charset=UTF-8"]);

        curl_setopt($request, CURLOPT_RETURNTRANSFER, TRUE);

        parse_str(curl_exec($request), $response);

        return $response;
    }

    private function handler()
    {

    }
}
