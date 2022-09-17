@extends('layouts.master')

@section('title', 'Home')

@include('layouts.navbar')
@include('cart')
<div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow>

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

    <a class="uk-slidenav-large uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
    <a class="uk-slidenav-large uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>


</div>
{{-- Slide Category --}}
<div class="uk-margin-medium-top uk-heading-line uk-text-center uk-container">
    <h2>Category <strong>Product</strong></h2>
</div>
    <div class="uk-slider-container uk-margin" uk-slider>

        <div class="uk-position-relative uk-visible-toggle " tabindex="-1">


            <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m uk-grid">
                @foreach ($category as $categorys)
                <li>
                    <a href="#">
                    <div class="uk-card uk-card-default uk-box-shadow-small uk-box-shadow-hover-large">
                        <div class="uk-card-media-top uk-text-center uk-width-auto">
                            <img src="{{ asset('storage/categories/' . $categorys->image) }}" width="200" height="200" alt="">
                        </div>
                        <div class="uk-card uk-card-default uk-card-small uk-card-body uk-text-center">
                            <h3 class="uk-card-title uk-visible@s">{{$categorys->name}}</h3>
                            {{-- Handphone Mode --}}
                            <h3 class="uk-card-title uk-text-default uk-hidden@s">{{$categorys->name}}</h3>
                        </div>
                    </div>
                    </a>
                </li>
                @endforeach
            </ul>

            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

        </div>

        <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>

    </div>
    {{-- = --}}

    {{-- Slide Product --}}
    <div class="uk-margin-medium-top uk-heading-line uk-text-center uk-container">
        <h2 >New <strong>Product</strong></h2>
    </div>
        <div class="uk-slider-container uk-margin" uk-slider>

            <div class="uk-position-relative uk-visible-toggle " tabindex="-1">

                <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m uk-grid">
                    @foreach ($products as $product)
                    <li>
                        <div class="uk-card uk-card-default uk-box-shadow-small uk-box-shadow-hover-large">
                            <div class="uk-card-media-top uk-cover-container">
                                <img src="{{ asset('storage/product/' . $product->image) }}" alt="" uk-cover>
                                <canvas width="50"></canvas>
                            </div>
                            <div class="uk-card-body uk-text-center uk-visible@s">
                                <h3 class="uk-card-title ">{{$product->name}}</h3>
                                <p>
                                    Stock :  <strong>{{$product->stock}}</strong>
                                    <br>
                                    Price :  <strong>{{$product->price}}</strong>
                                </p>
                                <hr>
                                @guest
                                @else
                                @if ($product->stock > 0)
                                    <a href="{{ route('addCart', $product->id) }}" class="uk-button uk-button-default">Cart</a>
                                @else
                                    <button href="{{ route('addCart', $product->id) }}" class="uk-button uk-button-primary"disabled>Cart</button>
                                @endif
                                <br>
                                <br>
                                <a href="#" class="uk-button uk-button-text">Details Product</a>
                                @endguest
                            </div>
                            {{-- Handphone Mode --}}
                            <div class="uk-card-body uk-text-center uk-hidden@s">
                                <h3 class="uk-card-title uk-text-default">{{$product->name}}</h3>
                                <p class="uk-text-small">
                                    Stock :  <strong>{{$product->stock}}</strong>
                                    <br>
                                    Price :  <strong>{{$product->price}}</strong>
                                </p>
                                <hr>
                                @guest
                                @else
                                <button class="uk-button uk-button-default uk-button-small">Cart</button>
                                <br>
                                <br>
                                <a href="#" class="uk-button uk-button-text uk-button-small">Details Product</a>
                                @endguest
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>

                <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

            </div>

            <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>

        </div>
        {{-- = --}}

        {{-- Footer --}}

<div class="tm-footer uk-background-secondary">
