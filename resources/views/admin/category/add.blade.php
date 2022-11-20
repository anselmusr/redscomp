@extends('layouts.admin')

@section('main-content')
    <div class="container-fluid py-4">
        <div class="row min-vh-80">
            <div class="col-lg-8 col-md-10 col-12 m-auto">
                <h3 class="mt-3 mb-0 text-center">Add New Category</h3>
                <p class="lead font-weight-normal opacity-8 mb-7 text-center">This information will let us know more about
                    you.</p>
                <div class="card">
                    <div class="card-header p-0 position-relative mt-n5 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <div class="multisteps-form__progress">
                                <button class="multisteps-form__progress-btn js-active" type="button" title="Product Info">
                                    <span>1. Category Info</span>
                                </button>
                                <button class="multisteps-form__progress-btn" type="button" title="Media">2.
                                    Media</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form class="multisteps-form__form" action="{{ url('insert-category') }}" method="POST"
                            enctype="multipart/form-data" id="FormId">
                            @csrf
                            <div class="multisteps-form__panel pt-3 border-radius-xl bg-white js-active"
                                data-animation="FadeIn">
                                <h5 class="font-weight-bolder">Category Product Information</h5>
                                <div class="multisteps-form__content">
                                    <div class="row mt-3">
                                        <div class="col-12">
                                            <div class="input-group input-group-dynamic">
                                                <label for="" class="form-label">Name</label>
                                                <input class="multisteps-form__input form-control" type="text"
                                                    name="name" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="mt-4">
                                                <label for="description">Description</label>
                                                <textarea style="border:solid 1px #ced4da;  padding-right:10px; padding-left:10px; resize: none;" rows="6"
                                                    class="multisteps-form__input form-control" type="text" name="description" style="white-space: pre-wrap;"></textarea>
                                            </div>
                                        </div>

                                        <div class="form-check col-sm-6 mt-sm-3 mt-5">
                                            <h6 class="mt-5" >Status Category Product</h6>
                                            <div class="col-md-6 mb-3 mt-3">
                                                <label class="custom-control-label" for="">Available</label>
                                                <input class="form-check-input" type="checkbox" name="status">

                                                <label class="custom-control-label" for="">Popular</label>
                                                <input class="form-check-input" type="checkbox" name="popular">
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
                                    <div class="col-md-12">
                                        <input type="file" name="image" class="form-control-file">
                                        <hr>
                                    </div>
                                    <div class="button-row d-flex mt-4">
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

        {{-- <div class="card">
    <div class="card-header">
        <h4>Add category</h4>
        <hr>
    </div>
    <div class="card-body">
        <form action="{{ url('insert-category') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class ="row">
                <div class="col-md-6 mb-3" >
                    <label for="">Name</label>
                    <input type="text" class ="form-control" name="name">
                    <hr>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Slug</label>
                    <input type="text" class ="form-control" name="slug">
                    <hr>
                </div>

                <div class="col-md-12 mb-3">
                    <label for="">Description</label>
                    <textarea name="description" rows="3" class="form-control"></textarea>
                    <hr>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="">Status</label>
                    <input type="checkbox" name="status">
                    <hr>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="">Popular</label>
                    <input type="checkbox" name="popular">
                    <hr>
                </div>

                <div class="col-md-12 mb-3">
                    <label for ="">Meta Title</label>
                    <input type="text" class="form-control" name="meta_title">
                    <hr>
                </div>

                <div class="col-md-12 mb-3">
                    <label for ="">Meta Keywords</label>
                    <textarea name="meta_keywords" rows="3" class="form-control"></textarea>
                    <hr>
                </div>

                <div class="col-md-12 mb-3">
                    <label for ="">Meta Description</label>
                    <textarea name="meta_description" rows="3" class="form-control"></textarea>
                    <hr>
                </div>

                <div class="col-md-12">
                    <input type="file" name="image" class="form-control-file">
                    <hr>
                </div>

                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>

            </div>
        </form>
    </div>
</div> --}}
    @endsection
