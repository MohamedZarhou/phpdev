<?php

function dd($message)
{
  echo '<pre>';
  die(var_dump($message));
  echo '</pre>';
}

function view_path()
{
  return __DIR__ . '/../views/';
}

function view($view_name)
{
  return view_path() . $view_name . '.view.php';
}
