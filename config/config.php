<?php
/**
 * @
 */
return [
    'mode'    => env('NL_MODE', 'sandbox'),
    'sandbox' => [
        'api_url'           => env('NL_SANDBOX_ENDPOINT', ''),
        'merchant_id'       => env('NL_SANDBOX_MERCHANT_ID', ''),
        'merchant_password' => env('NL_SANDBOX_MERCHANT_PASSWORD', ''),
        'receiver_email'    => env('NL_SANDBOX_RECEIVER_EMAIL', ''),
    ],
    'live'    => [
        'api_url'           => env('NL_LIVE_ENDPOINT', ''),
        'merchant_id'       => env('NL_LIVE_MERCHANT_ID', ''),
        'merchant_password' => env('NL_LIVE_MERCHANT_PASSWORD', ''),
        'receiver_email'    => env('NL_LIVE_RECEIVER_EMAIL', ''),
    ],
    'version' => env('NL_VERSION', '3.2')
];
