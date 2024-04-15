@extends('front.layout')
@section('content')
    <!-- Begin Main Content Area  -->
    <main class="main-content">
        <div class="breadcrumb-area breadcrumb-height">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-lg-12">
                        <div class="breadcrumb-item text-night-rider">
                            <h2 class="breadcrumb-heading">{{$product->title}}</h2>
                            <ul>
                                <li>
                                    <a href="{{route('index')}}">Главная /</a>
                                </li>
                                <li>
                                    <a href="{{route('shop')}}">Каталог /</a>
                                </li>
                                <li>
                                    <a href="{{route('showCategory', $product->category->slug)}}">{{$product->category->title}}</a>
                                </li>
                                <li> / {{$product->title}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-product-area section-space-top-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="single-product-img">
                            <div class="swiper-container single-product-slider">
                                <div class="swiper-wrapper">
                                    @foreach ($images as $image)
                                        <div class="swiper-slide">
                                            <a href="{{ asset($image) }}" class="single-img gallery-popup">
                                                <img class="img-full" src="{{ asset($image) }}" alt="Product Image">
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="thumbs-arrow-holder">
                                <div class="swiper-container single-product-thumbs">
                                    <div class="swiper-wrapper">
                                        @foreach ($images as $image)
                                            <a href="#" class="swiper-slide">
                                                <img class="img-full" src="{{ asset($image) }}" alt="Product Thumnail">
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
                                <!-- Add Arrows -->
                                <div class=" thumbs-button-wrap d-none d-md-block">
                                    <div class="thumbs-button-prev">
                                        <i class="pe-7s-angle-left"></i>
                                    </div>
                                    <div class="thumbs-button-next">
                                        <i class="pe-7s-angle-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 pt-9 pt-lg-0">
                        <div class="single-product-content">
                            <h2 class="title mb-3">{{$product->title}}</h2>
                            <p class="short-desc mb-9">{!! $product->description !!}</p>
                            <div class="product-category pb-3">
                                <span class="title">Категория :</span>
                                <ul>
                                    <li>
                                        <a href="{{route('showCategory', $product->category->slug)}}">{{$product->category->title}}</a>
                                    </li>
                                </ul>
                            </div>
                            <form action="javascript:void(0)">
                                <div class="checkbox-form">
                                    <h4 class="contact-form-title">Заполните форму:</h4>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Фамилия: <span class="required">*</span></label>
                                                <input placeholder="Ваше фамилия" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Имя: <span class="required">*</span></label>
                                                <input placeholder="Ваше имя" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>Название предприятия:</label>
                                                <input placeholder="Ваше предприятие" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Почта: <span class="required">*</span></label>
                                                <input placeholder="Ваш почтовый адрес" type="email" id="email" name="email">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Телефон: <span class="required">*</span></label>
                                                <input placeholder="Ваш номер телефона" type="text" id="phone" name="phone">
                                            </div>
                                        </div>
                                        <p class="small text-left">Нажимая кнопку "Получить" Вы даете <a href="{{route('policy')}}" target="_blank">согласие на обработку персональных данных</a>
                                        </p>
                                        <div class="button-wrap">
                                            <button type="submit" value="submit" class="btn btn btn-custom-size big-size btn-primary btn-secondary-hover rounded-0" name="submit">Получить коммерческое предложение</button>
                                            <p class="form-message mt-3 mb-0"></p>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-tab-area section-space-y-axis-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="nav product-tab-nav mb-10" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="active tab-btn" id="information-tab" data-bs-toggle="tab" href="#information" role="tab" aria-controls="information" aria-selected="false">
                                    Обзор
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="tab-btn" id="description-tab" data-bs-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">
                                    Технические параметры
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content product-tab-content">
                            <div class="tab-pane fade show active" id="information" role="tabpanel" aria-labelledby="information-tab">
                                <div class="product-information-body">
                                    {!! $product->review !!}
                                </div>
                            </div>
                            <div class="tab-pane fade" id="description" role="tabpanel" aria-labelledby="description-tab">
                                <div class="product-description-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            {!! $product->specification !!}
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Main Content Area End Here  -->
@endsection
