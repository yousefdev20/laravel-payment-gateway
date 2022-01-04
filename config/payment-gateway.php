<?php

return [

    'certificate_verify_peer' => env('certificate_verify_peer', false),
    'certificate_verify_host' => env('certificate_verify_host', 0),
    'gateway_url' => env('gateway_url', ''),
    'username'=> env('username', ''),
    'merchant_id' => env('merchant_id', 0),
    'password'=> env('password', ''),
    'merchant_email' => env('merchant_email', 0),
    'debug' => env('debug', false),
    'version' => env('version', 61),

    'default_currency' => env('default_currency', 'USD'),
];
