@extends('app')
@section('title', 'Product')

@section('content')
<div class="container mt-4">
  <h2>Product</h2>
  <form class="form" action="{{ route('products.update', ['product' => $product]) }}" method="post">
    <form-group>
      <label for='title'>Title:</label>
      <input name="title" type="text" class="form-control" id="title" value="{{ $product->title }}">
    </form-group>

    <form-group>
      <label for="description">Description:</label>
      <textarea name="description" id="description" class="form-control" type="text" placeholder="Item Description">{{ $product->description }}</textarea>
    </form-group>

    {{ method_field('PUT') }}
    {{ csrf_field() }}

    <div class="mt-2">
      <button type="submit" class="btn btn-primary">Update</button>
      <a href="{{ route('products.index') }}" class="btn btn-warning">Cancel</a>
    </div>
  </form>
</div>

@endsection
