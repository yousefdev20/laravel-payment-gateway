<?php

namespace Yousef\PaymentGateway\Exceptions;

class CurrencyNotFound extends \Exception
{
    public function __construct($message = null, $code = 0, Throwable $previous = null)
    {
        parent::__construct($message ?? ' Currency code not configured.');
    }
}