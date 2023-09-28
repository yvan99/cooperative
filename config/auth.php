<?php

return [

    'defaults' => [
        'guard' => 'web',
        'passwords' => 'users',
    ],


    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],

        'staff' => [
            'driver' => 'session',
            'provider' => 'staff',
        ],

        'auditor' => [
            'driver' => 'session',
            'provider' => 'auditor',
        ],

        'leader' => [
            'driver' => 'session',
            'provider' => 'leaders',
        ],
    ],


    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\Models\User::class,
        ],

        'staff' => [
            'driver' => 'eloquent',
            'model' => App\Models\Staff::class,
        ],

        'auditor' => [
            'driver' => 'eloquent',
            'model' => App\Models\Auditor::class,
        ],

        'leaders' => [
            'driver' => 'eloquent',
            'model' => App\Models\Owner::class,
        ],
    ],




    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],

        'staffs' => [
            'provider' => 'staff',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],

        'auditors' => [
            'provider' => 'auditor',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],

        'leaders' => [
            'provider' => 'owner',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Password Confirmation Timeout
    |--------------------------------------------------------------------------
    |
    | Here you may define the amount of seconds before a password confirmation
    | times out and the user is prompted to re-enter their password via the
    | confirmation screen. By default, the timeout lasts for three hours.
    |
    */

    'password_timeout' => 10800,

];
