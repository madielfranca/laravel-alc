@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                  @foreach($notice as $notice)
                   <h1>{{$notice->title}}</h1> <br>
                   <p>{{$notice->description}}</p> <br>
                    <b>Autor: {{$notice->user->name}}</b> <br>

                  @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
