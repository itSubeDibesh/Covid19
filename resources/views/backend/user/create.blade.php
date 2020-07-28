@extends('layouts.back.master')

@section('title',  'Accounts | कोविड-१९ |'.config('app.name'))

@section('contents')
    <div class="row">
        <!-- Profile Upload completed successfully -->
        <div class="col-md-12 Credientials">
            <div class="card">
                <div class="card-header overview-wrap">
                    <h3>&nbsp;Add Account</h3>
                    </a>
                </div>
                <div class="card-body card-block">
                    <!-- Profile Card -->
                    <form action="{{ route('back.accounts.store') }}" method="post" enctype="multipart/form-data"
                          class="form-horizontal">
                        @csrf
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="name" class=" form-control-label">Full Name:</label>
                            </div>
                            <div class="col-12 col-md-3">
                                <input type="text" id="name" name="name" value="{{ old('name') }}" class="form-control">
                                @error('name')
                                <small class="help-block text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col col-md-3">
                                <label for="email" class=" form-control-label">Email:</label>
                            </div>
                            <div class="col-12 col-md-3">
                                <input type="email" id="email" name="email" value="{{ old('email') }}" class="form-control">
                                @error('email')
                                <small class="help-block text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="address" class=" form-control-label">Address:</label>
                            </div>
                            <div class="col-12 col-md-3">
                                <input type="text" id="address" name="address" value="{{ old('address') }}" class="form-control">
                                @error('address')
                                <small class="help-block text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="phone" class=" form-control-label">Phone:</label>
                            </div>
                            <div class="col-12 col-md-3">
                                <input type="tel" id="phone" name="phone" value="{{ old('phone') }}" class="form-control">
                                @error('phone')
                                <small class="help-block text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col col-md-3">
                                <label for="password" class="  form-control-label">Password:</label>
                            </div>
                            <div class="col-12 col-md-3">
                                <input type="password" id="password" value="{{ old('password') }}" name="password" class="form-control">
                                @error('password')
                                <small class="help-block text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-md-3 col-sm-6">
                                        <label for="image" class=" form-control-label">Image:</label>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <input type="file" id="file-input-max-fs" name="image"
                                               class="dropify form-control-file" data-max-file-size="5M"
                                               data-allowed-file-extensions="jpg jpeg png">
                                        @error('image')
                                        <small class="help-block text-danger">{{ $message }}</small>
                                        @enderror
                                        <p for="image">Image (5MB)</p>
                                    </div>
                                    <div class="col-md-5 col-sm-6">
                                        <img src="{{ asset('images//icon/defaultuser.png') }}"
                                             style="max-height:200px; width:auto;" alt=""/>
                                        <p>Previous Image</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-success btn-sm">
                                <i class="fa fa-paper-plane"></i> Add
                            </button>
                            &nbsp;
                            <button type="reset" class="btn btn-danger btn-sm">
                                <i class="fa fa-ban"></i> Cancel
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Custom js Ends -->
    </div>

    </div>
    </div>
    </div>
    </div>
@endsection
