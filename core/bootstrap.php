<?php

use Core\App;
use Core\Database\Connection;
use Core\Database\QueryBuilder;

require __DIR__ . '/helpers.php';

App::bind('config', require __DIR__ . '/../config.php');

App::bind(
    'query',
    new QueryBuilder(
        Connection::make(
            App::get('config')['database']
        )
    )
);
