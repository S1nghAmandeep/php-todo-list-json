<?php

$index = $_POST['i'];

$todos_json = file_get_contents('todos.json');

$todos = json_decode($todos_json, true);

array_splice($todos, $index, 1);

$todos_json = json_encode($todos);
file_put_contents('todos.json', $todos_json);

header('Content-Type: application/json');
echo ($todos_json);
