<?php

return [

    'USD' => [
        'certificate_verify_peer' => env('CERTIFICATE_VERIFY_PEER', false),
        'certificate_verify_host' => env('CERTIFICATE_VERIFY_HOST', 0),
        'gateway_url' => env('GATEWAY_URL', ''),
        'username'=> env('MERCHANT_USERNAME_USD', ''),
        'merchant_id' => env('MERCHANT_ID_USD', 0),
        'password'=> env('MERCHANT_PASSWORD_USD', ''),
        'merchant_email' => env('MERCHANT_EMAIL_USD', 0),
        'debug' => env('DEBUG', false),
        'version' => env('VERSION', 61),

        'operations' => [
            'new_session' => 'CREATE_CHECKOUT_SESSION',
            'retrieve_order' => 'RETRIEVE_ORDER',
        ]
    ],

    'KWD' => [
        'certificate_verify_peer' => env('CERTIFICATE_VERIFY_PEER', false),
        'certificate_verify_host' => env('CERTIFICATE_VERIFY_HOST', 0),
        'gateway_url' => env('GATEWAY_URL', ''),
        'username'=> env('MERCHANT_USERNAME_KWD', ''),
        'merchant_id' => env('MERCHANT_ID_KWD', 0),
        'password'=> env('MERCHANT_PASSWORD_KWD', ''),
        'merchant_email' => env('MERCHANT_EMAIL_KWD', 0),
        'debug' => env('DEBUG', false),
        'version' => env('VERSION', 61),

        'operations' => [
            'new_session' => 'CREATE_CHECKOUT_SESSION',
            'retrieve_order' => 'RETRIEVE_ORDER',
        ]
    ],

    'AED' => [
        'certificate_verify_peer' => env('CERTIFICATE_VERIFY_PEER', false),
        'certificate_verify_host' => env('CERTIFICATE_VERIFY_HOST', 0),
        'gateway_url' => env('GATEWAY_URL', ''),
        'username'=> env('MERCHANT_USERNAME_AED', ''),
        'merchant_id' => env('MERCHANT_ID_AED', 0),
        'password'=> env('MERCHANT_PASSWORD_AED', ''),
        'merchant_email' => env('MERCHANT_EMAIL_AED', 0),
        'debug' => env('DEBUG', false),
        'version' => env('VERSION', 61),

        'operations' => [
            'new_session' => 'CREATE_CHECKOUT_SESSION',
            'retrieve_order' => 'RETRIEVE_ORDER',
        ]
    ],

    'BHD' => [
        'certificate_verify_peer' => env('CERTIFICATE_VERIFY_PEER', false),
        'certificate_verify_host' => env('CERTIFICATE_VERIFY_HOST', 0),
        'gateway_url' => env('GATEWAY_URL', ''),
        'username'=> env('MERCHANT_USERNAME_BHD', ''),
        'merchant_id' => env('MERCHANT_ID_BHD', 0),
        'password'=> env('MERCHANT_PASSWORD_BHD', ''),
        'merchant_email' => env('MERCHANT_EMAIL_BHD', 0),
        'debug' => env('DEBUG', false),
        'version' => env('VERSION', 61),

        'operations' => [
            'new_session' => 'CREATE_CHECKOUT_SESSION',
            'retrieve_order' => 'RETRIEVE_ORDER',
        ]
    ],

    'QAR' => [
        'certificate_verify_peer' => env('CERTIFICATE_VERIFY_PEER', false),
        'certificate_verify_host' => env('CERTIFICATE_VERIFY_HOST', 0),
        'gateway_url' => env('GATEWAY_URL', ''),
        'username'=> env('MERCHANT_USERNAME_QAR', ''),
        'merchant_id' => env('MERCHANT_ID_QAR', 0),
        'password'=> env('MERCHANT_PASSWORD_QAR', ''),
        'merchant_email' => env('MERCHANT_EMAIL_QAR', 0),
        'debug' => env('DEBUG', false),
        'version' => env('VERSION', 61),

        'operations' => [
            'new_session' => 'CREATE_CHECKOUT_SESSION',
            'retrieve_order' => 'RETRIEVE_ORDER',
        ]
    ],

    'JOD' => [
        'certificate_verify_peer' => env('CERTIFICATE_VERIFY_PEER', false),
        'certificate_verify_host' => env('CERTIFICATE_VERIFY_HOST', 0),
        'gateway_url' => env('GATEWAY_URL', ''),
        'username'=> env('MERCHANT_USERNAME_JOD', ''),
        'merchant_id' => env('MERCHANT_ID_JOD', 0),
        'password'=> env('MERCHANT_PASSWORD_JOD', ''),
        'merchant_email' => env('MERCHANT_EMAIL_JOD', 0),
        'debug' => env('DEBUG', false),
        'version' => env('VERSION', 61),

        'operations' => [
            'new_session' => 'CREATE_CHECKOUT_SESSION',
            'retrieve_order' => 'RETRIEVE_ORDER',
        ]
    ],

    'default_currency' => env('DEFAULT_CURRENCY', 'USD')
];
