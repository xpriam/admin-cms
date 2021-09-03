@extends('layouts.main')
@section('container')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
  @foreach ($product as $product)
   <h2>{{ $product["title"] }}</h2>
   <p>{{ $product["body"] }}</p>   
  @endforeach
@endsection