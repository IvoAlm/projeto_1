@extends('layout.main')
@section('content')
    <div class="container">
        <form action="{{route('update')}}" method="POST">
            <input  type="hidden"  name="id" value="{{$task->id}}">
            @csrf
            <div class="form-group mb-3">
                <label for="task_name" class="form-label">Name Task</label>
                <input type="text" class="form-control" id="task_name" name="task_name" value="{{$task->task_name}}" placeholder="Enter name of the task">
            </div>
            <div class="form-group mb-3">
                <label for="description" class="form-label">Describe</label>
                <textarea  class="form-control" id="description" name="description"  placeholder="Describe the task"> {{$task->description}} </textarea>
            </div>
            <div class="form-group mb-3">
                <label for="schedule" class="form-label">Schedule</label>
                <input type="date" class="form-control" id="schedule"  name="schedule" value="{{$task->schedule}}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@stop
