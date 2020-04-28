<?php

use Core\Router;
use Core\Request;

require __DIR__ . '/../vendor/autoload.php';

require '../core/bootstrap.php';

try {
  Router::load(__DIR__ . '/../routes.php')
    ->direct(Request::uri(), Request::method());
} catch (\Exception $e) {
  dd($e->getMessage());
}
