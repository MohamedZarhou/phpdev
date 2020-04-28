<?php

namespace Core;

use Exception;

class App
{
  private static $data = [];

  public static function bind($key, $val)
  {
    static::$data[$key] = $val;
  }

  public static function get($key)
  {
    if (!array_key_exists($key, static::$data)) {
      throw new Exception('DI key doesn\'t exist');
    }
    return static::$data[$key];
  }
}
