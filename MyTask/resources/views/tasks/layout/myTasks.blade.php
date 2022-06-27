<ul class="task__area-list">
    @foreach ($tasks as $task)
        <li>
            <p>{{$task->id.' '.$task->task }}</p>
            <form action="{{ route('tasks.show', $task->id) }}" method="get">
                <button class="show_btn" data-id="{{ $task->id }}">詳細</button>
            </form>
        </li>
    @endforeach
</ul>

