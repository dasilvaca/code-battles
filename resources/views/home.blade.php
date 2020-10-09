@extends('layouts.app')

@section('pageTitle' , 'The first website for programmers who loves to compete!')
@section('pageDescription', 'The description of the homepage.')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('Welcome in CodeBattles!') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
