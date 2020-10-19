@extends('layouts.app')
@section('pageTitle' , 'Email Verify')
@section('pageDescription', 'The description of the email verify page.')

@section('content')
    <div class="m-10 d-flex justify-content-between align-items-center h-100">
        <div class="h-75 d-flex align-items-center justify-content-center" style="flex: 2">
            <!-- Registeration Form -->
            <div class="w-75">
                @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        <h1>{{ __('A fresh verification link has been sent to your email address.') }}</h1>
                    </div>
                @endif
                <div class="form-group col-lg-12 mx-auto mb-4">
                    <h5> {{ __('Before proceeding, please check your email for a verification link.') }}</h5>
                </div>
                <div class="form-group col-lg-12 mx-auto mb-4">
                    <h5> {{ __('If you did not receive the email') }}</h5>
                </div>
                <form action="{{ route('verification.resend')  }}" method="post">
                    @csrf
                    <div class="row">
                        <!-- Submit Button -->
                        <div class="form-group col-lg-12 mx-auto mb-4">
                            <button type="submit" class="btn btn-primary btn-block py-2 not-darken">
                                <span class="font-weight-bold"> {{ __('click here to request another') }}</span>
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

