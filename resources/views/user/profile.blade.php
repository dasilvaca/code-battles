@extends('layouts.app')
@section('pageTitle' , 'oli799')
@section('pageDescription', 'The description of the login page.')

@section('content')

    <div class="container">
        <div class="row gutters-sm">
            <div class="col-md-4 d-none d-md-block">
                <div class="card">
                    <div class="card-body">
                        <nav class="nav flex-column nav-pills nav-gap-y-1">
                            <a href="#profile" data-toggle="tab"
                               class="nav-item nav-link has-icon nav-link-faded active">
                                <i class="fa fa-user mx-2"></i>
                                <span class="align-bottom">Profile</span>
                            </a>
                            <a href="#account" data-toggle="tab" class="nav-item nav-link has-icon nav-link-faded">
                                <i class="fa fa-gear mx-2"></i>
                                <span class="align-bottom">Account Settings</span>

                            </a>
                            <a href="#security" data-toggle="tab" class="nav-item nav-link has-icon nav-link-faded">
                                <i class="fa fa-shield mx-2"></i>
                                <span class="align-bottom">Security</span>

                            </a>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header border-bottom mb-3 d-flex d-md-none">
                        <ul class="nav nav-tabs card-header-tabs nav-gap-x-1" role="tablist">
                            <li class="nav-item">
                                <a href="#profile" data-toggle="tab" class="nav-link has-icon active">
                                    <i class="fa fa-user mx-2"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#account" data-toggle="tab" class="nav-link has-icon">
                                    <i class="fa fa-gear mx-2"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#security" data-toggle="tab" class="nav-link has-icon">
                                    <i class="fa fa-shield mx-2"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body tab-content">
                        <div class="tab-pane active" id="profile">
                            <h6>BASIC PROFILE</h6>
                            <hr>
                            <center>
                                {{--                                <img--}}
                                {{--                                    src="{{asset('images/test_profile.jpg')}}"--}}
                                {{--                                    width="140" height="140" class="rounded-circle" alt="user_picture">--}}
                                <h3 class="media-heading">{{$user->name}}
                                    <small>{{$user->location ? $user->location :  'HU, Budapest'}}</small></h3>
                                <span><strong>Rating: </strong></span>
                                <span class="label label-warning">1826</span>
                            </center>
                            <hr>
                            <center>
                                <p class="text-left"><strong>Bio: </strong><br>
                                    {{$user->bio ? $user->bio : 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum iusto libero nulla. Facere iusto libero magnam nihil. Distinctio, iure odio!'}}
                                </p>
                                <br>
                            </center>
                        </div>
                        <div class="tab-pane" id="account">
                            <h6>YOUR ACCOUNT INFORMATION</h6>
                            <hr>
                            <form>
                                <div class="form-group">
                                    <label for="fullName">Full Name</label>
                                    <input type="text" class="form-control" id="fullName"
                                           aria-describedby="fullNameHelp" placeholder="Enter your fullname"
                                           value="Kenneth Valdez">
                                    <small id="fullNameHelp" class="form-text text-muted">Your name may appear around
                                        here where you are mentioned. You can change or remove it at any time.</small>
                                </div>
                                <div class="form-group">
                                    <label for="bio">Your Bio</label>
                                    <textarea class="form-control autosize" id="bio"
                                              placeholder="Write something about you"
                                              style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 62px;">A front-end developer that focus more on user interface design, a web interface wizard, a connector of awesomeness.</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="url">URL</label>
                                    <input type="text" class="form-control" id="url"
                                           placeholder="Enter your website address" value="http://benije.ke/pozzivkij">
                                </div>
                                <div class="form-group">
                                    <label for="location">Location</label>
                                    <input type="text" class="form-control" id="location"
                                           placeholder="Enter your location" value="Bay Area, San Francisco, CA">
                                </div>
                                <div class="form-group small text-muted">
                                    All of the fields on this page are optional and can be deleted at any time, and by
                                    filling them out, you're giving us consent to share this data wherever your user
                                    profile appears.
                                </div>
                                <button type="button" class="btn btn-primary not-darken">Update Profile</button>
                                <button type="reset" class="btn btn-light not-darken">Reset Changes</button>
                            </form>
                            <form>
                                <hr>
                                <div class="form-group">
                                    <label class="d-block text-danger">Delete Account</label>
                                    <p class="text-muted font-size-sm">Once you delete your account, there is no going
                                        back. Please be certain.</p>
                                </div>
                                <button class="btn btn-danger not-darken" type="button">Delete Account</button>
                            </form>
                            <hr>
                            {{-- dark mode switch --}}
                            <div class="d-flex justify-content-start align-items-center">
                                <p class="m-0 mr-3">Enable dark mode</p>
                                <label class="toggle-control">
                                    <input type="checkbox" id="theme-switch">
                                    <span class="control"></span>
                                </label>
                            </div>
                            {{-- dark mode switch --}}
                        </div>
                        <div class="tab-pane" id="security">
                            <h6>SECURITY SETTINGS</h6>
                            <hr>
                            <form>
                                <div class="form-group">
                                    <label class="d-block">Change Password</label>
                                    <input type="text" class="form-control" placeholder="Enter your old password">
                                    <input type="text" class="form-control mt-1" placeholder="New password">
                                    <input type="text" class="form-control mt-1" placeholder="Confirm new password">
                                </div>
                                <button type="button" class="btn btn-primary not-darken">Update Password</button>
                                <button type="reset" class="btn btn-light not-darken">Reset Password</button>
                            </form>
                            <hr>
                            <form>
                                <div class="form-group mb-0">
                                    <label class="d-block">Sessions</label>
                                    <p class="font-size-sm text-secondary">This is a list of devices that have logged
                                        into your account. Revoke any sessions that you do not recognize.</p>
                                    <ul class="list-group list-group-sm">
                                        <li class="list-group-item has-icon">
                                            <div>
                                                <h6 class="mb-0">San Francisco City 190.24.335.55</h6>
                                                <small class="text-muted">Your current session seen in United
                                                    States</small>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
@endsection
