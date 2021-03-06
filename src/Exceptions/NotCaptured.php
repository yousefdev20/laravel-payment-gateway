<?php

namespace Yousef\PaymentGateway\Exceptions;

use Exception;

class NotCaptured extends Exception
{
    public function __construct($message = null, $code = 0, Throwable $previous = null)
    {
        parent::__construct($message ?? 'Something went wrong when trying to pay process (payment gateway), please try again');
    }
}