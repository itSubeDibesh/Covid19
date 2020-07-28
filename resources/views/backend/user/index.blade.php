@extends('layouts.back.master')

@section('title',  'Home | कोविड-१९ |'.config('app.name'))

@section('contents')
    <div class="row">
        <!-- Profile Upload completed successfully -->
        <div class="col-md-12 Credientials">
            <div class="card">
                <div class="card-header overview-wrap">
                    <h3>&nbsp;User list</h3>
                    <a href="{{ route('back.accounts.create') }}" class="btn btn-success "
                       style="float: right;color:white;">
                        <i class="fas fa-plus"></i> Account
                    </a>
                    </a>
                </div>
                <div class="card-body card-block row">
                    @foreach($user as $key => $users)
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <i class="fa fa-user"></i>
                                    <strong class="card-title pl-2">{{ $users->name }}</strong>
                                </div>
                                <div class="card-body">
                                    <div class="mx-auto d-block">
                                        <img class="rounded-circle mx-auto d-block"
                                             src="{{ isset($users->image) ? asset('storage/'.$users->image) : asset('images/icon/defaultuser.png') }}"
                                             style="max-height:200px; max-width:200px; min-width:200px; min-height:200px;" alt="Card image cap">
                                        <h5 class="text-sm-center mt-2 mb-1"><i class="fas fa-mobile-phone"></i>
                                            {{ $users->phone ? $users->phone : 'No number' }}
                                        </h5>
                                        <div class="location text-sm-center">
                                            <i class="fa fa-map-marker"></i> {{ $users->address ? $users->address : 'No address' }}
                                        </div>
                                        <div class="location text-sm-center">
                                            <i class="fa fa-envelope"></i> {{ $users->email ? $users->email : 'No email' }}
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    @endforeach
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
