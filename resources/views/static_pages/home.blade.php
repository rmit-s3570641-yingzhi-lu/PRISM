
@extends('layouts.default')
@section('title','HOME')
@section('content')
<div class="jumbotron">
        <h1>Hello Laravel</h1>
        <p class="lead">
          Here is the main page of Laravel
        </p>
        <p>
          Start from here
        </p>
        <p>
          <a class="btn btn-lg btn-success" href="{{ route('signup') }}" role="button">Register Now</a>
        </p>
      </div>
@endsection