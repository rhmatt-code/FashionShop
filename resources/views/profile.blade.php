@extends('layouts.master')

@section('title', 'Profile')

<nav class="uk-uk-navbar-transparent uk-background-secondary uk-visible@s" uk-navbar="mode: click" style="background-color :black;">
    {{-- Navbar Kiri --}}
    <div class="uk-navbar-left">
        <div class="uk-navbar-item ">
        <a class="uk-navbar-item uk-logo" style="color: white" href="home">Fashion<strong>Shop.</strong></a>
        </div>
        <div class="uk-navbar-item">
            <form class="uk-search uk-search-navbar uk-background-priamry">
                <span uk-search-icon></span>
                <input class="uk-search-input" type="search" placeholder="Search">
            </form>
        </div>
    </div>
    {{-- Navbar Kanan --}}
    <div class="uk-navbar-right">
        <ul class="uk-nav uk-nav-default pc-nav">
            <li class="uk-background-secondary uk-border-rounded uk-margin-large-right">
                <a href="#" class="uk-active ">
                    <div class="uk-width-auto uk-margin-small-right uk-margin-small-left">
                        <img class="uk-border-circle" width="40" height="40" src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png">
                    </div>
                    <span class="uk-text-default uk-margin-small-right">
                    Hi. {{explode(" ",Auth::user()->name)[0]}}
                    </span>
                    <div uk-dropdown="pos: bottom-center; mode: click;">
                        <ul class="uk-nav uk-dropdown-nav">
                            <li><a href="{{route('profile')}}"><span class="uk-margin-small-right" uk-icon="icon: user"></span> Profile Setting</a></li>
                            <li class="uk-nav-divider"></li>
                            <li><a href="actionlogout"><span class="uk-margin-small-right" uk-icon="icon: sign-out"></span> Logout</a></li>
                        </ul>
                    </div>
                </a>
            </li>
        </ul>
</nav>

{{-- Desktop Mode --}}
<div class="uk-margin-xlarge-left uk-margin uk-child-width-1-2 uk-visible@s" uk-grid>
    <div>
        <div class="uk-card uk-card-default uk-card-body uk-width-1-1 uk-box-shadow-default">
            <form method="POST" action="{{ route('profile/update')}}">
                @method('patch')
                @csrf
                <h3 class="uk-heading-divider uk-text-center">Update Your Data</h3>
                <div class="uk-margin">
                    <div class="uk-inline uk-width-1-1">
                        <label class="uk-form-label" for="form-stacked-text">Nama</label>
                        <input class="uk-input" type="text" placeholder="{{Auth::user()->name}}">
                    </div>
                </div>
                <div class="uk-margin">
                    <div class="uk-inline uk-width-1-1">
                        <label class="uk-form-label" for="form-stacked-text">Email</label>
                        <input class="uk-input" type="text" placeholder="{{Auth::user()->email}}">
                    </div>
                </div>
                <div class="uk-margin">
                    <div class="uk-inline uk-width-1-1">
                        <label class="uk-form-label" for="form-stacked-text">Number Phone</label>
                        <input class="uk-input" type="text">
                    </div>
                </div>
                <div class="uk-margin">
                    <div class="uk-inline uk-width-1-1">
                        <label class="uk-form-label" for="form-stacked-text">Password</label>
                        <input class="uk-input" type="text" placeholder="This is Private LOL">
                    </div>
                </div>
                <button class="uk-button uk-button-danger">Save</button>
            </form>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-box-shadow-default uk-width-3-4">
            <div class="uk-card-header uk-text-center">
                <img class="uk-border-circle"  src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png" width="150" height="150" alt="">
            </div>
            <div class="uk-card uk-card-default uk-card-small uk-card-body uk-text-center">
                <h3 class="uk-card-title">Click to Update Profile</h3>
            </div>
        </div>
    </div>
</div>
{{-- Handphone Mode --}}
<div class="uk-card uk-card-default uk-hidden@s">
    <div class="uk-card-header uk-text-center uk-box-shadow-large" style="background-color: black;">
            <div class="uk-light">
                <img class="uk-border-circle" width="100" height="100" src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png">
                <h3 class="uk-card-title uk-margin-remove-bottom " style="color:white;">Your Profile</h3>
                <br>
                <a href="{{route('home')}}" class="uk-button uk-button-primary uk-border-rounded">Back to Home</a>
            </div>
    </div>
    <div class="uk-card-body">
        <form method="POST" action="{{route('profile/update')}}">
            <ul class="uk-nav uk-nav-default">
            <li><h3 class="">Update Your Data</h3></li>
            <li class="uk-nav-divider"></li>
            </ul>
            <div class="uk-margin">
                <div class="uk-inline uk-width-1-1">
                    <label class="uk-form-label" for="form-stacked-text">Nama</label>
                    <input class="uk-input" type="text" placeholder="{{Auth::user()->name}}">
                </div>
            </div>
            <div class="uk-margin">
                <div class="uk-inline uk-width-1-1">
                    <label class="uk-form-label" for="form-stacked-text">Email</label>
                    <input class="uk-input" type="text" placeholder="{{Auth::user()->email}}">
                </div>
            </div>
            <div class="uk-margin">
                <div class="uk-inline uk-width-1-1">
                    <label class="uk-form-label" for="form-stacked-text">Number Phone</label>
                    <input class="uk-input" type="text">
                </div>
            </div>
            <div class="uk-margin">
                <div class="uk-inline uk-width-1-1">
                    <label class="uk-form-label" for="form-stacked-text">Password</label>
                    <input class="uk-input" type="text" placeholder="This is Private LOL">
                </div>
            </div>
            <button class="uk-button uk-button-danger">Save</button>
        </form>
    </div>

</div>
