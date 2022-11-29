@extends('layouts.front')

@section('title', $products->name)

@section('main-content')
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <form action="{{ url('/add-rating') }}" method="POST">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $products->id }}">
                    <div class="modal-header">
                        <h5 class="modal-title font-weight-normal" id="exampleModalLabel">Rate {{ $products->name }}</h5>
                        <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="rating-css">
                            <div class="star-icon">
                                @if ($user_rating)
                                    @for ($i = 1; $i <= $user_rating->stars_rated; $i++)
                                        <input type="radio" value="{{ $i }}" name="product_rating" checked
                                            id="rating{{ $i }}">
                                        <label for="rating{{ $i }}" class="fa fa-star"></label>
                                    @endfor
                                    @for ($j = $user_rating->stars_rated + 1; $j <= 5; $j++)
                                        <input type="radio" value="{{ $j }}" name="product_rating"
                                            id="rating{{ $j }}">
                                        <label for="rating{{ $j }}" class="fa fa-star"></label>
                                    @endfor
                                @else
                                    <input type="radio" value="1" name="product_rating" checked id="rating1">
                                    <label for="rating1" class="fa fa-star"></label>
                                    <input type="radio" value="2" name="product_rating" id="rating2">
                                    <label for="rating2" class="fa fa-star"></label>
                                    <input type="radio" value="3" name="product_rating" id="rating3">
                                    <label for="rating3" class="fa fa-star"></label>
                                    <input type="radio" value="4" name="product_rating" id="rating4">
                                    <label for="rating4" class="fa fa-star"></label>
                                    <input type="radio" value="5" name="product_rating" id="rating5">
                                    <label for="rating5" class="fa fa-star"></label>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn bg-gradient-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

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
                        <img src="{{ asset('assets/uploads/products/' . $products->image) }}" class="w-100"
                            alt="">
                    </div>
                    <div class="col-md-8">
                        <h2 class="mb-0">
                            {{ $products->name }}
                            @if ($products->trending == '1')
                                <span class="badge badge-danger float-end trending-tag" style="font-size: 16px;">Trending</span>
                            @endif
                        </h2>
                        @php $ratenum = number_format($rating_value) @endphp
                        <div class="rating">
                            @for ($i = 1; $i <= $ratenum; $i++)
                                <i class="material-icons text-lg">grade</i>
                            @endfor
                            @for ($j = $ratenum + 1; $j <= 5; $j++)
                                <i class="material-icons text-lg">star_outline</i>
                            @endfor
                            <span>
                                @if ($ratings->count() > 0)
                                    {{ $ratings->count() }} Ratings
                                @else
                                    No Ratings
                                @endif
                            </span>
                        </div>

                        <hr>
                        <label class="me-3">Original Price : <s>@currency($products->original_price)</s></label>
                        <label class="fw-bold">Selling Price : @currency($products->selling_price)</label>

                        <p class="mt-3">
                            {!! nl2br(e($products->description)) !!}
                        </p>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn bg-gradient-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            Rate This Product
                        </button>
                        <a href="{{ url('add-review/' . $products->name . '/userreview') }}"
                            class="btn bg-gradient-primary">
                            Write a review
                        </a>

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
                                <button type="button" class="btn btn-success me-3 addToWishlist float-end">Add to
                                    Wishlist
                                    <i class="fa fa-heart"></i> </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-3">
        <div class="card shadow product_data">
            <div class="card-body">
                <div class="row">
                    <h4 class="mb-3">User Reviews</h4>
                    @if ($reviews->count() > 0)
                        <div class="col-md-12">
                            @foreach ($reviews as $item)
                                <div class="user-review mb-3" style="background-color: #e9ecef; padding: 20px; border-radius: 15px;">
                                    <label for="">{{ $item->user->name . ' ' . $item->user->lname }}</label>
                                    @if ($item->user_id == Auth::id())
                                        <a class="float-end" href="{{ url('edit-review/' . $products->name . '/userreview') }}">Edit</a>
                                    @endif
                                    <br>
                                    @php
                                        $rating = App\Models\Rating::where('prod_id', $products->id)
                                            ->where('user_id', $item->user->id)
                                            ->first();
                                    @endphp
                                    @if ($rating)
                                        @php
                                            $user_rated = $rating->stars_rated;
                                        @endphp

                                        @for ($i = 1; $i <= $user_rated; $i++)
                                            <i class="material-icons text-lg">grade</i>
                                        @endfor
                                        @for ($j = $user_rated + 1; $j <= 5; $j++)
                                            <i class="material-icons text-lg">star_outline</i>
                                        @endfor
                                    @endif
                                    <small>Reviewed on {{ $item->created_at->format('d M Y') }}</small>
                                    <p align="justify">
                                        {{ $item->user_review }}
                                    </p>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <p class="text-center">No user review this product.</p>
                    @endif

                </div>
            </div>
        </div>
    </div>

@endsection
