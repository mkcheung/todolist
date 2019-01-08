@extends('layouts.app')

@section('content')
    <h1>Todos</h1>
    @if(count($todos) > 0)
        @foreach($todos as $todo)
            <div class="well">
                <h1><a href="todo/{{$todo->id}}"}}>{{$todo->text}}</a> </h1>
                <div class="label label-danger">{{$todo->due}}</div>
                <hr>
                <p>{{$todo->body}}</p>
            </div>
        @endforeach
    @endif
@endsection