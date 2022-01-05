<?php

namespace Yousef\PaymentGateway\Gateways;

interface PaymentInterface
{
    public function pay(string $transactionId = '');

    public function createSession(float $amount = 0, int $orderId = 0, string $currency = 'USD', string $operationType = 'PURCHASE');
}