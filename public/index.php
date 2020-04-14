<?php

require '../app/bootstrap.php';

$tasks = $query->selectAll('todos');

require '../views/index.view.php';
