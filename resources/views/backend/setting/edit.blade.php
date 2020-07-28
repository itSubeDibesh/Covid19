@extends('layouts.back.master')

@section('title',  'Settings | कोविड-१९ |'.config('app.name'))

@section('contents')
<div class="row">
    <!-- Profile Upload completed successfully -->
    <div class="col-md-12 Credientials">
        <div class="card">
            <div class="card-header overview-wrap">
                <h3 >&nbsp;My Profile</h3>
                    <a href="#" class="btn btn-primary " style="float: right;color:white;" data-toggle="modal" data-target="#ResetPassword">
                        <i class="fas fa-lock"></i> Reset password
                    </a>
            </div>
            <div class="card-body card-block">
                <!-- Profile Card -->
                <div class="col-md-12">
                    <div class="card-body">
                        <div class="mx-auto d-block">
                            <img class="rounded-circle mx-auto d-block" style="max-height:200px; max-width:200px; min-width:200px; min-height:200px;" src="{{ isset($users->image) ? asset('storage/'.$users->image) : asset('images/icon/defaultuser.png') }}">
                        </div>
                    </div>
                    <br>
                    <!-- Profile card ends -->
                    <form action="{{ route('back.settings.update', Auth::user()->id) }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                    @csrf

                    @method('PUT')
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="name" class=" form-control-label">Name:</label>
                            </div>
                            <div class="col-12 col-md-3">
                                <input type="text" id="UserName" name="name" value="{{ $users->name }}" class="form-control">
                                @error('name')
                                <small class="help-block text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col col-md-3">
                                <label for="email" class=" form-control-label">Email:</label>
                            </div>
                            <div class="col-12 col-md-3">
                                <input type="email" id="email" name="email" value="{{ $users->email }}" class="form-control" required>
                                @error('email')
                                <small class="help-block text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="Phone" class=" form-control-label">Phone:</label>
                            </div>
                            <div class="col-12 col-md-3">
                                <input type="tel" id="Phone" name="phone" value="{{ $users->phone }}" class="form-control">
                                @error('phone')
                                <small class="help-block text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col col-md-3">
                                <label for="Address" class=" form-control-label">Address:</label>
                            </div>
                            <div class="col-12 col-md-3">
                                <input type="text" id="Address" name="address" value="{{ $users->address }}" class="form-control">
                                @error('address')
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
                                        <input type="file" id="file-input-max-fs" name="image" class="dropify form-control-file" data-max-file-size="5M" data-allowed-file-extensions="jpg jpeg png">
                                        <p for="image">Image (5MB)</p>
                                    </div>
                                    @error('image')
                                    <small class="help-block text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-sm">
                                <i class="fa fa-dot-circle-o"></i> Update
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
    </div>

    <!-- Custom js Ends -->
</div>

</div>
</div>
</div>
</div>
<div style="margin-top:10%;" class="modal fade" id="ResetPassword" data-backdrop="static">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Reset Password</h4>
                <a class=" btn-sm btn-danger close" style="float: right;" href="#" data-dismiss="modal">
                    <i class="fas fa-close" style="color:white;"></i>
                </a>
            </div>
            <div class="modal-body" style="text-align:center;">
                    <span>
                        <b> Note : </b>
                        <code class="text-danger">
                            &nbsp;You will get logged out once you reset your password!!
                        </code>
                    </span>
            </div>
            <form action="{{ route('back.settings.forgot_password') }}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-4 control-label"><b>Old Password:</b></div>
                                <div class="col-sm-8 input-group">
                                    <input type="password" name="old_password" id="old_password" class="au-input au-input--full" minlength="5">
                                </div>
                            </div>
                            <br>
                        </div>

                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-4 control-label"><b>New Password:</b></div>
                                <div class="col-sm-8 input-group">
                                    <input type="password" name="password" id="password" class="au-input au-input--full" minlength="5">
                                </div>
                            </div>
                            <br>
                        </div>

                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-4 control-label"><b>Retype Password:</b></div>
                                <div class="col-sm-8 input-group">
                                    <input type="password" name="password_confirm" id="password_confirm" class="au-input au-input--full" minlength="5">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success btn-sm">
                        <i class="fa fa-paper-plane"></i> Confirm
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection
