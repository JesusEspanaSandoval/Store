@extends('layouts.app')

@section('content')
  <div class="d-flex justify-content-center align-items-center position-absolute top-0"
    style="width: 100vw; height: 100vh; z-index: -1;">
    <x-product_card :product="$product" />
  </div>
@endsection
