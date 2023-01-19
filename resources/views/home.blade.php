@extends('layouts.app')

@section('content')
  <div class="container">
    <div>
      @if (count($products) != 0)
        <h1 class="text-center fw-bold">Your last products</h1>
      @endif
      <div class="d-flex flex-wrap align-items-center justify-content-center m-2">
        @forelse ($products as $product)
          <x-product_card :product="$product" />
        @empty
          <div class="d-flex flex-col align-items-center card mt-2 p-4">
            <h3 class="text-center">You don't have products</h3>
            <a href="{{ route('products.create') }}" class="btn btn-primary">Create a product</a>
          </div>
        @endforelse
      </div>
    </div>
  </div>
@endsection
