@extends('layout.main')
@section('content')
    <div class="container-fluid">

        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Schedule</th>
                <th scope="col">Status</th>
                <th scope="col">Actions</th>

            </tr>
            </thead>
            <tbody>
            @foreach($tasks as $task)
                <tr>
                    <td>{{$task->task_name}}</td>
                    <td>{{$task->description}}</td>
                    <td>{{(new DateTime($task->schedule))->format('j F Y H:i:s')}}</td>
                    <td>{{$task->status ? 'Done' : 'Not Done'}}</td>
                    <td>
                        <a href="{{route('edit',['task' => $task->id])}}">Edit</a>
                        <form action="{{route('delete',['task' => $task->id])}}">
                            <button type="submit"> Delete</button>
                        </form>
                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>
        <h3><a href="{{route('create')}}">New Task</a></h3>
    </div>

@stop
