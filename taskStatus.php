<?php


$index = intval($_POST['i']) ?? '';


$todos_json = file_get_contents('todos.json');

$todos = json_decode($todos_json, true);

$todos[$index];

foreach ($todos as $i => $todo) {
    if ($index === $i) {
        $todos[$i]['done'] = !$todo['done'];
    }
}

$todos_json = json_encode($todos);
file_put_contents('todos.json', $todos_json);

header('Content-Type: application/json');
echo ($todos_json);
