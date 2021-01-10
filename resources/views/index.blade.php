@extends('layout.main')
@section('content')
    <ul class="list-group">
        @foreach($tasks as $task):
            <li class="list-group-item">{{$task}}</li>
        @endif
    </ul>
@stop
