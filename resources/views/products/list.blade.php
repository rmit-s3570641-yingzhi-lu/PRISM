@extends('layouts.default')
@section('title','Products')
@section('content')
  <h1>Products page</h1>
  @if(count($products) > 1)
    @foreach($products as $product)
        <div>
            <h3><a href="/products/{{$product->id}}">Item ID: {{$product->item_id}}</a></h3>
            <small>Item description: {{$product->item_description}} <br>
                   SOH_Qty: {{$product->soh_qty}} <br>
                   Cost price: {{$product->cost_price}} <br>
                   Retial price: {{$product->retail_price}} <br>
                   Last sale: {{$product->lastsale_date}} <br>
            </small>
        </div>
    @endforeach
  @else
    <p>No products found!</p>
  @endif
@endsection