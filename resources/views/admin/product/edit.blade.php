@extends('layouts.admin')

@section('main-content')
    <div class="container-fluid py-4">
        <div class="row min-vh-80">
            <div class="col-lg-8 col-md-10 col-12 m-auto">
                <h3 class="mt-3 mb-0 text-center">Edit Product</h3>
                <p class="lead font-weight-normal opacity-8 mb-7 text-center">This information will let us know more about
                    you.</p>
                <div class="card">
                    <div class="card-header p-0 position-relative mt-n5 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <div class="multisteps-form__progress">
                                <button class="multisteps-form__progress-btn js-active" type="button" title="Product Info">
                                    <span>1. Product Info</span>
                                </button>
                                <button class="multisteps-form__progress-btn" type="button" title="Media">2.
                                    Media</button>
                                <button class="multisteps-form__progress-btn" type="button" title="Pricing">3.
                                    Pricing</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form class="multisteps-form__form" action="{{ url('update-product/'.$products->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="multisteps-form__panel pt-3 border-radius-xl bg-white js-active"
                                data-animation="FadeIn">
                                <h5 class="font-weight-bolder">Product Information</h5>
                                <div class="multisteps-form__content">
                                    <div class="row mt-3">
                                        <div class="col-12 col-sm-6">
                                            <div class="input-group input-group-dynamic">
                                                <label for="" class="form-label">Name</label>
                                                <input class="multisteps-form__input form-control" type="text"
                                                    name="name" value="{{ $products->name }}" />
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                            <div class="input-group input-group-dynamic">
                                                <label for="" class="form-label">Weight (gram)</label>
                                                <input class="multisteps-form__input form-control" type="text"
                                                    name="weight" value="{{ $products->weight }}" />
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="mt-4">
                                                <label for="description">Description</label>
                                                <textarea style="border:solid 1px #ced4da; padding-right:10px; padding-left:10px; resize: none;" rows="6"
                                                    class="multisteps-form__input form-control" type="text" name="description" style="white-space: pre-wrap;" >{{ $products->description }}</textarea>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 mt-sm-3 mt-5">
                                            <div class="input-group input-group-dynamic">
                                                <label for="" class="form-label">Quantity</label>
                                                <input class="multisteps-form__input form-control" type="number"
                                                    name="qty" value="{{ $products->qty }}" />
                                            </div>

                                            <label class="form-control ms-0">Category</label>
                                            <select class="form-control" name="cate_id" id="choices-category">
                                                <option value="">{{ $products->category->name }}</option>
                                            </select>

                                            <div class="form-check col-md-6 mb-3">
                                                <label class="custom-control-label"for="">Status</label>
                                                <input class="form-check-input" type="checkbox" name="status"
                                                    {{ $products->status == '1' ? 'checked' : '' }}>

                                                <label class="custom-control-label" for="">Trending</label>
                                                <input class="form-check-input" type="checkbox" name="trending"
                                                    {{ $products->trending == '1' ? 'checked' : '' }}>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="button-row d-flex mt-4">
                                        <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button"
                                            title="Next">Next</button>
                                    </div>
                                </div>
                            </div>

                            <div class="multisteps-form__panel pt-3 border-radius-xl bg-white" data-animation="FadeIn">
                                <h5 class="font-weight-bolder">Media</h5>
                                <div class="multisteps-form__content">
                                    @if ($products->image)
                                        <img src="{{ asset('assets/uploads/products/' . $products->image) }}"
                                            alt="Product Image" height="250">
                                    @endif
                                    <div class="col-md-12 mt-3">
                                        <input type="file" name="image" class="form-control-file">
                                        <hr>
                                    </div>
                                    <div class="button-row d-flex mt-4">
                                        <button class="btn bg-gradient-light mb-0 js-btn-prev" type="button"
                                            title="Prev">Prev</button>
                                        <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button"
                                            title="Next">Next</button>
                                    </div>
                                </div>
                            </div>

                            <div class="multisteps-form__panel pt-3 border-radius-xl bg-white" data-animation="FadeIn">
                                <div class="multisteps-form__content mt-3">
                                    <h5 class="font-weight-bolder mb-3">Price</h5>
                                    <div class="row">
                                        <div>
                                            <div class="input-group input-group-dynamic">
                                                <label class="form-label">Original Price</label>
                                                <input type="number" class="form-control w-100" name="original_price" value="{{ $products->original_price }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mt-5">
                                            <div class="input-group input-group-dynamic">
                                                <label class="form-label">Selling Price</label>
                                                <input type="number" class="form-control w-100" name="selling_price" value="{{ $products->selling_price }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="button-row d-flex mt-0 mt-md-7">
                                        <button class="btn bg-gradient-light mb-0 js-btn-prev" type="button"
                                            title="Prev">Prev</button>
                                        <button class="btn bg-gradient-dark ms-auto mb-0" type="submit"
                                            title="Send">Send</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
