<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>To Do List</title>
</head>

<body>
    <div id="app">
        <div class="container">
            <h1>To do list</h1>
            <div class="add-task">
                <input class="form-control" type="text" v-model="newTodos" @keyup.enter="addTodos()">
                <button class="btn btn-outline-success" @click="newTodos">Aggiungi</button>
            </div>
            <div class="mt-5">
                <ul class="list-group">
                    <li class="list-group-item list-group-item-success d-flex justify-content-between align-items-center" v-for="(todo, i) in todos">
                        {{todo.text}}
                    </li>
                </ul>
            </div>
        </div>

    </div>

    <script src="./app/app.js"></script>
</body>

</html>