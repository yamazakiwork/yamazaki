<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>MyTasks</title>
  <link href="{{ asset('css/edit.css')}}" rel="stylesheet">
</head>
<body>
    <article>
        <h1>内容を編集</h1>
        <main>
            <form action="{{ route('tasks.update', $task->id) }}" method="post">
                {{ $task->id }}
                @csrf
                @method('patch')
                <input type="text" name="task" value="{{ $task->task }}">
                <button>完了</button>
            </form>
        </main>
    </article>
</body>
</html>
