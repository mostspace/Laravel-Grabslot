<?php

return [
    'api_keys' => [
        'public_key' => env('STRIPE_PUBLIC_KEY', null),
        'secret_key' => env('STRIPE_SECRET', null)
    ]
];