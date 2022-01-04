<?php

return [

    'certificate_verify_peer' => env('CERTIFICATE_VERIFY_PEER', false),
    'certificate_verify_host' => env('CERTIFICATE_VERIFY_HOST', 0),
    'gateway_url' => env('GATEWAY_URL', ''),
    'username'=> env('MERCHANT_USERNAME', ''),
    'merchant_id' => env('MERCHANT_ID', 0),
    'password'=> env('MERCHANT_PASSWORD', ''),
    'merchant_email' => env('MERCHANT_EMAIL', 0),
    'debug' => env('DEBUG', false),
    'version' => env('VERSION', 61),

    'operations' => [
        'new_session' => 'CREATE_CHECKOUT_SESSION',
        'retrieve_order' => 'RETRIEVE_ORDER',
    ],

    'default_currency' => env('DEFAULT_CURRENCY', 'USD'),
];
