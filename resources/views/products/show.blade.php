@extends('layouts.app')

<style>
  #container {
    justify-content: center;
    position: absolute;
    top: 0;
    z-index: -1;
  }

  #image {
    width: 50%;
  }

  #textContainer {
    width: 40%
  }

  @media (max-width: 991px) {
    #container {
      justify-content: flex-start;
      position: static;
      top: min-content;
    }

    #textContainer {
      width: 80%
    }
  }

  @media (max-width: 700px) {
    #image {
      width: 70%;
    }
  }
</style>
@section('content')
  <div id="container" class="d-flex flex-column align-items-center flex-lg-row me-4 vw-100 vh-100">
    <img id="image" src="/storage/{{ $product->product_picture }}" class="rounded" />
    <div id="textContainer" class="ms-lg-4 text-center text-lg-start">
      <h1>{{ $product->name }} ${{ $product->price }}</h1>
      <p>{{ $product->description }}</p>
      @if ($product->user_id == auth()->user()->id)
        <form method="post" action="{{ route('products.destroy', $product->id) }}"
          class="d-flex align-items-center justify-content-center justify-content-lg-start">
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
@endsection
