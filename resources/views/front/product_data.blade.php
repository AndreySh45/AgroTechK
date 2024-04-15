@if ($products->count())
<div class="tab-content text-charcoal">
    <div class="tab-pane fade show active" id="grid-view" role="tabpanel" aria-labelledby="grid-view-tab">
        <div class="product-grid-view row">
            @foreach ($products as $product)
                <div class="col-xl-4 col-sm-6 pt-6">
                    <div class="product-item">
                        <div class="product-img img-zoom-effect">
                            <a href="single-product-variable.html">
                                <img class="img-full" src="{{ asset($product->getImage()) }}" alt="{{ $product->title }}">
                            </a>
                        </div>
                        <div class="product-content">
                            <div class="product-add-action">
                                <ul>
                                    <li class="quuickview-btn" data-bs-toggle="modal" data-bs-target="#quickModal">
                                        <a href="javascript:void(0)" data-url="{{route('oneProduct', $product->id)}}" id="show-product" data-tippy="Подробнее" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                            <i class="pe-7s-look"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('singleProduct', $product->id)}}" data-tippy="Добавить для сравнения" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                            <i class="pe-7s-shuffle"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <a class="product-name pb-1" href="{{route('singleProduct', $product->id)}}">{{ $product->title }}</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<div class="pagination-area pt-10">
    {{ $products->links('front.pagination') }}
</div>
@else
    <h2>По вашему запросу  ничего не найдено...</h2>
@endif
