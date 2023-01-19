@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Edit a product</div>

          <div class="card-body">
            <form method="post" action="{{ route('products.update', $product->id) }}" enctype="multipart/form-data">
              @csrf
              @method('put')

              <div class="row mb-3">
                <label for="name" class="col-md-4 col-form-label text-md-end">Name</label>

                <div class="col-md-6">
                  <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                    name="name" value="{{ old('name') ?? $product->name }}" autocomplete="name" autofocus>

                  @error('name')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="row mb-3">
                <label for="description" class="col-md-4 col-form-label text-md-end">Description</label>

                <div class="col-md-6">
                  <textarea id="description" class="form-control @error('description') is-invalid @enderror" style="resize: none"
                    name="description" rows="5" autocomplete="description">{{ old('description') ?? $product->description }}</textarea>

                  @error('description')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="row mb-3">
                <label for="price" class="col-md-4 col-form-label text-md-end">Price</label>

                <div class="col-md-6">
                  <input id="price" type="number" class="form-control @error('price') is-invalid @enderror"
                    name="price" value="{{ old('price') ?? $product->price }}" autocomplete="price">

                  @error('price')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="row mb-3">
                <label for="product_picture" class="col-md-4 col-form-label text-md-end">Product picture</label>

                <div class="col-md-6">
                  <input id="product_picture" type="file"
                    class="form-control @error('product_picture') is-invalid @enderror" name="product_picture">

                  @error('product_picture')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="row mb-0">
                <div class="col-md-8 offset-md-4">
                  <button type="submit" class="btn btn-primary">
                    Edit product
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
