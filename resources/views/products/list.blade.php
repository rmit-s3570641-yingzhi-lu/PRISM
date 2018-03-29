@extends('layouts.default')
@section('title','Products')
@section('content')
  <h1>Products page</h1>
  @if(count($products) > 1)
    @foreach($products as $product)
        <div>
            <h3><a href="/products/{{$product->id}}">SeqNo: {{$product->seqNo}}</a></h3>
            <small>Item name: {{$product->item_Name}} <br>
                   Description: {{$product->description}}</small>
        </div>
    @endforeach
  @else
    <p>No products found!</p>
  @endif
@endsection