<?php

namespace Yousef\PaymentGateway\Http\Middleware;

use Closure;
use Yousef\PaymentGateway\Exceptions\CurrencyNotFound;

class CatchCurrencies
{
    public function __construct()
    {
        //
    }

    /**
     * @param $request
     * @param Closure $next
     * @return mixed
     * @throws CurrencyNotFound
     */
    public function handle($request, Closure $next)
    {
        if (!config('multi-currency-gateway')[$request->currency] ?? false) {
            throw new CurrencyNotFound();
        }
        return $next($request);
    }
}
