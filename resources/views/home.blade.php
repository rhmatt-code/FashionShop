@extends('layouts.master')

@include('layouts.navbar')
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
<div class="uk-margin-medium-top uk-text-center">
    <h2>Category <strong>Product</strong></h2>
</div>
    <div class="uk-slider-container uk-margin" uk-slider>

        <div class="uk-position-relative uk-visible-toggle " tabindex="-1">

            <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m uk-grid">
                <li>
                    <a href="#">
                    <div class="uk-card uk-card-default uk-box-shadow-small uk-box-shadow-hover-large">>
                        <div class="uk-card-media-top uk-text-center uk-width-auto">
                            <img src="https://image.shutterstock.com/image-vector/tshirt-iconvector-illustration-flat-design-260nw-750171403.jpg" width="200" height="200" alt="">
                        </div>
                        <div class="uk-card uk-card-default uk-card-small uk-card-body uk-text-center">
                            <h3 class="uk-card-title uk-visible@s">{ Name Category }</h3>
                            {{-- Handphone Mode --}}
                            <h3 class="uk-card-title uk-text-default uk-hidden@s">{ Name Category }</h3>
                        </div>
                    </div>
                </a>
                </li>
                <li>
                    <div class="uk-card uk-card-default uk-box-shadow-small uk-box-shadow-hover-large">>
                        <div class="uk-card-media-top uk-text-center uk-width-auto">
                            <img  src="https://image.shutterstock.com/image-vector/tshirt-iconvector-illustration-flat-design-260nw-750171403.jpg" width="200" height="200" alt="">
                        </div>
                        <div class="uk-card uk-card-default uk-card-small uk-card-body uk-text-center">
                            <h3 class="uk-card-title uk-visible@s">{ Name Category }</h3>
                            {{-- Handphone Mode --}}
                            <h3 class="uk-card-title uk-text-default uk-hidden@s">{ Name Category }</h3>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="uk-card uk-card-default uk-box-shadow-small uk-box-shadow-hover-large">>
                        <div class="uk-card-media-top uk-text-center uk-width-auto">
                            <img  src="https://image.shutterstock.com/image-vector/tshirt-iconvector-illustration-flat-design-260nw-750171403.jpg" width="200" height="200" alt="">
                        </div>
                        <div class="uk-card uk-card-default uk-card-small uk-card-body uk-text-center">
                            <h3 class="uk-card-title uk-visible@s">{ Name Category }</h3>
                            {{-- Handphone Mode --}}
                            <h3 class="uk-card-title uk-text-default uk-hidden@s">{ Name Category }</h3>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="uk-card uk-card-default uk-box-shadow-small uk-box-shadow-hover-large">>
                        <div class="uk-card-media-top uk-text-center uk-width-auto">
                            <img  src="https://image.shutterstock.com/image-vector/tshirt-iconvector-illustration-flat-design-260nw-750171403.jpg" width="200" height="200" alt="">
                        </div>
                        <div class="uk-card uk-card-default uk-card-small uk-card-body uk-text-center">
                            <h3 class="uk-card-title uk-visible@s">{ Name Category }</h3>
                            {{-- Handphone Mode --}}
                            <h3 class="uk-card-title uk-text-default uk-hidden@s">{ Name Category }</h3>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="uk-card uk-card-default uk-box-shadow-small uk-box-shadow-hover-large">>
                        <div class="uk-card-media-top uk-text-center uk-width-auto">
                            <img  src="https://image.shutterstock.com/image-vector/tshirt-iconvector-illustration-flat-design-260nw-750171403.jpg" width="200" height="200" alt="">
                        </div>
                        <div class="uk-card uk-card-default uk-card-small uk-card-body uk-text-center">
                            <h3 class="uk-card-title uk-visible@s">{ Name Category }</h3>
                            {{-- Handphone Mode --}}
                            <h3 class="uk-card-title uk-text-default uk-hidden@s">{ Name Category }</h3>
                        </div>
                    </div>
                </li>
            </ul>

            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

        </div>

        <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>

    </div>
    {{-- = --}}

    {{-- Slide Product --}}
    <div class="uk-margin-medium-top uk-text-center">
        <h2 >New <strong>Product</strong></h2>
    </div>
        <div class="uk-slider-container uk-margin" uk-slider>

            <div class="uk-position-relative uk-visible-toggle " tabindex="-1">

                <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m uk-grid">
                    <li>
                        <div class="uk-card uk-card-default uk-box-shadow-small uk-box-shadow-hover-large">
                            <div class="uk-card-media-top">
                                <img src="https://getuikit.com/docs/images/dark.jpg" width="1800" height="1200" alt="">
                            </div>
                            <div class="uk-card-body uk-text-center uk-visible@s">
                                <h3 class="uk-card-title ">{ Name Product }</h3>
                                <p>
                                    Stock :  <strong>{ Stock Item }</strong>
                                    <br>
                                    Price :  <strong>{ Price Item }</strong>
                                </p>
                                <hr>
                                <button class="uk-button uk-button-default">Cart</button>
                                <br>
                                <br>
                                <a href="#" class="uk-button uk-button-text">Details Product</a>
                            </div>
                            {{-- Handphone Mode --}}
                            <div class="uk-card-body uk-text-center uk-hidden@s">
                                <h3 class="uk-card-title uk-text-default">{ Name Product }</h3>
                                <p class="uk-text-small">
                                    Stock :  <strong>{Stock Item}</strong>
                                    <br>
                                    Price :  <strong>{Price Item}</strong>
                                </p>
                                <hr>
                                <button class="uk-button uk-button-default uk-button-small">Cart</button>
                                <br>
                                <br>
                                <a href="#" class="uk-button uk-button-text uk-button-small">Details Product</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="uk-card uk-card-default uk-box-shadow-small uk-box-shadow-hover-large">
                            <div class="uk-card-media-top">
                                <img src="https://getuikit.com/docs/images/dark.jpg" width="1800" height="1200" alt="">
                            </div>
                            <div class="uk-card-body uk-text-center uk-visible@s">
                                <h3 class="uk-card-title ">{ Name Product }</h3>
                                <p>
                                    Stock :  <strong>{ Stock Item }</strong>
                                    <br>
                                    Price :  <strong>{ Price Item }</strong>
                                </p>
                                <hr>
                                <button class="uk-button uk-button-default">Cart</button>
                                <br>
                                <br>
                                <a href="#" class="uk-button uk-button-text">Details Product</a>
                            </div>
                            {{-- Handphone Mode --}}
                            <div class="uk-card-body uk-text-center uk-hidden@s">
                                <h3 class="uk-card-title uk-text-default">{ Name Product }</h3>
                                <p class="uk-text-small">
                                    Stock :  <strong>{Stock Item}</strong>
                                    <br>
                                    Price :  <strong>{Price Item}</strong>
                                </p>
                                <hr>
                                <button class="uk-button uk-button-default uk-button-small">Cart</button>
                                <br>
                                <br>
                                <a href="#" class="uk-button uk-button-text uk-button-small">Details Product</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="uk-card uk-card-default uk-box-shadow-small uk-box-shadow-hover-large">
                            <div class="uk-card-media-top">
                                <img src="https://getuikit.com/docs/images/dark.jpg" width="1800" height="1200" alt="">
                            </div>
                            <div class="uk-card-body uk-text-center uk-visible@s">
                                <h3 class="uk-card-title ">{ Name Product }</h3>
                                <p>
                                    Stock :  <strong>{ Stock Item }</strong>
                                    <br>
                                    Price :  <strong>{ Price Item }</strong>
                                </p>
                                <hr>
                                <button class="uk-button uk-button-default">Cart</button>
                                <br>
                                <br>
                                <a href="#" class="uk-button uk-button-text">Details Product</a>
                            </div>
                            {{-- Handphone Mode --}}
                            <div class="uk-card-body uk-text-center uk-hidden@s">
                                <h3 class="uk-card-title uk-text-default">{ Name Product }</h3>
                                <p class="uk-text-small">
                                    Stock :  <strong>{Stock Item}</strong>
                                    <br>
                                    Price :  <strong>{Price Item}</strong>
                                </p>
                                <hr>
                                <button class="uk-button uk-button-default uk-button-small">Cart</button>
                                <br>
                                <br>
                                <a href="#" class="uk-button uk-button-text uk-button-small">Details Product</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="uk-card uk-card-default uk-box-shadow-small uk-box-shadow-hover-large">
                            <div class="uk-card-media-top">
                                <img src="https://getuikit.com/docs/images/dark.jpg" width="1800" height="1200" alt="">
                            </div>
                            <div class="uk-card-body uk-text-center uk-visible@s">
                                <h3 class="uk-card-title ">{ Name Product }</h3>
                                <p>
                                    Stock :  <strong>{ Stock Item }</strong>
                                    <br>
                                    Price :  <strong>{ Price Item }</strong>
                                </p>
                                <hr>
                                <button class="uk-button uk-button-default">Cart</button>
                                <br>
                                <br>
                                <a href="#" class="uk-button uk-button-text">Details Product</a>
                            </div>
                            {{-- Handphone Mode --}}
                            <div class="uk-card-body uk-text-center uk-hidden@s">
                                <h3 class="uk-card-title uk-text-default">{ Name Product }</h3>
                                <p class="uk-text-small">
                                    Stock :  <strong>{Stock Item}</strong>
                                    <br>
                                    Price :  <strong>{Price Item}</strong>
                                </p>
                                <hr>
                                <button class="uk-button uk-button-default uk-button-small">Cart</button>
                                <br>
                                <br>
                                <a href="#" class="uk-button uk-button-text uk-button-small">Details Product</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="uk-card uk-card-default uk-box-shadow-small uk-box-shadow-hover-large">
                            <div class="uk-card-media-top">
                                <img src="https://getuikit.com/docs/images/dark.jpg" width="1800" height="1200" alt="">
                            </div>
                            <div class="uk-card-body uk-text-center uk-visible@s">
                                <h3 class="uk-card-title ">{ Name Product }</h3>
                                <p>
                                    Stock :  <strong>{ Stock Item }</strong>
                                    <br>
                                    Price :  <strong>{ Price Item }</strong>
                                </p>
                                <hr>
                                <button class="uk-button uk-button-default">Cart</button>
                                <br>
                                <br>
                                <a href="#" class="uk-button uk-button-text">Details Product</a>
                            </div>
                            {{-- Handphone Mode --}}
                            <div class="uk-card-body uk-text-center uk-hidden@s">
                                <h3 class="uk-card-title uk-text-default">{ Name Product }</h3>
                                <p class="uk-text-small">
                                    Stock :  <strong>{Stock Item}</strong>
                                    <br>
                                    Price :  <strong>{Price Item}</strong>
                                </p>
                                <hr>
                                <button class="uk-button uk-button-default uk-button-small">Cart</button>
                                <br>
                                <br>
                                <a href="#" class="uk-button uk-button-text uk-button-small">Details Product</a>
                            </div>
                        </div>
                    </li>
                </ul>

                <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

            </div>

            <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>

        </div>
        {{-- = --}}
