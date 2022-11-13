@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Admin Dashboard') }}</div>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif


                        <form action="{{ route('admin.prices') }}" method="POST">
                            @csrf
                            <div class="tex-center ">
                                <h1>
                                    Set Value For Client
                                </h1>
                            </div>
                            {{-- {{$users}}
    {{$products}} --}}
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Client List</label>
                                <select class="form-control" name="user_detail" id="exampleFormControlSelect1">
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach


                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Products List</label>
                                <select name="product_id" class="form-control" id="exampleFormControlSelect1">
                                    @foreach ($products as $product)
                                        <option value="{{ $product->id }}">{{ $product->title }}</option>
                                    @endforeach
                                </select>
                            </div>


                            <div class="form-group">
                                <label for="exampleInputEmail1">Price</label>
                                <input type="number" name="updated_price" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Enter Price For Client">
                                {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
                            </div>
                            <br>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>



                        </form>



                        <!-- {{ __('You are logged in!') }} -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
