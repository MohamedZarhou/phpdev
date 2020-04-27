<?php

function dd($message)
{
  echo '<pre>';
  die(var_dump($message));
  echo '</pre>';
}

function view_path()
{
  return rtrim(App::get('config')['views_path'], '/') . '/';
}

function view($view_name)
{
  return view_path() . $view_name . '.view.php';
}

function controllers_path()
{
  return rtrim(App::get('config')['controllers_path'], '/') . '/';
}

function controller($controllerName)
{
  return controllers_path() . $controllerName . '.php';
}
