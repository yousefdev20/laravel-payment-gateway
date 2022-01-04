<?php

namespace Yousef\PaymentGateway\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static string getUrl()
 */
class URLGenerator extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'Generator';
    }
}