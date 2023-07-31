<div class="modal fade" id="setSpecialPrice{{$product->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('set.product.special.price',$client)}}" method="POST">
            @csrf
            <div class="modal-body">
                    <input type="hidden" name="productId" value="{{$product->id}}">
                    <label for="">Product Special Price</label>
                    <input class="form-control mt-2" type="number" min="0" name="special_price" id="" required>
                    <button type="submit" class="btn btn-sm btn-primary mt-4">Save</button>
            </div>
        </form>
      </div>
    </div>
</div>
