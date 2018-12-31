<form action="{{ url('/products', ['id' => $product->id]) }}" method="post">
  <input 
    class="btn btn-danger" 
    type="submit"
    onClick="return confirm('Are you sure you want to delete {{ $product->title }}?')"
    value="Delete"/>
  <input type="hidden" name="_method" value="delete" />
  {!! csrf_field() !!}
</form>
