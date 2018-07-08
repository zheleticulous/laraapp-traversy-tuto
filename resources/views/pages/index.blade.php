@extends('layouts.app')

@section('content')
      <div class="jumbotron text-center">
        <h1>{{$title}}</h1> 
        <p>This is a template showcasing the optional theme stylesheet included in Bootstrap. Use it as a starting point to create something more unique by building on or modifying it.</p>
        <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
      </div>
@endsection
