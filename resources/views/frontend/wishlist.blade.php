@extends('layouts.front')

@section('title')
    My Wishlist
@endsection

@section('main-content')
    <div class="container  mt-5">
        <div class="row">
            <div class="col-lg-12 mx-auto ">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-warning shadow">
                        <li class="breadcrumb-item text-dark" aria-current="page"><a href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="breadcrumb-item text-dark" aria-current="page"><a href="{{ url('wishlist') }}">Wishlist</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="card shadow">
            <div class="card-body">
                @if ($wishlist->count() > 0)
                    @foreach ($wishlist as $item)
                        <div class="row product_data">
                            <div class="col-md-2 my-auto">
                                <img src="{{ asset('assets/uploads/products/' . $item->products->image) }}" width="124,44px"
                                    alt="Image here">
                            </div>
                            <div class="col-md-2 my-auto">
                                <h6>{{ $item->products->name }}</h6>
                            </div>
                            <div class="col-md-2 my-auto">
                                <h6> @currency($item->products->selling_price) </h6>
                            </div>
                            <div class="col-md-2 my-auto">
                                <input type="hidden" class="prod_id" value="{{ $item->prod_id }}">
                                @if ($item->products->qty > $item->prod_qty)
                                    <label for="Quantity">Quantity</label>
                                    <div class="input-group text-center mb-3" style="width:130px;">
                                        <div class="input-group w-auto justify-content-end align-items-center">
                                            <input type="button" value="-"
                                                class="button-minus border rounded-circle  icon-shape icon-sm mx-1 decrement-btn"
                                                data-field="quantity">
                                            <input type="number" max="{{ $item->products->qty }}" value="1"
                                                name="quantity" class="form-control border-0 text-center qty-input">
                                            <input type="button" value="+"
                                                class="button-plus border rounded-circle icon-shape icon-sm increment-btn"
                                                data-field="quantity">
                                        </div>
                                    </div>
                                @else
                                    <h6>Out of Stock</h6>
                                @endif
                            </div>
                            <div class="col-md-2 my-auto">
                                <button class="btn btn-success addToCartBtn"> <i class="fa fa-shopping-cart"></i>Add to
                                    Cart</button>
                            </div>
                            <div class="col-md-2 my-auto">
                                <button class="btn btn-danger remove-wishlist-item"> <i
                                        class="fa fa-trash"></i>Remove</button>
                            </div>
                        </div>
                    @endforeach
                @else
                    <h4>There are no products in your Wishlist</h4>
                @endif
            </div>
        </div>
    </div>
@endsection
