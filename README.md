# recastai_sdk_laravel: Laravel Package for RecastAI PHP SDK support
Based on the official PHP SDK Recast.AI recastai/sdk_php it provides a convenient service provider for the SDK.


## Quick Start Guide

- Create a Laravel 5.5 project: `composer create-project laravel/laravel myproject dev-develop`
- `cd myproject`
- Add dependency: `composer require kanian/recastai_sdk_laravel=dev-master`
- Copy configuration: `php artisan vendor:publish`

Now you are ready to use the \RecastAI Facace, e.g. open routes/web.php:

``` PHP
<?php

Route::get('mongo', function(Request $request) {
    return \RecastAI::get()
                      ->request
                          ->analyseText('hello');
});

Route::get('/', function () {
    return view('welcome');
});

```

Or in a controller:

``` PHP
<?php
namespace App\Http\Controllers;

class TryRecastAIController extends Controller
{
   /**
     * Just Testing RecastAI
     * 
     * @return Response
     */
     public function __invoke()
    {
        $client = \RecastAI::get();
        $res = $client->request->analyseText('hello');

        if ($res->intent()->slug == 'greetings') {
                // Do your code
        }
        return view('testrecastai', ['text' => $res->source, 'answer'=>"Yello!"]);
    }
}

```

To override the default configuration add the following parameters to your .env file. 

```
RecastAI_TOKEN = YOUR_RECASTAI_REQUEST_TOKEN
LANGUAGE = 'en'
```
