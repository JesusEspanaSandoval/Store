@extends('layouts.app')

@section('content')
  <div class="container">
    <div>
      <h1 class="text-center fw-bold">Your last products</h1>
      <div class="d-flex justify-content-center flex-wrap mt-2">
        @forelse ($products as $product)
          <div class="card m-2" style="width: 18rem;">
            <img src="storage/{{ $product->product_picture }}" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">{{ $product->name }} {{ $product->price }}$</h5>
              <p class="card-text">{{ $product->description }}</p>
              <form method="post" action="{{ route('products.destroy', $product->id) }}"
                class="d-flex align-items-center">
                @csrf
                @method('delete')
                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-info me-2">Edit</a>
                <button class="btn btn-danger" type="submit">Delete</button>
              </form>
            </div>
          </div>
        @empty
          <div class="d-flex flex-col align-items-center card mt-2" style="width: 18rem;">
            <h1 class="text-center">You don't have products</h1>
            <a href="{{ route('register') }}" class="btn btn-primary">Create a product</a>
          </div>
        @endforelse
      </div>
    </div>
  </div>
@endsection
