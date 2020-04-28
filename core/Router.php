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
    $this->routes["GET"][trim($uri, '/')] = $controllerName;
  }

  public function post($uri, $controllerName)
  {
    $this->routes["POST"][trim($uri, '/')] = $controllerName;
  }

  public static function load($routesPath)
  {
    $router = new static;
    require $routesPath;
    return $router;
  }

  public function direct($uri, $request_method)
  {
    if (!array_key_exists($uri, $this->routes[$request_method])) {
      throw new Exception("No route match this uri");
    }

    $this->callControllerAction(
      ...explode('@', $this->routes[$request_method][$uri])
    );
  }

  protected function callControllerAction($controller, $method)
  {
    $object = new $controller;

    if (!method_exists($object, $method)) {
      throw new Exception("{$controller} controller doesn't have {$method} method");
    }

    $object->$method();
  }
}
