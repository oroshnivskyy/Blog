<?php

return new \Phalcon\Config(
    array(
        'database' => array(
            'adapter' => 'Mysql',
            'host' => 'localhost',
            'username' => 'root',
            'password' => '',
            'name' => 'test',
        ),
        'application' => array(
            'controllersDir' => __DIR__ . '/../controllers/',
            'modelsDir' => __DIR__ . '/../models/',
            'viewsDir' => __DIR__ . '/../views/',
            'pluginsDir' => __DIR__ . '/../plugins/',
            'libraryDir' => __DIR__ . '/../library/',
            'baseUri' => '/Blog/',
        ),
        'models' => array(
            'metadata' => array(
                'adapter' => 'Memory'
            )
        ),
        'router' => include 'router.php'
    )
);
