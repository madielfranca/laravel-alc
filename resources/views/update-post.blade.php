@extends('layouts.app')

@section('content')
    <div class="container">
                            <hr>
                            <h1>{{$notice->title}}</h1> <br>
                            <p>{{$notice->description}}</p> <br>
                            <b>Autor: {{$notice->user->name}}</b> <br>


    </div>
@endsection
