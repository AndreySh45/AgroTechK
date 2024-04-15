<!-- Begin Modal Area -->
<div class="modal quick-view-modal fade" id="productShowModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="quickModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="modal-wrap row">
                    <div class="col-lg-6">
                        <div class="modal-img">
                            <div class="swiper-container modal-slider">
                                <div class="swiper-wrapper">
                                    {{-- @foreach ($images as $image)
                                            <a href="#" class="swiper-slide">
                                                <img class="img-full" src="{{ Vite::asset($image) }}" alt="Product Thumnail">
                                            </a>
                                    @endforeach --}}
                                </div>
                            </div>
                            <div class="thumbs-arrow-holder">
                                <div class="swiper-container modal-thumbs">
                                    <div class="swiper-wrapper">
                                        {{-- @foreach ($images as $image)
                                        <a href="#" class="swiper-slide">
                                            <img class="img-full" src="{{ Vite::asset($image) }}" alt="Product Thumnail">
                                        </a>
                                        @endforeach --}}
                                    </div>
                                </div>
                                <!-- Add Arrows -->
                                <div class="thumbs-button-wrap d-none d-md-block">
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
                            {{-- <a class="product-name pb-1" href="{{route('singleProduct', $product->id)}}">{{ $product->title }}</a> --}}
                            <h2 class="title mb-3" id="product-name"></h2>
                            <p class="short-desc mb-9" id="product-description"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal Area End Here -->
