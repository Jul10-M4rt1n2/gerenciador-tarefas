<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Criar as Tarefas</title>
</head>
<body>
    <h1>Criar as Tarefas</h1>
    <form action="{{ url('tasks') }}" method="post">
        {{ csrf_field() }}
        <label for="title">Tarefa:</label>
        <input type="text" name="title" id="title">
        <button type="submit">Adicionar</button>
    </form>
    <a href="/tasks">Voltar</a>
</body>
</html>