<?php

namespace Yousef\PaymentGateway\Gateways;

use Yousef\PaymentGateway\Exceptions\InvalidAmount;
use Yousef\PaymentGateway\Exceptions\CurrencyNotFound;
use Yousef\PaymentGateway\Exceptions\InvalidTransactionId;

class Payment implements PaymentInterface
{
    /**
     * @var string
     */
    protected string $currency;

    /**
     * @throws InvalidTransactionId
     */
    public function pay(string $transactionId = ''): array
    {
        if ($transactionId === '') {
            throw new InvalidTransactionId();
        }

        $payload = [
            "order.id" => $transactionId
        ] + $this->currencyGatewayConfig($this->currency);

        $request = $this->requestHandler($payload);

        return $this->responseHandler(curl_exec($request));
    }

    /**
     * @param float $amount
     * @param int $orderId
     * @param string $currency
     * @param string $operationType
     * @return mixed
     * @throws InvalidAmount
     * @throws CurrencyNotFound
     */
    public function createSession(float $amount = 0, int $orderId = 0, string $currency = 'USD', string $operationType = 'PURCHASE')
    {
        if ($amount <= 0) {
            throw new InvalidAmount();
        }

        if (!config('multi-currency-gateway')[$currency] ?? false) {
            throw new CurrencyNotFound();
        }

        $this->currency = $currency;

        $request = curl_init();

        $payload = [
            "order.id" => $orderId,
            "order.amount" => $amount,
            "order.currency"=> $currency,
            "interaction.operation" => $operationType
        ] + $this->currencyGatewayConfig($this->currency);

        $request = $this->requestHandler($payload);

        return $this->responseHandler(curl_exec($request));
    }

    private function responseHandler(string $string): array
    {
        $pairArray = explode("&", $string);
        foreach ($pairArray ?? [] as $pair) {
            $param = explode("=", $pair);
            $array[urldecode($param[0])] = urldecode($param[1]);
        }
        return $array ?? [];
    }

    private function requestHandler($payload)
    {
        $request = curl_init();

        $payload_str = http_build_query($payload);

        curl_setopt($request, CURLOPT_POSTFIELDS, $payload_str ?? []);
        curl_setopt($request, CURLOPT_URL, $payload['gatewayUrl']);
        curl_setopt($request, CURLOPT_HTTPHEADER, ["Content-Length: " . strlen($payload_str)]);
        curl_setopt($request, CURLOPT_HTTPHEADER, ["Content-Type: application/x-www-form-urlencoded;charset=UTF-8"]);
        curl_setopt($request, CURLOPT_RETURNTRANSFER, TRUE);

        return $request;
    }

    private function currencyGatewayConfig(string $currency): array
    {
        $config = config('multi-currency-gateway')[$currency];

        return [
            "merchant" => $config['merchant_id'],
            "apiPassword" => $config['password'],
            "apiUsername" => $config['username'],
            "gatewayUrl" => $config['gateway_url'],
            "apiOperation" => $config['operation']['new_session']
        ];
    }
}
