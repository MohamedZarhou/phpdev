<?php

$router->get('/', 'IndexController');
$router->get('/create', 'CreateTodoController');
$router->post('/create', 'PostTodoController');
