<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>MyTasks</title>
  <link href="{{ asset('css/reset.css')}}" rel="stylesheet">
  <link href="{{ asset('css/style.css')}}" rel="stylesheet">
</head>
<body>
  <div id="wrap" class="wrap">
    <div class="task">
      <!-- タスク作成エリア -->
      <div class="task__new">
        <h2>新しいタスクを作成</h2>
        @include('tasks.layout.regists')
      </div>
      <!-- タスク一覧表示エリア -->
      <div class="task__area">
        <h2>わたしのタスク一覧</h2>
        <!-- 下のinclude内はコントローラーから$tasksをcompact('tasks')で受け取って表示 -->
        @include('tasks.layout.myTasks', compact('tasks'))
      </div>
    </div>
  </div>
</body>
</html>
