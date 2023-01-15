@extends('layouts.app')

@section('content')
  <div class="d-flex justify-content-center align-items-center position-absolute top-0"
    style="width: 100vw; height: 100vh; z-index: -1;">
    <div class="card m-2" style="width: 25rem;">
      <img src="/storage/{{ $product->product_picture }}" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title">{{ $product->name }} ${{ $product->price }}</h5>
        <p class="card-text">{{ $product->description }}</p>
        @if ($product->user_id == auth()->user()->id)
          <form method="post" action="{{ route('products.destroy', $product->id) }}" class="d-flex align-items-center">
            @csrf
            @method('delete')
            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-info me-2">Edit</a>
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        @else
          <a class="btn btn-success">Buy</a>
        @endif
      </div>
    </div>
  </div>
@endsection
