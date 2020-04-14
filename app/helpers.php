<?php

function dd($message)
{
  echo '<pre>';
  die(var_dump($message));
  echo '</pre>';
}

function view_path()
{
  global $config;
  return rtrim($config['views_path'], '/') . '/';
}

function view($view_name)
{
  return view_path() . $view_name . '.view.php';
}

function controllers_path()
{
  global $config;
  return rtrim($config['controllers_path'], '/') . '/';
}

function controller($controllerName)
{
  return controllers_path() . $controllerName . '.php';
}
