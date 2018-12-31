@extends('app')
@section('title', 'Products')

@section('content')
<div class="row">
  <div class="m-4 col-12">
    <h2>Products <a class="btn btn-warning" href="{{ route('products.reseed') }}">Reseed (just for fun)</a></h2>
    
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th>Title</th>
          <th>Description</th>
          <th>Modified</th>
          <th>Action</th>
        </tr>
      </thead>

    @foreach($products as $product)
      <tr>
        <td>
          <a href="{{ route('products.show', ['product' => $product]) }}">{{ $product->title }}</a> 
        </td>
        <td>{{ $product->description }}</td>
        <td>{{ $product->updated_at }}</td>
        <td>
          <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary">View</a>
          @include('product.delete', ['product' => $product])
        </td>
      </tr>
    @endforeach
    </table>
    <div class="span12" style="text-align:center">
      <a href="/">Easter Egg</a>
    <div>
  </div>
</div>
