@extends('layouts.master')

<nav class="uk-uk-navbar-transparent uk-background-secondary uk-visible@s" uk-navbar="mode: click" style="background-color :black;">
    {{-- Navbar Kiri --}}
    <div class="uk-navbar-left">
        <div class="uk-navbar-item ">
        <a class="uk-navbar-item uk-logo" style="color: white" href="/">Fashion<strong>Shop.</strong></a>
        </div>
        <div class="uk-navbar-item">
            <form class="uk-search uk-search-navbar uk-background-priamry">
                <span uk-search-icon></span>
                <input class="uk-search-input" type="search" placeholder="Search">
            </form>
        </div>
    </div>
    {{-- Navbar Kanan --}}
@guest
<div class="uk-navbar-right">
    <ul class="uk-nav uk-nav-default pc-nav">
        <li class=" uk-border-rounded uk-margin-large-right">
                <div class="uk-width-auto uk-margin-small-right uk-margin-small-left">
                    <a href="login" class="uk-button uk-button-default uk-light">Login</a>
                    <a href="register" class="uk-button uk-button-default uk-light">Register</a>
                </div>
        </li>
    </ul>
</div>
@else
    <div class="uk-navbar-right">
        <ul class="uk-nav uk-nav-default pc-nav">
            <li class="uk-margin-right">
                {{-- UK MODAL --}}
                <a href="#modal-cart" uk-toggle >
                    <span uk-icon="icon : cart; ratio: 2"></span>
                    Cart
                </a>
                {{-- UK MODAL BODY --}}

            </li>
        </ul>
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
                            <li><a href="profile"><span class="uk-margin-small-right" uk-icon="icon: user"></span> Profile Setting</a></li>
                            <li class="uk-nav-divider"></li>
                            <li><a href="actionlogout"><span class="uk-margin-small-right" uk-icon="icon: sign-out"></span> Logout</a></li>
                        </ul>
                    </div>
                </a>
            </li>
        </ul>
    </div>
@endguest
</nav>
        {{-- Handpone Mode --}}
<nav class="uk-uk-navbar-transparent uk-background-secondary uk-hidden@s" uk-navbar="mode: click" style="background-color :black;">
        <div class="uk-navbar-right">
                <form class="uk-search uk-search-navbar uk-background-priamry uk-width-max-small">
                    <span uk-search-icon></span>
                    <input class="uk-search-input" type="search" placeholder="Search">
                </form>
        </div>
    </div>

    <div class="uk-navbar-right">
        <div class="uk-navbar-item">
        <a href="#offcanvas-slide" class="uk-navbar-toggle uk-hidden@s" uk-toggle>
            <span uk-navbar-toggle-icon></span>
        </a>

            <div id="offcanvas-slide" uk-offcanvas>
                <div class="uk-offcanvas-bar">

                    <ul class="uk-nav uk-nav-default">
                        @guest
                    <div class="uk-margin">
                        <a href="login" class="uk-button uk-button-default uk-width-1-1">Login</a>
                    </div>
                        <div class="uk-margin">
                            <a href="register" class="uk-button uk-button-default uk-width-1-1">Register</a>
                        </div>
                        @else
                        <li class="uk-text-center">
                            <div class="uk-width-auto ">
                                <img class="uk-border-circle" width="50" height="50" src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png">
                            </div>
                            <br>
                            <span class="uk-text-default">
                            Hi. {{Auth::user()->name}}
                            </span>
                        </li>
                        <br>
                        <li class="uk-nav-divider"></li>
                        <li><a href="profile">Profile Setting</a></li>
                        <li class="uk-nav-divider"></li>
                        <li><a href="actionlogout">Log Out</a></li>
                        @endguest
                    </ul>

                </div>
            </div>
    </div>
</nav>
