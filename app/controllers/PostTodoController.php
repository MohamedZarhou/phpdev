<?php

App::get('query')->insertInto('todos', [
  'title' => $_POST['title'],
  'description' => $_POST['description']
]);

header('location:/', true, 200);
