@extends('layouts.admin')

@section('main-content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-lg-12 position-relative z-index-2">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card  mb-2">
                            <div class="card-header p-3 pt-2">
                                <div
                                    class="icon icon-lg icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-xl mt-n4 position-absolute">
                                    <i class="material-icons opacity-10">article</i>
                                </div>
                                <div class="text-end pt-1">
                                    <p class="text-sm mb-0 text-capitalize">This Month Orders</p>
                                    <h4 class="mb-0">{{ $order_now }}</h4>
                                </div>
                            </div>
                            <hr class="dark horizontal my-0">
                            <div class="card-footer p-3">
                                <p class="mb-0"><span class="text-success text-sm font-weight-bolder">
                                        @if ($percent_order >= 0)
                                            +{{ $percent_order }}%
                                        @else
                                            {{ $percent_order }}%
                                        @endif
                                    </span>than
                                    last month</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 mt-sm-0 mt-4">
                        <div class="card  mb-2">
                            <div class="card-header p-3 pt-2">
                                <div
                                    class="icon icon-lg icon-shape bg-gradient-primary shadow-primary shadow text-center border-radius-xl mt-n4 position-absolute">
                                    <i class="material-icons opacity-10">inventory_2</i>
                                </div>
                                <div class="text-end pt-1">
                                    <p class="text-sm mb-0 text-capitalize">Total Products</p>
                                    <h4 class="mb-0">{{ $count_product }}</h4>
                                </div>
                            </div>
                            <hr class="light horizontal my-0">
                            <div class="card-footer p-3">
                                <p class="mb-0 text-white"><span class="text-success text-sm font-weight-bolder text-white">+3% </span>than
                                    last month</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 mt-lg-0 mt-4">
                        <div class="card  mb-2">
                            <div class="card-header p-3 pt-2 bg-transparent">
                                <div
                                    class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                                    <i class="material-icons opacity-10">category</i>
                                </div>
                                <div class="text-end pt-1">
                                    <p class="text-sm mb-0 text-capitalize ">Total Category</p>
                                    <h4 class="mb-0 ">{{ $count_category }}</h4>
                                </div>
                            </div>
                            <hr class="horizontal my-0 light">
                            <div class="card-footer p-3">
                                <p class="mb-0 text-white"><span class="text-success text-sm font-weight-bolder text-white">+1% </span>than
                                    yesterday</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 mt-lg-0 mt-4">
                        <div class="card ">
                            <div class="card-header p-3 pt-2 bg-transparent">
                                <div
                                    class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                                    <i class="material-icons opacity-10">group</i>
                                </div>
                                <div class="text-end pt-1">
                                    <p class="text-sm mb-0 text-capitalize ">Registered Users</p>
                                    <h4 class="mb-0 ">{{ $count_user }}</h4>
                                </div>
                            </div>
                            <hr class="horizontal my-0 dark">
                            <div class="card-footer p-3">
                                <p class="mb-0 "><span class="text-success text-sm font-weight-bolder">
                                    @if ($percent_user >= 0)
                                            +{{ $percent_user }}%
                                        @else
                                            {{ $percent_user }}%
                                        @endif
                                    </span>than last Month</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    @endsection
