@extends('layout.main')
@section('content')
    <ul class="list-group">
        @foreach($tasks as $task)
            <li class="list-group-item list-group-item-primary">{{$task->task_name}}</li>
        @endforeach
    </ul>
@stop
