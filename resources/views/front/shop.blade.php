@extends('front.layout')
@section('content')


<!-- Begin Main Content Area -->
<main class="main-content">
    <div class="breadcrumb-area breadcrumb-height">
        <div class="container h-50">
            <div class="row h-50">
                <div class="col-lg-12">
                    <div class="breadcrumb-item text-night-rider">
                        <h2 class="breadcrumb-heading">Каталог</h2>
                        <ul>
                            <li>
                                <a href="{{route('index')}}">Главная /</a>
                            </li>
                            <li>Каталог</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shop-area section-space-y-axis-10">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4 order-lg-1 order-2 pt-10 pt-lg-0">
                    <div class="sidebar-area style-2">
                        <div class="widgets-searchbox widgets-area py-6 mb-9">
                            <form id="widgets-searchbox" action="#">
                                <input class="input-field" id="search" type="text" placeholder="Найти">
                                <button class="widgets-searchbox-btn" type="submit">
                                    <i class="pe-7s-search"></i>
                                </button>
                            </form>
                        </div>
                        <div class="widgets-area mb-9">
                            <h2 class="widgets-title mb-5">Категории продукции</h2>
                            <div class="widgets-item">
                                <ul class="widgets-category">
                                    @foreach ($categories as $category)
                                        <li><a href="{{route('showCategory', $category->slug)}}">{{$category->title}}
                                            <span>({{$category->products_count}})</span>
                                        </a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8 order-lg-2 order-1" id="product_data">
                    @include('front.product_data')
                </div>
            </div>
        </div>
    </div>
</main>
<!-- Main Content Area End Here -->
@include('front.modal')
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        $(document).on('click', '.pagination a', function(event) {
        event.preventDefault();
        var page = $(this).attr('href').split('page=')[1];
        getMoreProducts(page);
        });

        $('.widgets-searchbox-btn').on('click', function() {
        var value = $('input').val();
        getMoreProducts(1);
        });
    });

    function getMoreProducts(page) {
        var search = $('#search').val();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "GET",
            data: {'search_query': search},
            url:"/pagination/getMoreProducts?page=" + page,
            success:function(data) {
                $('#product_data').html(data);
        }
        });
    }

</script>
<script type="text/javascript">

    $(document).ready(function () {

        $('body').on('click', '#show-product', function () {
          var productURL = $(this).data('url');
          $.get(productURL, function (data) {
              $('#productShowModal').modal('show');
              $('#product-name').text(data.title);
              $('#product-description').html(data.description);
          })
       });

    });

</script>
@endpush

