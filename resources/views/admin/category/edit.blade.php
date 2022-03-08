@extends('layouts.admin')


@section('main-content')
<div class="card">
    <div class="card-header">
        <h4>Edit/Update category</h4>
        <hr>
    </div>
    <div class="card-body">
        <form action="{{ url('update-category/'.$category->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class ="row">
                <div class="col-md-6 mb-3" >
                    <label for="">Name</label>
                    <input type="text" value="{{ $category->name }}" class ="form-control" name="name">
                    <hr>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Slug</label>
                    <input type="text" value="{{ $category->slug }}" class ="form-control" name="slug">
                    <hr>
                </div>

                <div class="col-md-12 mb-3">
                    <label for="">Description</label>
                    <textarea name="description" rows="3" class="form-control"> {{ $category->description }}</textarea>
                    <hr>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="">Status</label>
                    <input type="checkbox" {{ $category->status == "1" ? 'checked':"" }} name="status">
                    <hr>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="">Popular</label>
                    <input type="checkbox" {{ $category->popular == "1" ? 'checked':"" }} name="popular">
                    <hr>
                </div>

                <div class="col-md-12 mb-3">
                    <label for ="">Meta Title</label>
                    <input type="text" value="{{ $category->meta_title }}" class="form-control" name="meta_title">
                    <hr>
                </div>

                <div class="col-md-12 mb-3">
                    <label for ="">Meta Keywords</label>
                    <textarea name="meta_keywords" rows="3" class="form-control">{{ $category->meta_keywords }}</textarea>
                    <hr>
                </div>

                <div class="col-md-12 mb-3">
                    <label for ="">Meta Description</label>
                    <textarea name="meta_description" rows="3" class="form-control">{{ $category->meta_descrip }}</textarea>
                    <hr>
                </div>
                @if($category->image)
                <img src="{{ asset('assets/uploads/category/'.$category->image) }}" alt="Category Image">
                @endif

                <div class="col-md-12">
                    <input type="file" name="image" class="form-control">    
                    <hr>
                </div>

                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <hr>
                </div>

            </div>
        </form>
    </div>
</div>
@endsection