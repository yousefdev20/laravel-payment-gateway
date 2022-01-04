# Laravel Responsible 

[![Latest Stable Version](https://poser.pugx.org/arandilopez/laravel-profane/v/stable)](https://packagist.org/)
[![Total Downloads](https://poser.pugx.org/arandilopez/laravel-profane/downloads)](https://packagist.org/)
[![License](https://poser.pugx.org/arandilopez/laravel-profane/license)](https://packagist.org/)

We made this package to decouple response object 

## Installation

Install via composer

```shell
composer require yousef/responsible
```

## Configuration

Add the `ResponseAbstractFactoryServiceProviders` class in your `config/app.php` file.

```php
<?php
return [
    // ...
    
    'providers' => [
        Yousef\Responsible\App\Providers\ResponseAbstractFactoryServiceProviders::class,
        
    ];

    // ...
];
```

Publish vendor lang files if you need to replace by your own.

```shell
php artisan vendor:publish
```

## Usage

Let's say you need create API for mobile application, already you have
web application, the response shall be via view helper function  or 
View facade class.
now using responsible package just you can use this method.
import Response object as service container.

```php
<?php

    protected Response $response;

    public function __construct(Response $response) {
    
        $this->response = $response;    
    }
    
    public function index() {
        
        $countries = [];
        return $this->response->render(compact('countries'), 'index');
    }

```

## License

This project is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
