<div class="modal fade" id="setSpecialPrices" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{ route('set.products.special.prices', $client) }}" method="post">
                @csrf
                <ul>
                    @foreach($products as $product)
                        <li class="mt-2">
                            {{ $product->name }} - Base Price (Rs): {{ $product->base_price }}
                            <input class="form-control" type="number" name="prices[{{ $product->id }}]" step="0.01" min="0" placeholder="Enter Special Price" required>
                        </li>
                    @endforeach
                </ul>
                <button class="btn btn-primary mt-2" type="submit">Save Prices</button>
            </form>
        </div>
      </div>
    </div>
</div>

