@extends('layouts.master')

{{-- Navbar --}}
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
                            <li><a href="logout.php"><span class="uk-margin-small-right" uk-icon="icon: sign-out"></span> Logout</a></li>
                        </ul>
                    </div>
                </a>
            </li>
        </ul>
</nav>

<div class="uk-flex uk-margin uk-container uk-margin-large-top">
    <div class="uk-card uk-card-default uk-width-1-1 uk-margin">
        <div class="uk-margin-medium-left uk-margin-medium-top uk-animation-slide-right">
            <div class="uk-position-relative uk-align-left@s uk-width-large" uk-slideshow="animation: fade">
                <ul class="uk-slideshow-items">
                    <li>
                        <img src="https://getuikit.com/docs/images/dark.jpg" alt="" uk-cover>
                    </li>
                    <li>
                        <img src="https://getuikit.com/docs/images/dark.jpg" alt="" uk-cover>
                    </li>
                    <li>
                        <img src="https://getuikit.com/docs/images/dark.jpg" alt="" uk-cover>
                    </li>
                </ul>

                <div class="uk-position-bottom-center uk-position-small">
                    <ul class="uk-thumbnav">
                        <li uk-slideshow-item="0"><a href="#"><img src="https://getuikit.com/docs/images/dark.jpg" width="100" height="67" alt=""></a></li>
                        <li uk-slideshow-item="1"><a href="#"><img src="https://getuikit.com/docs/images/dark.jpg" width="100" height="67" alt=""></a></li>
                        <li uk-slideshow-item="2"><a href="#"><img src="https://getuikit.com/docs/images/dark.jpg" width="100" height="67" alt=""></a></li>
                    </ul>
                </div>

            </div>
            <div class="uk-margin">
                <h3 class="uk-card-title uk-text-center">{ Name Product}</h3>
                <span>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit accusantium aperiam consectetur placeat aliquam. Eum voluptates ut dicta, atque, nisi aspernatur provident soluta delectus inventore consequatur sequi nostrum officiis eveniet!</span>
                <span>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit accusantium aperiam consectetur placeat aliquam. Eum voluptates ut dicta, atque, nisi aspernatur provident soluta delectus inventore consequatur sequi nostrum officiis eveniet!</span>
                <span>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit accusantium aperiam consectetur placeat aliquam. Eum voluptates ut dicta, atque, nisi aspernatur provident soluta delectus inventore consequatur sequi nostrum officiis eveniet!</span>
                <span>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit accusantium aperiam consectetur placeat aliquam. Eum voluptates ut dicta, atque, nisi aspernatur provident soluta delectus inventore consequatur sequi nostrum officiis eveniet!</span>
                <span>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit accusantium aperiam consectetur placeat aliquam. Eum voluptates ut dicta, atque, nisi aspernatur provident soluta delectus inventore consequatur sequi nostrum officiis eveniet!</span>
            </div>

    </div>
</div>

