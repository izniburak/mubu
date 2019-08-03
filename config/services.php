<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Autoloaded Service Providers
    |--------------------------------------------------------------------------
    |
    | The service providers listed here will be automatically loaded on the
    | request to your application. Feel free to add your own services to
    | this array to grant expanded functionality to your applications.
    |
    */

    'providers' => [

        /*
        * Nur Framework Service Providers...
        */
        Nur\Providers\Auth::class,
        Nur\Providers\Blade::class,
        Nur\Providers\Database::class,
        Nur\Providers\Session::class,
        Nur\Providers\Cookie::class,
        Nur\Providers\Listener::class,
        Nur\Providers\Log::class,
        Nur\Providers\Hash::class,
        Nur\Providers\Validation::class,
        // Nur\Providers\Jwt::class,
        // Nur\Providers\Pdox::class,
        // Nur\Providers\Html::class,
        // Nur\Providers\Cache::class,

        /*
        * Application Service Providers...
        */

    ],

    /*
    |--------------------------------------------------------------------------
    | Class Aliases
    |--------------------------------------------------------------------------
    |
    | This array of class aliases will be registered when this application
    | is started. However, feel free to register as many as you wish as
    | the aliases are "lazy" loaded so they don't hinder performance.
    |
    */

    'aliases' => [

        'Auth'        => Nur\Facades\Auth::class,
        'Request'     => Nur\Facades\Request::class,
        'Response'    => Nur\Facades\Response::class,
        'Uri'         => Nur\Facades\Uri::class,
        'Cookie'      => Nur\Facades\Cookie::class,
        'Session'     => Nur\Facades\Session::class,
        'Sql'         => Nur\Facades\Sql::class,
        'DB'          => Nur\Facades\Db::class,
        'Hash'        => Nur\Facades\Hash::class,
        'Crypt'       => Nur\Facades\Crypt::class,
        'Log'         => Nur\Facades\Log::class,
        'Validation'  => Nur\Facades\Validation::class,
        'Jwt'         => Nur\Facades\Jwt::class,

    ],

    /*
    |--------------------------------------------------------------------------
    | Listeners
    |--------------------------------------------------------------------------
    | The listener lists specify events that will trigger when called it.
    | This events could call with event() method and add parameters in them.
    |
    */

    'listeners' => [

        // 'sendmail'   => [ App\Listeners\SendMail::class ],

    ],

];
