<?php

require '../app/bootstrap.php';


try {
  require Router::load(__DIR__ . '/../routes.php')->direct(Request::uri());
} catch (Exception $e) {
  die($e->getMessage());
}
