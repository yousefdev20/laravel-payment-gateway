<?php

namespace Yousef\PaymentGateway\Http\Middleware;

use Closure;

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
     */
    public function handle($request, Closure $next)
    {
        switch ($request->currency ?? 'KWD') {

            case 'KWD':
                config([
                    'payment-gateway.username' => '10',
                    'payment-gateway.merchant_id' => '',
                    'payment-gateway.password' => '',
                ]);
                break;
            case 'AED':
                config([
                    'payment-gateway.username' => '2',
                    'payment-gateway.merchant_id' => '',
                    'payment-gateway.password' => '',
                ]);
                break;
            case 'BHD':
                config([
                    'payment-gateway.username' => '3',
                    'payment-gateway.merchant_id' => '',
                    'payment-gateway.password' => '',
                ]);
                break;
            case 'QAR':
                config([
                    'payment-gateway.username' => '4',
                    'payment-gateway.merchant_id' => '',
                    'payment-gateway.password' => '',
                ]);
                break;
            case 'JOD':
                config([
                    'payment-gateway.username' => '5',
                    'payment-gateway.merchant_id' => '',
                    'payment-gateway.password' => '',
                ]);
                break;
            default:
                config([
                    'payment-gateway.username' => '1',
                    'payment-gateway.merchant_id' => '',
                    'payment-gateway.password' => '',
                ]);
                break;
        }
        return $next($request);
    }

}