<?php

require __DIR__ . '/helpers.php';
require __DIR__ . '/database/Connection.php';
require __DIR__ . '/database/QueryBuilder.php';

$query = new QueryBuilder(Connection::make());
