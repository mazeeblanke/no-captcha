<?php

return [
    'secret' => env('NOCAPTCHA_SECRET'),
    'sitekey' => env('NOCAPTCHA_SITEKEY'),
    'enableGlobalCaptcha' => env('NOCAPTCHA_ENABLE_GLOBAL', false),
    'options' => [
        'timeout' => 30,
    ],
];
