<?php

class Router
{
  public $routes;

  public function __construct()
  {
    $this->routes = [];
  }

  public function define($uri, $controllerName)
  {
    $this->routes[trim($uri, '/')] = controller($controllerName);
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
