<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP ToDo List JSON</title>
</head>
<body>
    <header>
        <h1>
            PHP ToDo List JSON
        </h1>
    </header>

    <main id="app">
        <ul>
            <li v-for="todo in todos">
                {{ todo.task }}
            </li>
        </ul>
    </main>

    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="js/scripts.js"></script>

    
</body>
</html>