<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Tarefa</title>
</head>
<body>
    <h1>Editar Tarefa</h1>
    <form action="{{ url('tasks/' . $task->id) }}" method="post">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <label for="title">Tarefa:</label>
        <input type="text" name="title" id="title" value="{{ $task->title }}">
        <button type="submit">Atualizar</button>
    </form>
    <a href="/tasks">Voltar</a>
</body>
</html>