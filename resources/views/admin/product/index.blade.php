@extends('layouts.admin')

@section('main-content')
<div class="card">
    <div class="card-header"> 
        <h4>Product Page</h4>
        <hr>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Category</th>
                    <th>Name</th>
                    <th>Selling Price</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->category->name }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->selling_price }}</td>
                    <td>
                        <img src="{{ asset('assets/uploads/products/' .$item->image) }}" class="cate-image">
                    </td>
                    <td>
                        <a href="#" class="btn btn-primary btn-sm">Edit</a>
                        <a href="#"class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
                @endforeach


            </tbody>
        </table>

    </div>
</div>
@endsection