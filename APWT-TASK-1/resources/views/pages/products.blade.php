@extends('layouts.custom')
@section('content')
<div class="container">
    <h2 class="text-center"> <a class="nav-item nav-link text-danger fw-bold">This is Products page</h2>
    @foreach($products as $product)
    <h6 class="text-center">{{$product}}</h6>  
    @endforeach
</div>
@endsection