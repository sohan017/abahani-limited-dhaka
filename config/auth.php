<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Defaults
    |--------------------------------------------------------------------------
    |
    | This option controls the default authentication "guard" and password
    | reset options for your application. You may change these defaults
    | as required, but they're a perfect start for most applications.
    |
    */

    'defaults' => [
        'guard' => 'web',
        'passwords' => 'users',
    ],

    /*
    |--------------------------------------------------------------------------
    | Authentication Guards
    |--------------------------------------------------------------------------
    |
    | Next, you may define every authentication guard for your application.
    | Of course, a great default configuration has been defined for you
    | here which uses session storage and the Eloquent user provider.
    |
    | All authentication drivers have a user provider. This defines how the
    | users are actually retrieved out of your database or other storage
    | mechanisms used by this application to persist your user's data.
    |
    | Supported: "session", "token"
    |
    */

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],

        'api' => [
            'driver' => 'token',
            'provider' => 'users',
            'hash' => false,
        ],
        'bidder' => [
            'driver' => 'session',
            'provider' => 'bidders',
        ],
        'coach' => [
            'driver' => 'session',
            'provider' => 'coachs',
        ],
        'physio' => [
            'driver' => 'session',
            'provider' => 'physios',
        ],
        'player' => [
            'driver' => 'session',
            'provider' => 'players',
        ],
        'subscriber' => [
            'driver' => 'session',
            'provider' => 'subscribers',
        ],
        'trainee' => [
            'driver' => 'session',
            'provider' => 'trainees',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | User Providers
    |--------------------------------------------------------------------------
    |
    | All authentication drivers have a user provider. This defines how the
    | users are actually retrieved out of your database or other storage
    | mechanisms used by this application to persist your user's data.
    |
    | If you have multiple user tables or models you may configure multiple
    | sources which represent each model / table. These sources may then
    | be assigned to any extra authentication guards you have defined.
    |
    | Supported: "database", "eloquent"
    |
    */

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\User::class,
        ],
        'bidders' => [
            'driver' => 'eloquent',
            'model' => App\Bidder::class,
        ],
        'coachs' => [
            'driver' => 'eloquent',
            'model' => App\Coach::class,
        ],
        'physios' => [
            'driver' => 'eloquent',
            'model' => App\Physio::class,
        ],
        'players' => [
            'driver' => 'eloquent',
            'model' => App\Player::class,
        ],
        'subscribers' => [
            'driver' => 'eloquent',
            'model' => App\Subscriber::class,
        ],
        'trainees' => [
            'driver' => 'eloquent',
            'model' => App\Trainee::class,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Resetting Passwords
    |--------------------------------------------------------------------------
    |
    | You may specify multiple password reset configurations if you have more
    | than one user table or model in the application and you want to have
    | separate password reset settings based on the specific user types.
    |
    | The expire time is the number of minutes that the reset token should be
    | considered valid. This security feature keeps tokens short-lived so
    | they have less time to be guessed. You may change this as needed.
    |
    */

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
        'bidders' => [
            'provider' => 'bidders',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
        'coachs' => [
            'provider' => 'coachs',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
        'physios' => [
            'provider' => 'physios',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
        'Players' => [
            'provider' => 'Players',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
        'Subscribers' => [
            'provider' => 'Subscribers',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
        'trainees' => [
            'provider' => 'trainees',
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
