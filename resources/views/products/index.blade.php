@extends('main_template')
@section('content')
<div class="row mt-4">
    <div class="col-md-8">
        <h1>Products and Prices for Client: <span style="color: blue">{{ ucfirst($client->name) }}</span></h1>
    </div>
    <div class="col-md-3">
        <a class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#setSpecialPrices">Set Special Prices All Products</a>
        @include('modals.set_products_special_prices')
    </div>
    <div class="col-md-1" style="text-align: end">
        <a class="btn btn-sm btn-primary mt-2" href="{{ route('all.clients') }}">Back</a>
    </div>
</div>
@if(session()->get('success'))
    <div class="alert alert-primary" role="alert">
            <b> {{ session()->get('success') }}</b>
    </div>
@endif
<table class="table table-bordered mt-2">
    <thead>
      <tr class="table-dark">
        <th scope="col">#</th>
        <th scope="col">Product Name</th>
        <th scope="col">Product Base Price(Rs)</th>
        <th scope="col">Product Special Price(Rs)</th>
        <th scope="col">Creation Date</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @php
            $counter = 0;
        @endphp
        @foreach ($products as $product)
            <tr>
                <th scope="row">{{ ++$counter }}</th>
                <td>{{ $product->name }}</td>
                <td>{{ $product->base_price }} </td>
                <td>{{ getSpecialPrice($product,$client) }} </td>
                <td>{{ date("F j, Y",strtotime($product->created_at)) }}</td>
                <td>
                    <a class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#setSpecialPrice{{$product->id}}">Set SP</a>
                </td>
            </tr>
            @include('modals.set_product_special_price')
        @endforeach
    </tbody>
  </table>
  <div class="pull-right">
    {{ $products->links() }}
  </div>
@endsection
