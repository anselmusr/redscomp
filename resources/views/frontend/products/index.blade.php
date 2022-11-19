@extends('layouts.front')

@section('title')
    {{ $category->name }}
@endsection

@section('main-content')

{{-- <div class="py-3 mb-4 shadow-sm bg-warning border-top">
    <div class="container">
        <h6 class="mb-0">
            <a href="{{ url('category') }}">
                Collections
            </a> /
            <a href="{{ url('category/'.$category->slug) }}">
                {{ $category->name }}
            </a>
        </h6>
    </div>
</div> --}}

<div class="container  mt-5">
    <div class="row">
        <div class="col-lg-12 mx-auto " >
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-warning shadow">
                    <li class="breadcrumb-item text-dark"><a
                        href="{{ url('category') }}">Collections</a>
                    </li>
                    <li class="breadcrumb-item text-dark" aria-current="page"><a
                        href="{{ url('category/'.$category->slug) }}">{{ $category->name }}</a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<div class="py-5">
    <div class="container">
        <div class="row">
            <h2> {{ $category->name }} </h2>
                @foreach ($products as $prod)
                    <div class="col-md-3 mb-3">
                        <div class="card">
                            <a class="card" href="{{ url('category/'.$category->slug.'/'.$prod->name) }}">
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

@endsection
