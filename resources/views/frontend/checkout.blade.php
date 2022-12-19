@extends('layouts.front')

@section('title')
    Checkout
@endsection

@section('main-content')
    <div class="py-3 mb-4 shadow-sm bg-warning border-top">
        <div class="container">
            <h6 class="mb-0">
                <a href="{{ url('/') }}">
                    Home
                </a> /
                <a href="{{ url('checkout') }}">
                    Checkout
                </a>
            </h6>
        </div>
    </div>

    <div class="container-fluid mt-5">
        <form action="{{ url('place-order') }}" method="POST">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-7">
                    <div class="card card-frame">
                        <div class="card-body ">
                            <h6>Basic Details</h6>
                            <hr>
                            <div class="row checkout-form input-group input-group-outline">
                                <div class="col-md-6">
                                    <label for="">First Name</label>
                                    <input type="text" class="form-control" value="{{ Auth::user()->name }}"
                                        name="fname" placeholder="Enter First Name" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Last Name</label>
                                    <input type="text" class="form-control" value="{{ Auth::user()->lname }}"
                                        name="lname" placeholder="Enter Last Name" required>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="">Email</label>
                                    <input type="text" class="form-control" value="{{ Auth::user()->email }}"
                                        name="email" placeholder="Enter Email" required>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="">Phone Number</label>
                                    <input type="text" class="form-control" value="{{ Auth::user()->phone }}" pattern="^(\+62|62|0)8[1-9][0-9]{6,9}$"
                                        name="phone" placeholder="Enter Phone Number" required>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="">Address 1</label>
                                    <input type="text" class="form-control" value="{{ Auth::user()->address1 }}"
                                        name="address1" placeholder="Enter Address 1" required>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="">Address 2</label>
                                    <input type="text" class="form-control" value="{{ Auth::user()->address2 }}"
                                        name="address2" placeholder="Enter Address 2" required>
                                </div>

                                <div class="col-md-6 mt-3">
                                    <label for="">Country</label>
                                    <input type="text" class="form-control" value="{{ Auth::user()->country }}"
                                        name="country" placeholder="Enter Country" required>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="state">State</label>
                                    <select name="province_id" id="province_id" class="form-control" required>

                                        <option value="">-- Select Province --</option>

                                        @foreach ($provinsi as $row)
                                            <option value="{{ $row['province_id'] }}"
                                                nameprovince="{{ $row['province'] }}">
                                                {{ $row['province'] }}</option>
                                        @endforeach
                                    </select>

                                    <input type="hidden" class="form-control" id="show_province" name="show_province">
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="city">City</label>
                                    <select name="city_id" id="city_id" class="form-control" required>
                                        <option value="">-- Select City --</option>
                                    </select>
                                    <input type="hidden" class="form-control" id="show_city" name="show_city">
                                </div>

                                <div class="col-md-6 mt-3">
                                    <label for="">Postal Code</label>
                                    <input type="text" class="form-control" value="{{ Auth::user()->pincode }}" pattern="^([1-9])[0-9]{4}$"
                                        name="pincode" placeholder="Enter Postal Code" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 auto">
                    <div class="card card-frame">
                        <div class="card-body">
                            <h6>Order Details</h6>
                            <hr>
                            @if ($cartitems->count() > 0)
                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Qty</th>
                                            <th>Price</th>
                                            <th>Weight</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($cartitems as $item)
                                            <tr>
                                                <td>{{ $item->products->name }}</td>
                                                <td>{{ $item->prod_qty }}</td>
                                                <td>@currency($item->products->selling_price)</td>
                                                <td>{{ $item->products->weight * $item->prod_qty }} gram</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <hr>
                                <div class="row checkout-form input-group input-group-outline px-2 mb-6">
                                    <div class="col-md-6 mt-3">
                                        <label for="">Weight (gram)</label>
                                        <input class="form-control" type="text" value="{{ $total_weight }}"
                                            id="weight" name="weight" readonly>
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <label for="ekspedisi">Pilih Kurir</label>
                                        <select name="courier" id="ekspedisi" class="form-control" required>
                                            <option value="">-- Select Courier ---</option>
                                        </select>
                                    </div>
                                    <div class="mt-3">
                                        <label>Pilih Layanan<span>*</span>
                                        </label>
                                        <select name="layanan" id="layanan" class="form-control" required>
                                            <option value="">-- Select Shipping Cost --</option>
                                        </select>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary float-end">Place Order</button>
                            @else
                                <div class="card-body text-center">
                                    <h2>No products in cart</h2>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
