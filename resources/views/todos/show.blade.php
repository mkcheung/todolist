@extends('layouts.app')
@section('content')
    <a class="btn btn-default" href="/">Go Back</a>
    <h1>{{$todo->text}}</h1>
@endsection