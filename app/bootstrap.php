<?php

$config = require __DIR__ . '/../config.php';

require __DIR__ . '/helpers.php';
require __DIR__ . '/Router.php';
require __DIR__ . '/Request.php';
require __DIR__ . '/database/Connection.php';
require __DIR__ . '/database/QueryBuilder.php';

$query = new QueryBuilder(Connection::make($config['database']));
