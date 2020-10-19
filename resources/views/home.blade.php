@extends('layouts.base')

@section('pageTitle' , 'The first website for programmers who loves to compete!')
@section('pageDescription', 'The description of the homepage.')

@section('body')
{{--    <div class="container">--}}
{{--        <div class="row justify-content-center">--}}
{{--            <div class="col-md-8">--}}
{{--                <div class="card">--}}
{{--                    <div class="card-header">{{ __('Dashboard') }}</div>--}}

{{--                    <div class="card-body">--}}
{{--                        @if (session('status'))--}}
{{--                            <div class="alert alert-success" role="alert">--}}
{{--                                {{ session('status') }}--}}
{{--                            </div>--}}
{{--                        @endif--}}

{{--                        {{ __('Welcome in CodeBattles!') }}--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}


<div class="home-full-height">
    <div class="content-area h-100">
        <div class="row h-100 align-items-stretch">
            <div class="col-md-7 d-none d-md-flex p-5">
                <img class="w-100"
                     src="{{ asset('images/coding_home.svg') }}" alt="">
            </div>
            <div class="col-md-5 d-flex">
                <div class="sidebar w-100 d-flex flex-column justify-content-center">
                    <img class="logo" src="{{ asset('images/login_right.svg') }}" alt="">
                    <h1 class="h2 title mb-3">{{ config('app.name') }}</h1>
                    <ul class="home-links">
                        <li>
                            <a href="#">
                                <img class="icon" src="{{ asset('images/icons/code.svg') }}" alt="" />
                                <span>Play Online</span>
                                <small class="text-muted">Aliquid beatae cumque.</small>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img class="icon" src="{{ asset('images/icons/offline.svg') }}" alt="" />
                                <span>Practice Offline</span>
                                <small class=" text-muted">Magnam maiores modi porro totam.</small>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img class="icon" src="{{ asset('images/icons/friends.svg') }}" alt="" />
                                <span>Play with a friend</span>
                                <small class="text-muted">Minus modi repellat sit suscipit, totam velit.</small>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
