@extends('layouts.app')
@section('pageTitle' , 'Confirm Password')
@section('pageDescription', 'The description of the confirm page.')

@section('content')
    <div class="m-10 d-flex justify-content-between align-items-center h-100">
        <div class="h-75 d-flex align-items-center justify-content-center" style="flex: 2">
            <!-- Registeration Form -->
            <div class="w-75">
                <form action="{{ route('password.confirm') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="form-group col-lg-12 mx-auto mb-4">
                            <h1> {{ __('Please confirm your password before continuing') }}</h1>
                        </div>
                        <!-- Password -->
                        <div class="input-group col-lg-12 mb-4">
                            <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-lock text-muted"></i>
                            </span>
                            </div>
                            <input id="password" type="password" name="password" placeholder="Password"
                                   class="form-control bg-white border-left-0 border-md @error('password') is-invalid @enderror"
                                   required autocomplete="current-password" value="{{old('password')}}">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <!-- Submit Button -->
                        <div class="form-group col-lg-12 mx-auto mb-4">
                            <button type="submit" class="btn btn-primary btn-block py-2">
                                <span class="font-weight-bold"> {{ __('Confirm Password') }}</span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="d-none d-lg-flex h-75 align-items-center justify-content-center mx-5" style="flex: 3">
            <img src="{{asset('/images/login_right.svg')}}" alt="inspiration for coding" class="w-100 mh-100">
        </div>
    </div>
@endsection


