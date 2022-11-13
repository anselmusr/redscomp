@extends('layouts.front')

@section('title')
    Order View
@endsection

@section('main-content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-primary">
                        <h4 class="text-white">Order View
                            <a href="{{ url('my-orders') }}" class="btn btn-warning float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 order-details">
                                <h4>Shipping Details</h4>
                                <hr>
                                <label for="">First Name</label>
                                <div class="border">{{ $orders->fname }}</div>
                                <label for="">Last Name</label>
                                <div class="border">{{ $orders->lname }}</div>
                                <label for="">Email</label>
                                <div class="border">{{ $orders->email }}</div>
                                <label for="">Contact No.</label>
                                <div class="border">{{ $orders->phone }}</div>
                                <label for="">Shipping Address</label>
                                <div class="border">
                                    {{ $orders->address1 }}, <br>
                                    {{ $orders->address2 }}, <br>
                                    {{ $orders->city }}, <br>
                                    {{ $orders->state }},
                                    {{ $orders->country }},
                                </div>
                                <label for="">Zip Code</label>
                                <div class="border">{{ $orders->pincode }}</div>
                            </div>
                            <div class="col-md-6">
                                <h4>Order Details</h4>
                                <hr>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                            <th>Image</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orders->orderitems as $item)
                                            <tr>
                                                <td>{{ $item->products->name }}</td>
                                                <td>{{ $item->qty }}</td>
                                                <td> @currency($item->price) </td>
                                                <td>
                                                    <img src="{{ asset('assets/uploads/products/' . $item->products->image) }}"
                                                        width="60px" alt="Product Image">

                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                <h6 class="px-2">Total : @currency($orders->total_price)<span class="float-end">Ongkos Kirim :
                                        @currency($orders->ongkir)</span></h6>


                                <h4 class="px-2 text-white bg-info">Grand Total :<span class="float-end">@currency($orders->total_price + $orders->ongkir)</span>
                                </h4>
                                <br>
                                <h5 class="px-2">No. Resi : <span class="float-end">{{ $orders->no_resi }}</span>
                                </h5>
                                <hr>
                                @if ($orders->status == '0')
                                    <h5 class="px-2">Please Transfer to :</h5>
                                    <h5 class="px-2">Bank BRI -<span class="float-end">656001001006500 (Redha Ardy
                                            Setyawan)</span></h5><br>
                                    <hr>
                                    <form action="{{ url('view-order/' . $orders->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        {{-- <label for="no_resi">No. Resi :</label><br>
                                        <input type="text" id="no_resi" name="no_resi" value="-"><br>
                                        <select class="form-select" name="order_status">
                                            <option {{ $orders->status == '0'? 'selected':'' }} value="0">Processing</option>
                                            <option {{ $orders->status == '1'? 'selected':'' }} value="1">Completed</option>
                                        </select> --}}



                                        @if ($orders->b_pembayaran)
                                            <div class="card">
                                                <h5 class="px-2 card-header">Bukti Pembayaran :</h5>
                                                <div class="card-body">
                                                    <img class="px-2"
                                                        src="{{ asset('assets/uploads/pembayaran/' . $orders->b_pembayaran) }}"
                                                        width="200px">
                                                    <hr>
                                                    <input class="px-2" type="file" name="b_pembayaran"
                                                        accept="image/*" required>
                                                    <button type="submit"
                                                        class="btn btn-primary float-end ">Update</button>
                                                </div>
                                            </div>
                                        @else
                                            <div class="card">
                                                <h5 class="px-2 card-header bg-warning text-white">Silahkan Upload Bukti
                                                    Pembayaran!</h5>
                                                <div class="card-body">
                                                    <input class="px-2" type="file" name="b_pembayaran"
                                                        accept="image/*" required>
                                                    <button type="submit"
                                                        class="btn btn-primary float-end ">Upload</button>
                                                </div>
                                            </div>
                                        @endif

                                    </form>
                                @else
                                    <div class="card">
                                        <div class="card-body bg-warning">
                                            <h5 class="px-2">Barang sudah dikirim, Silahkan cek No.Resi di Website
                                                Ekpedisi. Terimakasih.</h5>
                                        </div>
                                    </div>
                                @endif
                                {{-- <input class="px-2" type="file" name="image" class="form-control-file">
                                <button type="submit" class="btn btn-primary float-end">Upload proof of payment</button> --}}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
