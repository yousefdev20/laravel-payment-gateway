<?php

namespace Yousef\PaymentGateway\Exceptions;

use Exception;

class InvalidAmount extends Exception
{
    public function __construct($message = null, $code = 0, Throwable $previous = null)
    {
        parent::__construct($message ?? 'Unable to proceed the payment because of bad entries,(Hint: The amount format is invalid)');
    }
}