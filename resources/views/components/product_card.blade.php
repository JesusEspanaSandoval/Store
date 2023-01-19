<style>
  .card-img-top {
    height: 10rem;
    width: auto;
  }

  @media screen and (max-width: 341px) {
    .card-img-top {
      max-width: 100%;
    }
  }
</style>
<div class="card m-2" style="width: 18rem;">
  <img src="/storage/{{ $product->product_picture }}" class="card-img-top align-self-center">
  <div class="card-body">
    <h5 class="card-title">
      <a class="text-decoration-none text-white" href="{{ route('products.show', $product->id) }}">
        {{ $product->name }}
      </a>
      ${{ $product->price }}
    </h5>
    <p class="card-text text-truncate">{{ $product->description }}</p>
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
    <p class="card-text"><small class="text-muted">
        Last updated in
        {{ date('M j, Y', strtotime($product->updated_at)) }}</small>
    </p>
  </div>
</div>
