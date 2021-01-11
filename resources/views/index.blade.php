@extends('layout.main')
@section('content')
    <table class="table table-bordered">
        <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Schedule</th>
        </tr>
        </thead>
        <tbody>
        @foreach($tasks as $task)
            <tr>
                <td>{{$task->task_name}}</td>
                <td>{{$task->description}}</td>
                <td>{{(new DateTime($task->schedule))->format('j F Y H:i:s')}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

@stop
