@extends('front.layout')
@section('content')
    <!-- Begin Slider Area -->
    <div class="slider-area">

        <!-- Main Slider -->
        <div class="swiper-container main-slider swiper-arrow with-bg_white">
            <div class="swiper-wrapper">
                <div class="swiper-slide animation-style-01">
                    <div class="slide-inner bg-height" data-bg-image="{{ Vite::asset('resources/images/slider/bg/1-1.jpg') }}">
                        <div class="container">
                            <div class="slide-content text-white">
                                <h2 class="title mb-3">СЕРВИС</h2>
                                <div class="button-wrap">
                                    <a class="btn btn-custom-size lg-size btn-primary" href="#">ЗАКАЗ СЕРВИСА</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide animation-style-01">
                    <div class="slide-inner bg-height" data-bg-image="{{ Vite::asset('resources/images/slider/bg/1-2.jpg') }}">
                        <div class="container">
                            <div class="slide-content text-white">
                                <h2 class="title mb-3">ТЕХНИКА</h2>
                                <div class="button-wrap">
                                    <a class="btn btn-custom-size lg-size btn-primary" href="#">КАТАЛОГ</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide animation-style-01">
                    <div class="slide-inner bg-height" data-bg-image="{{ Vite::asset('resources/images/slider/bg/1-3.jpg') }}">
                        <div class="container">
                            <div class="slide-content text-white">
                                <h2 class="title mb-3">ЗАПЧАСТИ</h2>
                                <div class="button-wrap">
                                    <a class="btn btn-custom-size lg-size btn-primary" href="#">КУПИТЬ ЗАПЧАСТИ</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination with-bg d-md-none"></div>

            <!-- Custom Arrows -->
            <div class="custom-arrow-wrap d-none d-md-block">
                <div class="custom-button-prev"></div>
                <div class="custom-button-next"></div>
            </div>
        </div>

    </div>
    <!-- Slider Area End Here -->
@endsection
