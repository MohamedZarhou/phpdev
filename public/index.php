<?php

$pdo = new PDO('mysql:host=127.0.0.1;dbname=phpdev', 'root', 'root');

$statement = $pdo->prepare('select * from todos');

$statement->execute();

$tasks = $statement->fetchAll(PDO::FETCH_CLASS);

require '../views/index.view.php';
