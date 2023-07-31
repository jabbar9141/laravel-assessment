@extends('main_template')
@section('content')
<h1 class="mt-2">List of All Clients</h1>
<table class="table table-bordered mt-2">
    <thead>
      <tr class="table-dark">
        <th scope="col">#</th>
        <th scope="col">Client Name</th>
        <th scope="col">Client Email</th>
        <th scope="col">Creation Date</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @php
            $counter = 0;
        @endphp
        @foreach ($clients as $client)
            <tr>
                <th scope="row">{{ ++$counter }}</th>
                <td>{{ $client->name }}</td>
                <td>{{ $client->email }}</td>
                <td>{{ date("F j, Y",strtotime($client->created_at)) }}</td>
                <td>
                    <a class="btn btn-sm btn-primary" href="{{ route('products.index', $client) }}">Check Products</a>
                </td>
            </tr>
        @endforeach
    </tbody>
  </table>
  <div class="pull-right">
    {{ $clients->links() }}
  </div>
@endsection
