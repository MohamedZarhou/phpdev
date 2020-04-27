<?php

$query->insertInto('todoss', [
  'title' => $_POST['title'],
  'description' => $_POST['description']
]);

header('location:/', true, 200);
