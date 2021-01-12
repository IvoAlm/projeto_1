@extends('layout.main')
@section('content')
    <div class="container">
        <form>
            <div class="form-group mb-3">
                <label for="name" class="form-label">Name Task</label>
                <input type="text" class="form-control" id="name" placeholder="Enter name of the task">
            </div>
            <div class="form-group mb-3">
                <label for="descricao" class="form-label">Describe</label>
                <textarea  class="form-control" id="descricao" placeholder="Describe the task"></textarea>
            </div>
            <div class="form-group mb-3">
                <label for="schedule" class="form-label">Schedule</label>
                <input type="date" class="form-control" id="schedule">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@stop
