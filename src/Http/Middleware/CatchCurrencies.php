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
                    'payment-gateway' => config('multi-currency-gateway.KWD')
                ]);
                break;
            case 'AED':
                config([
                    'payment-gateway' => config('multi-currency-gateway.AED')
                ]);
                break;
            case 'BHD':
                config([
                    'payment-gateway' => config('multi-currency-gateway.BHD')
                ]);
                break;
            case 'QAR':
                config([
                    'payment-gateway' => config('multi-currency-gateway.QAR')
                ]);
                break;
            case 'JOD':
                config([
                    'payment-gateway' => config('multi-currency-gateway.JOD')
                ]);
                break;
            default:
                config([
                    ' payment-gateway' => config( 'multi-currency-gateway.KWD' )
                ]);
                break;
        }
        return $next($request);
    }

}