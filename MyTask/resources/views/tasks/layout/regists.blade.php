<form action="{{ route('tasks.store') }}" method="POST">
    @csrf
    <input type="text" name="task" maxlength="30" placeholder="タスクを入力してください">
    <input type="submit" value="追加">
</form>

