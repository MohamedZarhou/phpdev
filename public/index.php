<?php

require '../app/bootstrap.php';


try {
  require Router::load(__DIR__ . '/../routes.php')->direct(trim($_SERVER["REQUEST_URI"], '/'));
} catch (Exception $e) {
  die($e->getMessage());
}
