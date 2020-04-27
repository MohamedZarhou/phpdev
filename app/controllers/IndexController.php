<?php

$tasks = App::get('query')->selectAll('todos');

require view('index');
