<?php

namespace Yousef\PaymentGateway\Exceptions;

use Exception;

class InvalidTransactionId extends Exception
{
    public function __construct($message = null, $code = 0, Throwable $previous = null)
    {
        parent::__construct($message ?? 'Something went wrong while transaction id third party issue');
    }
}