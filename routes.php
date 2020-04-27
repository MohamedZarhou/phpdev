<?php

$router->get('/', 'HomeController@index');
$router->get('/todos', 'TodosController@index');
$router->get('/todos/create', 'TodosController@create');
$router->post('/todos/create', 'TodosController@store');
