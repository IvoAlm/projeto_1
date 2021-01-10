@extends('layout.main')
@section('content')
    <div class="container">
        <form>
            <div class="form-group">
                <label for="name">Name Task</label>
                <input type="text" class="form-control" id="name" placeholder="Enter name of the task">
            </div>
            <div class="form-group">
                <label for="descricao">Describe</label>
                <input type="text" class="form-control" id="descricao" placeholder="Describe the task">
            </div>
            <div class="form-group">
                <label for="schedule">Schedule</label>
                <input type="date" class="form-control" id="schedule">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@stop
