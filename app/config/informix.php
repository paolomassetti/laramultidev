<?php
/**
 * Created by PhpStorm.
 * User: llaijiale
 * Date: 2017/8/2
 * Time: 10:21
 */

 return [

	'informix' => [
        'driver'            => 'informix',
        'host'              => env('DB_HOST', 'informix'),
        'database'          => env('DB_DATABASE', 'laramultidev'),
        'username'          => env('DB_USERNAME', 'informix'),
        'password'          => env('DB_PASSWORD', 'in4mix'),
        'service'           => env('DB_SERVICE', '9088'),
        'server'            => env('DB_SERVER', 'informix'),
        'db_locale'         => env('DB_LOCALE', 'en_US.819'),
        'client_locale'     => env('CLIENT_LOCALE', 'en_US.57372'),
        'db_encoding'       => env('DB_ENCODING', 'UTF8'),
        'prefix'            => env('DB_PREFIX', ''),
        'strict'            => env('DB_STRICT_MODE', false),
    ],
];
