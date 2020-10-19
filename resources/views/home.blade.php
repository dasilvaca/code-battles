@extends('layouts.app')

@section('pageTitle' , 'The first website for programmers who loves to compete!')
@section('pageDescription', 'The description of the homepage.')

@section('content')
    <div class="home-full-height">
        <div class="content-area h-100">
            <div class="row h-100 align-items-stretch">
                <div class="col-md-7 d-none d-md-flex p-5">
                    <img class="w-100"
                         src="{{ asset('images/coding_home.svg') }}" alt="">
                </div>
                <div class="col-md-5 d-flex p-0">
                    <div class="sidebar w-100 d-flex flex-column justify-content-center">
                        <i class="fa fa-code fa-5x logo" style="color: #488eff"></i>
                        <h1 class="h2 title mb-3">{{ config('app.name') }}</h1>
                        <ul class="home-links">
                            <li>
                                <a href="#">
                                    <i class="icon fa fa-play"></i>
                                    <span>Play Online</span>
                                    <small class="text-muted">Play vs a person of similar skill</small>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon fa fa-group"></i>
                                    <span>Play with a friend</span>
                                    <small class="text-muted">Invite a friend to play</small>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon fa fa-book"></i>
                                    <span>Practice Offline</span>
                                    <small class=" text-muted">Challenge a bot from Easy to Master</small>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
