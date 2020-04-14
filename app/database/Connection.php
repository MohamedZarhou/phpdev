<?php


class Connection
{
  public static function make($config)
  {
    try {
      return new PDO(
        $config['driver']
          . ':host=' . $config['host']
          . ';dbname=' . $config['name'],

        $config['username'],
        $config['password']
      );
    } catch (PDOException $e) {
      die($e->getMessage());
    }
  }
}
