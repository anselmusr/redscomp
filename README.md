@extends('layouts.front')

@section('title')
    Red's Computer
@endsection


@section('main-content')
<h1 class="mt-5 mb-3" style="text-align: center">Red's Computer</h1>
<p class="lead mb-5" style="text-align: center">Jl. Jogoripon, Geneng, Pendowoharjo, Kec. Sewon, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55188</p>

    @include('layouts.inc.slider')

    <div class="py-5">
        <div class="container">
            <div class="row">
                <h2>Featured Products</h2>
                <div class="owl-carousel featured-carousel owl-theme">
                    @foreach ($featured_products as $prod)
                        <div class="item">
                            <a href="{{ url('category/'.$prod->category->slug.'/'.$prod->slug) }}">
                            <div class="card">
                                <img src="{{ asset('assets/uploads/products/'.$prod->image) }}" alt="Product Image">
                                <div class="card-body">
                                    <h5>{{ $prod->name }}</h5>
                                    <span class="float-start">
                                        @currency($prod->selling_price)
                                    </span>
                                    <span class="float-end">
                                        <s>
                                            @currency($prod->original_price)
                                        </s>
                                    </span>
                                </div>
                            </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="py-5">
        <div class="container">
            <div class="row">
                <h2>Trending Category</h2>
                <div class="owl-carousel featured-carousel owl-theme">
                    @foreach ($trending_category as $tcategory)
                        <div class="item">
                            <a href="{{ url('category/'.$tcategory->slug) }}">
                            <div class="card">
                                <img src="{{ asset('assets/uploads/category/'.$tcategory->image) }}" alt="Product Image">
                                <div class="card-body">
                                    <h5>{{ $tcategory->name }}</h5>
                                    <p>
                                        {{ $tcategory->description }}
                                    </p>
                                </div>
                            </div>
                            </a>
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
    loop:true,
    margin:50,
    nav:true,
    dots:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:3
        }
    }
})
</script>
@endsection
