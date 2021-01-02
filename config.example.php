<?php

return [
  'database' => [
    'driver' => 'mysql',
    'host' => '127.0.0.1',
    'port' => '3306',
    'name' => 'phpdev',
    'username' => 'root',
    'password' => 'root',
    'options' => [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]
  ],

  'controllers_path' => __DIR__ . '/app/controllers',
  'views_path' => __DIR__ . '/app/views',
];
