<?php

namespace App\Controllers;

use Core\App;

class TodosController
{
  public function index()
  {
    $tasks = App::get('query')->selectAll('todos');

    return view('todos/index', [
      'tasks' => $tasks
    ]);
  }

  public function create()
  {
    return view('todos/create');
  }

  public function store()
  {
    App::get('query')->insertInto('todos', [
      'title' => $_POST['title'],
      'description' => $_POST['description']
    ]);

    return redirect('/todos');
  }
}
