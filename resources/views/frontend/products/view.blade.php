@extends('layouts.front')

@section('title', $products->name)

@section('main-content')
    <div class="container  mt-5">
        <div class="row">
            <div class="col-lg-12 mx-auto ">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-warning shadow">
                        <li class="breadcrumb-item text-dark"><a href="{{ url('category') }}">Collections</a></li>
                        <li class="breadcrumb-item text-dark"><a
                                href="{{ url('category/' . $products->category->name) }}">{{ $products->category->name }}</a>
                        </li>
                        <li class="breadcrumb-item text-dark" aria-current="page"><a
                                href="{{ url('category/' . $products->category->name . '/' . $products->name) }}">{{ $products->name }}</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="card shadow product_data">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 border-right">
                        <img src="{{ asset('assets/uploads/products/' . $products->image) }}" class="w-100" alt="">
                    </div>
                    <div class="col-md-8">
                        <h2 class="mb-0">
                            {{ $products->name }}
                            @if ($products->trending == '1')
                                <label style="font-size: 16px;" class="float-end badge bg-danger trending-tag"> Trending
                                </label>
                            @endif
                        </h2>

                        <hr>
                        <label class="me-3">Original Price : <s>@currency($products->original_price)</s></label>
                        <label class="fw-bold">Selling Price : @currency($products->selling_price)</label>
                        <p class="mt-3">
                            {!! nl2br(e($products->description)) !!}
                        </p>
                        <hr>
                        @if ($products->qty > 0)
                            <label class="badge bg-success">In Stock</label>
                        @else
                            <label class="badge bg-danger">Out of Stock</label>
                        @endif
                        <div class="row mt-2">
                            <div class="col-md-2">
                                <input type="hidden" value="{{ $products->id }}" class="prod_id">
                                <label for="Quantity">Quantity</label>
                                <div class="input-group w-auto justify-content-end align-items-center text-center mb-3"
                                    style="width:130px;">
                                    <input type="button" value="-"
                                        class="button-minus border rounded-circle  icon-shape icon-sm mx-1 decrement-btn"
                                        data-field="quantity">
                                    <input type="number" max="{{ $products->qty }}" value="1" name="quantity"
                                        class="form-control border-0 text-center qty-input">
                                    <input type="button" value="+"
                                        class="button-plus border rounded-circle icon-shape icon-sm increment-btn"
                                        data-field="quantity">
                                </div>
                            </div>
                            <div class="col-md-10">
                                <br />
                                @if ($products->qty > 0)
                                    <button type="button" class="btn btn-primary addToCartBtn me-3 float-end">Add to cart
                                        <i class="fa fa-shopping-cart"></i> </button>
                                @endif
                                <button type="button" class="btn btn-success me-3 addToWishlist float-end">Add to Wishlist
                                    <i class="fa fa-heart"></i> </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
