<?php

use Phalcon\Config;

return new Config(
    [
        'database'    => [
            'adapter'  => 'Mysql',
            'host'     => 'localhost',
            'username' => 'root',
            'password' => '',
            'dbname'   => 'phalcon',
        ],
//        'application' => [
//            'controllersDir' => __DIR__ . '/../controllers/',
//            'modelsDir'      => __DIR__ . '/../models/',
//            'viewsDir'       => __DIR__ . '/../views/',
//            'libraryDir'     => __DIR__ . '/../library/',
//            'pluginsDir'     => __DIR__ . '/../plugin/',
//            'baseUri'        => '/'
//        ],
      // Application configuration
      'application' => [
        'controllersDir' => __DIR__ . '/../app/controllers',
        'modelsDir'      => __DIR__ . '/../app/models/',
        'viewsDir'       => __DIR__ . '/../resources/views/',
        'cacheDir'       => __DIR__ . '/../storage/cache/data/',
        'logsDir'        => __DIR__ . '/../storage/logs/',
        'baseUri'        => '/',
      ],
      // The Volt Engine configuration
      'volt' => [
        'cacheDir'          => __DIR__ . '/../storage/cache/volt/',
        'compiledSeparator' => '_',
      ],
    ]
);
