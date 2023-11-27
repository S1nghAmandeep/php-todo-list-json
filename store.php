<?php

$new_todo = $_POST['text'] ?? '';

$todo = [
    "text" => $new_todo,
    "done" => false
];

//var_dump($new_todo);

$todo_array = file_get_contents('./todos.json');
$todos = json_decode($todo_array, true);


$todos[] = $todo;

$todo_array = json_encode($todos);
file_put_contents('./todos.json', $todo_array);

header('Content-Type: application/json');
echo $todo_array;
