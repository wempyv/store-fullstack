<?php

return [
    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'midtrans' => [
        'serverKey' => env('MIDTRANS_SERVER_KEY'),
        'clientKey' => env('MIDTRANS_CLIENT_KEY'),
        'isProduction' => env('MIDTRANS_IS_PRODUCTION'),
        'isSanitized' => env('MIDTRANS_IS_SANITIZED'),
        'is3ds' => env('MIDTRANS_IS_3DS'),
    ]

];
