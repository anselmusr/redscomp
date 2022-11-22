@extends('layouts.front')

@section('title')
    My Cart
@endsection

@section('main-content')
    <div class="container  mt-5">
        <div class="row">
            <div class="col-lg-12 mx-auto ">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-warning shadow">
                        <li class="breadcrumb-item text-dark" aria-current="page"><a href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="breadcrumb-item text-dark" aria-current="page"><a href="{{ url('cart') }}">Cart</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="card shadow product_data">
            @if ($cartitems->count() > 0)
                <div class="card-body">
                    @php
                        $total = 0;
                    @endphp

                    @foreach ($cartitems as $item)
                        <div class="row product_data">
                            <div class="col-md-3 my-auto">
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
                                <h6>{{ $item->products->weight }} gram</h6>
                            </div>
                            <div class="col-md-3 my-auto">
                                <input type="hidden" class="prod_id" value="{{ $item->prod_id }}">
                                @if ($item->products->qty >= $item->prod_qty)
                                    <label for="Quantity">Quantity</label>
                                    <div class="input-group text-center mb-3" style="width:130px;">
                                        <div class="input-group w-auto justify-content-end align-items-center">
                                            <input type="button" value="-"
                                                class="button-minus border rounded-circle  icon-shape icon-sm mx-1 changeQuantity decrement-btn"
                                                data-field="quantity">
                                            <input type="number" max="{{ $item->products->qty }}"
                                                value="{{ $item->prod_qty }}" name="quantity"
                                                class="form-control border-0 text-center qty-input">
                                            <input type="button" value="+"
                                                class="button-plus border rounded-circle icon-shape icon-sm changeQuantity increment-btn"
                                                data-field="quantity">
                                        </div>
                                    </div>
                                    @php $total += $item->products->selling_price * $item->prod_qty ; @endphp
                                @else
                                    <h6>Out of Stock</h6>
                                @endif
                            </div>
                            <div class="col-md-2 my-auto">
                                <button class="btn btn-danger delete-cart-item"> <i class="fa fa-trash"></i> Remove</button>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="card-footer">
                    <h6>Total Price : @currency($total)
                        <a href="{{ url('checkout') }}" class="btn btn-outline-success float-end">Proceed to Checkout</a>
                    </h6>
                </div>
            @else
                <div class="card-body text-center mt-5">
                    <h2><i class="fa fa-shopping-cart"></i> Your Cart is empty</h2>
                    <a href="{{ url('category') }}" class="btn btn-outline-primary float-end">Continue Shopping</a>
                </div>
            @endif
        </div>
    </div>
@endsection
