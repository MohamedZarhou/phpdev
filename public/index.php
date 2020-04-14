<?php

require '../app/database/Connection.php';
require '../app/database/QueryBuilder.php';

$pdo = Connection::make();

$query = new QueryBuilder($pdo);

$tasks = $query->selectAll('todos');

require '../views/index.view.php';
