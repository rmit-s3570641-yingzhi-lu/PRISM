@extends('layouts.default')

@section('content')
  <h1>{{$product->seqNo}}</h1>
  <div class="form-group">
    <label for="item_Name">Item Name: </label>
    <input type="text" name="item_Name" class="form-control" value="{{ old('item_Name') }}">
  </div>

  <div class="form-group">
    <label for="description">Description: </label>
    <input type="text" name="descritopn" class="form-control" value="{{ old('descritopn') }}">
  </div>

  <button type="submit" class="btn btn-primary">Edit</button>
@endsection