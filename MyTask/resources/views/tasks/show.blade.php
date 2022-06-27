<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>MyTasks</title>
  <link href="{{ asset('css/show.css')}}" rel="stylesheet">
</head>
<body>
    <article>
        <h1>タスク詳細</h1>
            <main>
                <div class="data">
                    {{ $task->id }}
                    {{ $task->task }}
                </div>
                <form action="{{ route('tasks.edit', $task->id) }}">
                    <button class="show_btn" data-id="{{ $task->id }}">編集</button>
                </form>
                <form action="{{ route('tasks.destroy', $task->id) }}" method="post">
                    @csrf
                    @method('delete')
                    <button class="delete_btn" data-id="{{ $task->id }}" onclick='return confirm("削除しますか？");'>削除</button>
                </form>
            </main>
    </article>
</body>
</html>
