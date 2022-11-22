@extends('layouts.front')

@section('title')
    My Profile
@endsection

@section('main-content')
    <div class="container-fluid my-3 py-3">
        <div class="row">
            <div class="col-lg-12 mx-auto mb-3 ">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb shadow" style="background: #03a9f4;">
                        <li class="breadcrumb-item text-dark"><a href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="breadcrumb-item text-dark"><a href="{{ url('profile-user/') }}">Profile User</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-lg-3">
                <div class="card position-sticky top-1">
                    <ul class="nav flex-column bg-white border-radius-lg p-3">
                        <li class="nav-item">
                            <a class="nav-link text-dark d-flex" data-scroll="" href="#profile">
                                <i class="material-icons text-lg me-2">person</i>
                                <span class="text-sm">Profile</span>
                            </a>
                        </li>
                        <li class="nav-item pt-2">
                            <a class="nav-link text-dark d-flex" data-scroll="" href="#basic-info">
                                <i class="material-icons text-lg me-2">receipt_long</i>
                                <span class="text-sm">Basic Info</span>
                            </a>
                        </li>
                        <li class="nav-item pt-2">
                            <a class="nav-link text-dark d-flex" data-scroll="" href="#pwdsec">
                                <i class="material-icons text-lg me-2">lock</i>
                                <span class="text-sm">Change Password</span>
                            </a>
                        </li>
                        <li class="nav-item pt-2">
                            <a class="nav-link text-dark d-flex" data-scroll="" href="#delete">
                                <i class="material-icons text-lg me-2">delete</i>
                                <span class="text-sm">Delete Account</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9 mt-lg-0 mt-4">

                <div class="card card-body" id="profile">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-sm-auto col-4">
                            <div class="avatar avatar-xl position-relative">
                                <img src="{{ asset('assets/images/bruce-mars.jpg') }}" alt="bruce"
                                    class="w-100 rounded-circle shadow-sm">
                            </div>
                        </div>
                        <div class="col-sm-11 col-8 my-auto">
                            <div class="h-100">
                                <h5 class="mb-1 font-weight-bolder">
                                    {{ $profile->name }} <span>{{ $profile->lname }}</span>
                                </h5>
                                <p class="mb-0 font-weight-normal text-sm">
                                    {{ $profile->role_as == '0' ? 'User' : 'Admin' }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mt-4" id="basic-info">
                    <div class="card-header">
                        <h5>Basic Info</h5>
                    </div>
                    <div class="card-body pt-0">
                        <form class="multisteps-form__form" action="{{ url('profile-user/') }}" method="POST"
                            enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="row">
                                <div class="col-6">
                                    <div class="input-group input-group-static">
                                        <label>First Name</label>
                                        <input type="text" class="form-control" value="{{ $profile->name }}"
                                            name="name">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="input-group input-group-static">
                                        <label>Last Name</label>
                                        <input type="text" class="form-control" value="{{ $profile->lname }}"
                                            name="lname">
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-6">
                                    <div class="input-group input-group-static">
                                        <label>Email</label>
                                        <input type="email" class="form-control" value="{{ $profile->email }}"
                                            name="email">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="input-group input-group-static">
                                        <label>Phone</label>
                                        <input type="text" class="form-control" value="{{ $profile->phone }}"
                                            name="phone">
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-6">
                                    <div class="input-group input-group-static">
                                        <label>Address 1</label>
                                        <input type="text" class="form-control" value="{{ $profile->address1 }}"
                                            name="address1">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="input-group input-group-static">
                                        <label>Address 2</label>
                                        <input type="text" class="form-control" value="{{ $profile->address2 }}"
                                            name="address2">
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-6">
                                    <div class="input-group input-group-static">
                                        <label>City</label>
                                        <input type="text" class="form-control" value="{{ $profile->city }}"
                                            name="city">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="input-group input-group-static">
                                        <label>Province</label>
                                        <input type="text" class="form-control" value="{{ $profile->state }}"
                                            name="state">
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-6">
                                    <div class="input-group input-group-static">
                                        <label>Country</label>
                                        <input type="text" class="form-control" value="{{ $profile->country }}"
                                            name="country">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="input-group input-group-static">
                                        <label>Postal Code</label>
                                        <input type="text" class="form-control" value="{{ $profile->pincode }}"
                                            name="pincode">
                                    </div>
                                </div>
                            </div>
                            <button class="btn bg-gradient-dark btn-sm float-end mt-6 mb-0" type="submit">Update
                                Info</button>
                        </form>
                    </div>
                </div>

                <div class="card mt-4" id="pwdsec">
                    <div class="card-header">
                        <h5>Change Password</h5>
                    </div>
                    <div class="card-body pt-0">
                        <form action="{{ url('profile-user/') }}" method="POST">
                            @csrf
                            <div class="input-group input-group-outline">
                                <label for="oldPasswordInput" class="form-label">Current password</label>
                                <input type="password" class="form-control @error('old_password') is-invalid @enderror"
                                    name="old_password" id="oldPasswordInput" required>
                                @error('old_password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="input-group input-group-outline my-4">
                                <label for="newPasswordInput" class="form-label">New password</label>
                                <input name="new_password" type="password"
                                    class="form-control @error('new_password') is-invalid @enderror" id="newPasswordInput"
                                    required>
                                @error('new_password')
                                    <span class="text-danger">{{ $message }}</span>
                                    <div class="alert alert-error">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="input-group input-group-outline">
                                <label for="confirmNewPasswordInput" class="form-label">Confirm New password</label>
                                <input name="new_password_confirmation" type="password" class="form-control"
                                    id="confirmNewPasswordInput" required>
                            </div>
                            <h5 class="mt-5">Password requirements</h5>
                            <p class="text-muted mb-2">
                                Please follow this guide for a strong password:
                            </p>
                            <ul class="text-muted ps-4 mb-0 float-start">
                                <li>
                                    <span class="text-sm">One special characters</span>
                                </li>
                                <li>
                                    <span class="text-sm">Min 6 characters</span>
                                </li>
                                <li>
                                    <span class="text-sm">One number (2 are recommended)</span>
                                </li>
                                <li>
                                    <span class="text-sm">Change it often</span>
                                </li>
                            </ul>
                            <button class="btn bg-gradient-dark btn-sm float-end mt-6 mb-0">Update password</button>
                        </form>
                    </div>
                </div>

                <div class="card mt-4" id="delete">
                    <div class="card-body">
                        <form method="POST" action="{{ route('users.delete', $profile->id) }}">
                            @csrf
                            <div class="d-flex align-items-center mb-sm-0 mb-4">
                                <div class="w-50">
                                    <h5>Delete Account</h5>
                                    <p class="text-sm mb-0">Once you delete your account, there is no going back. Please be
                                        certain.</p>
                                </div>
                                <div class="w-50 text-end">
                                    <input name="_method" type="hidden" value="DELETE">
                                    <button class="btn bg-gradient-danger mb-0 ms-2 show_confirm" type="button"
                                        data-id="{{ $profile->id }}">Delete
                                        Account</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
