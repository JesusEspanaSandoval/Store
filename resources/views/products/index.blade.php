@extends('layouts.app')

@section('content')
  <div class="d-flex flex-column" style="margin-top: -25px">
    @forelse ($products as $product)
      <div class="d-flex flex-column flex-sm-row align-items-center border-top border-bottom border-dark py-2">
        <h3 class="ms-2">
          <a class="text-decoration-none text-white" href="{{ route('products.show', $product->id) }}">
            {{ $product->name }}
          </a>
          ${{ $product->price }}
        </h3>

        <form method="post" action="{{ route('products.destroy', $product->id) }}"
          class="d-flex align-items-center ms-sm-auto me-2 my-auto">
          @csrf
          @method('delete')
          <a href="{{ route('products.edit', $product->id) }}" class="btn btn-info me-2">
            <i class="bi bi-pen-fill"></i>
          </a>
          <button class="btn btn-danger" type="submit">
            <i class="bi bi-trash-fill"></i>
          </button>
        </form>
      </div>
    @empty
      <div class="d-flex flex-col align-items-center card mt-2 p-4">
        <h3 class="text-center">You don't have products</h3>
        <a href="{{ route('products.create') }}" class="btn btn-primary">Create a product</a>
      </div>
    @endforelse
    <div class="align-self-center m-2" style="width: 95vw;">
      {{ $products->links() }}
    </div>
  </div>
@endsection
