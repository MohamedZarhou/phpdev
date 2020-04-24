<?php

class Router
{
  public $routes;

  public function __construct()
  {
    $this->routes = [
      "GET" => [],
      "POST" => []
    ];
  }

  public function get($uri, $controllerName)
  {
    $this->routes["GET"][trim($uri, '/')] = controller($controllerName);
  }

  public function post($uri, $controllerName)
  {
    $this->routes["POST"][trim($uri, '/')] = controller($controllerName);
  }

  public static function load($routesPath)
  {
    $router = new static;
    require $routesPath;
    return $router;
  }

  public function direct($uri)
  {
    if (array_key_exists($uri, $this->routes))
      return $this->routes[$uri];

    throw new Exception("No route match this uri");
  }
}
