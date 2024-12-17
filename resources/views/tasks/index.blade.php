<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gerenciador de Tarefas</title>
</head>

<body>
    <h1>Gerenciador de Tarefas</h1>
    <h2>Criar Tarefa</h2>
    <a href="{{ url('tasks/create') }}">Criar Tarefa</a>
    <table>
        <tr>
            <th>Tarefa</th>
        </tr>
        @foreach ($tasks as $task)
            <tr>
                <td>{{ $task->title }}</td>
            </tr>
            <tr>
                <td>
                    <a href="{{ url('tasks/' . $task->id . '/edit') }}">Editar</a>
                    <form action="{{ route('tasks.destroy', $task->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Excluir</button>
                    </form>
                </td>
        @endforeach
    </table>
</body>

</html>
