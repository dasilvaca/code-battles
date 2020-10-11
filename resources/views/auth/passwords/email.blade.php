@extends('layouts.app')

@section('pageTitle' , 'Reset Password')
@section('pageDescription', 'The description of the reset password page.')

@section('content')
    <div class="m-10 d-flex justify-content-between align-items-center h-100">
        <div class="h-75 d-flex align-items-center justify-content-center" style="flex: 2">
            <!-- Registeration Form -->
            <div class="w-75">
                <form action="{{ route('password.email') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="form-group col-lg-12 mx-auto mb-4">
                            <h1>Reset your password</h1>
                        </div>
                        <!-- Email Address -->
                        <div class="input-group col-lg-12 mb-4">
                            <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-envelope text-muted"></i>
                            </span>
                            </div>
                            <input id="email" type="email" name="email" placeholder="Email Address"
                                   class="form-control bg-white border-left-0 border-md @error('email') is-invalid @enderror"
                                   value="{{old('email')}}" required autocomplete="email" autofocus>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <!-- Submit Button -->
                        <div class="form-group col-lg-12 mx-auto mb-4">
                            <button type="submit" class="btn btn-primary btn-block py-2">
                                <span class="font-weight-bold">Send Password Reset Link</span>
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
