<?php


require __DIR__ . '/helpers.php';

$config = require __DIR__ . '/../config.php';

$query = new QueryBuilder(Connection::make($config['database']));
