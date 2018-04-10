@extends('layouts.default')
@section('title', 'Register')

@section('content')
<div class="col-md-offset-2 col-md-8">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h5>Register</h5>
      </div>
      <div class="panel-body">
            @include('shared._errors')
            {{--  include error message  --}}
        <form method="POST" action="{{ route('users.store') }}">

            {{ csrf_field() }}
            {{--  include the Cross-site request forgery  --}}

            <div class="form-group">
              <label for="firstname">First Name: </label>
              <input type="text" name="firstname" class="form-control" value="{{ old('firstname') }}">
            </div>

            <div class="form-group">
              <label for="lastname">Last Name: </label>
              <input type="text" name="lastname" class="form-control" value="{{ old('lastname') }}">
            </div>

            <div class="form-group">
              <label for="email">Email: </label>
              <input type="text" name="email" class="form-control" value="{{ old('email') }}">
            </div>

            <div class="form-group">
              <label for="phoneNumber">Phone Number: </label>
              <input type="number" name="phoneNumber" class="form-control" value="{{ old('phoneNumber') }}">
            </div>

            <div class="form-group">
              <label for="password">Password: </label>
              <input type="password" name="password" class="form-control" value="{{ old('password') }}">
            </div>

            <div class="form-group">
              <label for="password_confirmation">Confirm Password:</label>
              <input type="password" name="password_confirmation" class="form-control" value="{{ old('password_confirmation') }}">
            </div>

            <button type="submit" class="btn btn-primary">Register</button>
        </form>
      </div>
    </div>
  </div>
@endsection