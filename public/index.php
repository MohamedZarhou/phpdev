<?php

require __DIR__ . '/../vendor/autoload.php';

require '../app/bootstrap.php';

try {
  require Router::load(__DIR__ . '/../routes.php')->direct(Request::uri(), Request::method());
} catch (Exception $e) {
  require view('mics/404');
}
