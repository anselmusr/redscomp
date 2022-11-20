@extends('layouts.front')

@section('title')
    Red's Computer
@endsection


@section('main-content')
    <h1 class="mt-5 mb-3" style="text-align: center">Red's Computer</h1>
    <p class="lead mb-5" style="text-align: center">Jl. Jogoripon, Geneng, Pendowoharjo, Kec. Sewon, Kabupaten Bantul, Daerah
        Istimewa Yogyakarta 55188</p>

    @include('layouts.inc.slider')

    <div class="py-5">
        <div class="container">
            <h2>Featured Products</h2>
            <div class="row">
                <div class="owl-carousel featured-carousel owl-theme">
                    @foreach ($featured_products as $prod)
                        <div class="item">
                            <div class="card mt-7 mb-2" data-animation="true">
                                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                    <a href="{{ url('category/' . $prod->category->name . '/' . $prod->name) }}"
                                        class="d-block blur-shadow-image">
                                        <img src="{{ asset('assets/uploads/products/' . $prod->image) }}"
                                            alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                                    </a>
                                    <div class="colored-shadow"
                                        style="background-image: url(&quot;{{ asset('assets/uploads/products/' . $prod->image) }}&quot;);">
                                    </div>
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="font-weight-normal mt-3">
                                        <a
                                            href="{{ url('category/' . $prod->category->name . '/' . $prod->name) }}">{{ $prod->name }}</a>
                                    </h5>
                                </div>
                                <hr class="dark horizontal my-0">
                                <div class="card-footer d-flex">
                                    <p class="font-weight-normal my-auto">@currency($prod->selling_price)</p>
                                    <p class="position-relative ms-auto text-sm me-1 my-auto"> <s>@currency($prod->original_price)</s>
                                    </p>
                                </div>

                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="py-5">
        <div class="container">
            <h2>Trending Category</h2>
            <div class="row">
                <div class="owl-carousel featured-carousel owl-theme">
                    @foreach ($trending_category as $tcategory)
                        <div class="item">
                            <div class="card mt-7 mb-2" data-animation="true">
                                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                    <a href="{{ url('category/' . $tcategory->name) }}" class="d-block blur-shadow-image">
                                        <img src="{{ asset('assets/uploads/category/' . $tcategory->image) }}"
                                            alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                                    </a>
                                    <div class="colored-shadow"
                                        style="background-image: url(&quot;{{ asset('assets/uploads/category/' . $tcategory->image) }}&quot;);">
                                    </div>
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="font-weight-normal mt-3">
                                        <a href="{{ url('category/' . $tcategory->name) }}">{{ $tcategory->name }}</a>
                                    </h5>
                                    <p>{{ $tcategory->description }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $('.featured-carousel').owlCarousel({
            loop: true,
            margin: 50,
            autoHeight: true,
            nav: true,
            dots: false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 3
                }
            }
        })
    </script>
@endsection
