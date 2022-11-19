@extends('layouts.front')

@section('title')
    Category
@endsection

@section('main-content')
    {{-- <div class="py-3 mb-4 shadow-sm bg-warning border-top">
        <div class="container">
            <h6 class="mb-0">
                <a href="{{ url('category') }}">
                    Collections
                </a>
            </h6>
        </div>
    </div> --}}

    <div class="container  mt-5">
        <div class="row">
            <div class="col-lg-12 mx-auto " >
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-warning shadow">
                        <li class="breadcrumb-item text-dark" aria-current="page"><a
                            href="{{ url('category') }}">Collections</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>All Categories</h2>
                    <div class="row">
                        @foreach ($category as $cate)
                        <div class="col-md-3 mb-3">
                            <a href="{{ url('category/'.$cate->slug) }}">
                            <div class="card">
                                <img src="{{ asset('assets/uploads/category/'.$cate->image) }}" alt="Category Image">
                                <div class="card-body">
                                    <h5>{{ $cate->name }}</h5>
                                    <p>
                                        {{ $cate->description }}
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
    </div>
@endsection
