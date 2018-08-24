<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
    'facebook' => [
        'client_id' => '149944382537027',
        'client_secret' => 'f40dbdd5cce1f756a90a37d7e6b1ce06',
        'redirect' => 'http://localhost:6999/auth/facebook/callback',
    ],
    'google' => [
        'client_id' => '635548437566-v46dt067h3aaacv7sc5evhlgv17agdhj.apps.googleusercontent.com',
        'client_secret' => 'pI4XzxVW5fXoqaC5tpuKTDyE',
        'redirect' => 'http://ihouse.vn/auth/google/callback',
    ],
];
