<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <title>To Do List</title>
</head>

<body>
    <div id="app">
        <h1>To do list</h1>
        <input type="text" v-model="newTodos" @keyup.enter="addTodos()">
        <ul>
            <li v-for="(todo, i) in todos">
                {{todo.text}}
            </li>
        </ul>

    </div>

    <script src="./app/app.js"></script>
</body>

</html>