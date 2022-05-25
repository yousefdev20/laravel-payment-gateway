# Laravel Payment Gateway

[![Latest Stable Version](http://poser.pugx.org/yousef/payment-gateway/v)](https://packagist.org/packages/yousef/payment-gateway) [![Total Downloads](http://poser.pugx.org/yousef/payment-gateway/downloads)](https://packagist.org/packages/yousef/payment-gateway) [![Latest Unstable Version](http://poser.pugx.org/yousef/payment-gateway/v/unstable)](https://packagist.org/packages/yousef/payment-gateway) [![License](http://poser.pugx.org/yousef/payment-gateway/license)](https://packagist.org/packages/yousef/payment-gateway) [![PHP Version Require](http://poser.pugx.org/yousef/payment-gateway/require/php)](https://packagist.org/packages/yousef/payment-gateway)

We made this package to decouple response object

## Installation

Install via composer

```shell
composer require yousef/PaymentGateway
```

## Configuration

Add the `PaymentGatewayServiceProvider` class in your `config/app.php` file.

```php
<?php
return [
    // ...
    
    'providers' => [
        Yousef\PaymentGateway\PaymentGatewayServiceProvider::class,
        
    ];

    // ...
];
```

Publish vendor config files if you need to replace by your own.

```shell
php artisan vendor:publish
```

## Usage

Let's say you need use master, visa to pay orders online in your store, now using Payment Gateway package every thing is easy
to integrate more readability and Testability. Payment Gateway package support multi currency like [KWD, AED, BHD, QAR, JOD]
and anyone can add easy to modify.

```php
<?php

    Payment::createSession($amount, $transactionId, $currency);
    
    Payment::pay($transactionId);
    

```
Add, modify currency configuration multi-currency-gateway.php

```php
return [
    ...,
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
```
Custom exception classes

```php 
    NotCaptured::class
    InvalidAmount::class  
    InvalidTransactionId::class
```
Add own configuration in .env file the DEFAULT_CURRENCY is USD

```php

VERSION=""
GATEWAY_URL=""

MERCHANT_ID_USD=""
MERCHANT_EMAIL_USD=""
MERCHANT_USERNAME_USD=""
MERCHANT_PASSWORD_USD=""

MERCHANT_ID_KWD=""
MERCHANT_EMAIL_KWD=""
MERCHANT_USERNAME_KWD=""
MERCHANT_PASSWORD_KWD=""
```
## Getting Help

If you're stuck getting something to work, or need to report a bug, please [post an issue in the Github Issues for this project](https://github.com/yousefdev20/laravel-payment-gateway/issues).
## Contributing

If you're interesting in contributing code to this project, clone it by running:

```shell
git clone git@github.com:yousefdev20/laravel-payment-gateway.git
```

## License

This project is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
