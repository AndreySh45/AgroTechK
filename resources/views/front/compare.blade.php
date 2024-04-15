@extends('front.layout')
@section('content')

<!-- Begin Main Content Area -->
<main class="main-content">
    <div class="breadcrumb-area breadcrumb-height">
        <div class="container h-50">
            <div class="row h-50">
                <div class="col-lg-12">
                    <div class="breadcrumb-item text-night-rider">
                        <h2 class="breadcrumb-heading">Страница сравнения</h2>
                        <ul>
                            <li>
                                <a href="index.html">Главная/</a>
                            </li>
                            <li>Сравнение</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="compare-area section-space-y-axis-10">
        <div class="container">
            <div class="compare-table table-responsive">
                <table class="table table-bordered table-hover mb-0">
                    <tbody>
                        <tr>
                            <th class="compare-column-titles">Изображения</th>
                            <td class="compare-column-productinfo">
                                <div class="{{route('singleProduct', $product->id, 'product')}}">
                                    <a href="single-product.html">
                                        <img src="{{ Vite::asset($images[0]) }}" alt="Wishlist Thumbnail">
                                    </a>
                                    <a href="{{route('singleProduct', $product->id, 'product')}}" class="btn btn-custom-size lg-size btn-primary">
                                        <span>Получить КП</span>
                                    </a>
                                </div>
                            </td>
                            <td class="compare-column-productinfo">
                                <div class="compare-pdoduct-image">
                                    <a href="single-product.html">
                                        <img src="assets/images/product/small-size/2-2-112x112.png" alt="Wishlist Thumbnail">
                                    </a>
                                    <a href="single-product-variable.html" class="btn btn-custom-size lg-size btn-primary">
                                        <span>Заказать</span>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>Название</th>
                            <td>
                                <h5 class="compare-product-name"><a href="{{route('singleProduct', $product->id, 'product')}}">{{ $product->title }}</a>
                                </h5>
                            </td>
                            <td>
                                <h5 class="compare-product-name"><a href="single-product.html">Трактор YTO X904</a></h5>
                            </td>
                        </tr>
                        <tr>
                            <th>Тех.характеристика</th>
                            <td>{!! $product->specification !!}</td>
                            <td>Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc, litot Europa usa li sam vocabular. Li lingues differe solmen in li grammatica, li pronunciation e li plu commun vocabules.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
<!-- Main Content Area End Here -->

@endsection
