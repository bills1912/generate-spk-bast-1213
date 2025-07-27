<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'google' => [
        'client_id' => '222317341893-i6luk2srven9pftto35hf7f98usfsgct.apps.googleusercontent.com',
        'client_secret' => env('GOOGLE_CLIENT_SECRET', 'YOUR_GOOGLE_CLIENT_SECRET'),
        'redirect' => 'https://seemitra.datada1278.com/auth/google/callback',
    ],

    'facebook' => [
        'client_id' => '897963205238438',
        'client_secret' => env('FACEBOOK_CLIENT_SECRET', 'YOUR_FACEBOOK_CLIENT_SECRET'),
        'redirect' => 'https://seemitra.datada1278.com/auth/facebook/callback',
    ],

];
