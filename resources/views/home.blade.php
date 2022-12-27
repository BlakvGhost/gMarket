@extends('base.index')
@section('title')
    Acceuil
@endsection
@section('content')
@include('base.cart-modal')
    <div class="mb-3">
        <div style="height: 350px;" class="overflow-hidden">
            <div class="full">
                <div class="row row-cols-2 full m-0">
                    <div class="col col-9 carousel h-100 ps-0">
                        <div class="carousel-control">
                            <div class="carousel-control-prev">
                                <button class="btn home-prev btn-dark rounded-circle">
                                    <i class="fa fa-caret-left"></i>
                                </button>                            
                            </div>
                            <div class="carousel-control-next">
                                <button class="btn home-next btn-dark rounded-circle">
                                    <i class="fa fa-caret-right"></i>
                                </button>                            
                            </div>
                        </div>
                        <div class="carousel-inner home-slide full">
                            @foreach ($carousel as $post)
                                <div class="position-relative rounded full overflow-hidden">
                                    <div class="position-absolute start-0 full p-3 ms-5 text-light" style="top: 20%">
                                        <div class="my-2 animate__animated animate__fadeInDown">
                                            <h5> {{ Str::limit($post->desc, 20, '...') }} </h5>
                                        </div>
                                        <div class="my-3 animate__animated animate__fadeInLeft"">
                                            <h3 class="text-danger"> {{ $post->libele }} </h3>
                                        </div>
                                        <div class="my-3 animate__animated animate__fadeInUp"">
                                            <a href="{{ route('product', [$post, $post->libele]) }}" class="btn btn-danger rounded-pill">Shop Now</a>
                                        </div>
                                    </div>
                                    <div class="full overflow-hidden">
                                        <img src="{{ Storage::url($post->cover) }}" alt="{{ $post->libele }}" class="full">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col col-3 pe-0">
                        <div class="h-50 overflow-hidden mb-2 rounded position-relative">
                            <div class="full position-absolute start-0 top-0 p-4 text-light">
                                <div class="my-2 animate__animated animate__fadeInRight">
                                    <h4>Samsung Galaxy S8+</h4>
                                </div>
                                <div class="my-2 animate__animated animate__fadeInRight">
                                    <h6 class="fw-normal">For PC Desktop only</h6>
                                </div>
                            </div>
                            <div class="full">
                                <img src="{{ Storage::url('public/right-banner-01_275x230.jpg') }}" alt="" class="full">
                            </div>
                        </div>
                        <div class="h-50 overflow-hidden rounded position-relative">
                            <div class="full position-absolute start-0 top-0 p-4 text-light">
                                <div class="my-2 animate__animated animate__fadeInRight">
                                    <h4>Samsung Galaxy S8+</h4>
                                </div>
                                <div class="my-2 animate__animated animate__fadeInRight">
                                    <h6 class="fw-normal">For PC Desktop only</h6>
                                </div>
                            </div>
                            <div class="full">
                                <img src="{{ Storage::url('public/right-banner-02_275x230.jpg') }}" alt="" class="full">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="my-3 bg-white rounded p-2 border">
            <div class="container-fluid">
                <div class="row row-cols-4">
                    <div class="d-flex border-end">
                        <div class="mx-2 align-self-center">
                            <img src="{{ Storage::url('public/01.png') }}" alt="" style="height: 32px; width:32px">
                        </div>
                        <div class="text-dark">
                            <h6 class="m-0">Free Shipping</h6>
                            <small>Deliver To Door</small>
                        </div>
                    </div>
                    <div class="d-flex border-end">
                        <div class="mx-2 align-self-center">
                            <img src="{{ Storage::url('public/02.png') }}" alt="" style="height: 32px; width:32px">
                        </div>
                        <div class="text-dark">
                            <h6 class="m-0">24h7 Support</h6>
                            <small>Deliver To Door</small>
                        </div>
                    </div>
                    <div class="d-flex border-end">
                        <div class="mx-2 align-self-center">
                            <img src="{{ Storage::url('public/03.png') }}" alt="" style="height: 32px; width:32px">
                        </div>
                        <div class="text-dark">
                            <h6 class="m-0">Big Saving</h6>
                            <small>Deliver To Door</small>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="mx-2 align-self-center">
                            <img src="{{ Storage::url('public/04.png') }}" alt="" style="height: 32px; width:32px">
                        </div>
                        <div class="text-dark">
                            <h6 class="m-0">Money Back</h6>
                            <small>Deliver To Door</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="my-3 tab-init">
        <div class="container-fluid px-0 py-2 border-bottom sub-danger link">
            <div class="row justify-content-between full">
                <div class="col col-5 align-self-center">
                    <h5 class="fw-bold">Trending Products</h5>
                </div>
                <div class="d-flex col justify-content-between nav-tabs" id="myTab" role="tablist">
                    <button class="btn btn-danger active-tab border rounded-pill fw-bold" id="newTab" data-fv-toggle="tab" data-fv-target="#newProduct" type="button" role="tab">New Products</button>
                    <button class="btn btn-light border rounded-pill fw-bold" id="featuredTab" data-fv-toggle="tab" data-fv-target="#featuredProduct" type="button" role="tab">Featured</button>
                    <button class="btn btn-light border rounded-pill fw-bold" id="bestSellerTab" data-fv-toggle="tab" data-fv-target="#bestSellerProduct" type="button" role="tab">BestSeller</button>
                    <div class="text-end">
                        <button class="btn btn-light border prev-0"><i class="fa fa-chevron-left"></i></button>
                        <button class="btn btn-light border next-0"><i class="fa fa-chevron-right"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-content my-3" id="myTabContent">
            <div class="tab-pane fade show active" id="newProduct" role="tabpanel" aria-labelledby="newTab">
                <div class="swiper px-0 my-2 article-0 overflow-hidden">
                    <div class="swiper-wrapper full justify-content-between">
                        @foreach ($products->sortByDesc('id')->take($products->count() / 2) as $key => $post)
                            <x-article-unique :post="$post" :key="$key"></x-article-unique>
                        @endforeach
                    </div>
                </div>
                <div class="swiper px-0 my-2 article-0 overflow-hidden">
                    <div class="swiper-wrapper full justify-content-between">
                        @foreach ($products->take($products->count() / 2) as $key => $post)
                            <x-article-unique :post="$post" :key="$key"></x-article-unique>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="featuredProduct" role="tabpanel" aria-labelledby="featuredTab">
                <div class="swiper px-0 my-2 article-0 overflow-hidden">
                    <div class="swiper-wrapper full justify-content-between">
                        @for ($i = 0; $i < 10; $i++)
                            <x-blog-unique></x-article-unique>
                        @endfor
                    </div>
                </div>
                <div class="swiper px-0 my-2 article-0 overflow-hidden">
                    <div class="swiper-wrapper full justify-content-between">
                        @for ($i = 0; $i < 10; $i++)
                            <x-blog-unique></x-article-unique>
                        @endfor
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="bestSellerProduct" role="tabpanel" aria-labelledby="bestSellerTab">
                <div class="swiper px-0 my-2 article-0 overflow-hidden">
                    <div class="swiper-wrapper full justify-content-between">
                        @for ($i = 0; $i < 10; $i++)
                            <x-article-special></x-article-special>
                        @endfor
                    </div>
                </div>
                <div class="swiper px-0 my-2 article-0 overflow-hidden">
                    <div class="swiper-wrapper full justify-content-between">
                        @for ($i = 0; $i < 10; $i++)
                        <x-article-special></x-article-special>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="my-3 container-fluid px-0">
        <div class="row row-cols-2" style="height: 150px;">
            <div class="h-100 overflow-hidden rounded position-relative">
                <div class="full position-absolute start-0 top-0 p-4 text-light">
                    <div class="mb-2 animate__animated animate__fadeInRight">
                        <h4>Samsung Galaxy S8+</h4>
                    </div>
                    <div class="my-2 animate__animated animate__fadeInRight">
                        <h6 class="fw-normal fst-italic">For PC Desktop only</h6>
                    </div>
                    <div class="my-2 animate__animated animate__fadeInRight">
                        <button class="btn btn-warning rounded-pill">Show Now</button>
                    </div>
                </div>
                <div class="full overflow-hidden rounded">
                    <img src="{{ Storage::url('public/banner-center-1.jpg') }}" alt="" class="full">
                </div>
            </div>
            <div class="h-100 overflow-hidden rounded position-relative">
                <div class="full position-absolute start-0 top-0 p-4 text-dark">
                    <div class="mb-2 animate__animated animate__fadeInRight">
                        <h4>Samsung Galaxy S8+</h4>
                    </div>
                    <div class="my-2 animate__animated animate__fadeInRight">
                        <h6 class="fw-normal fst-italic">For PC Desktop only</h6>
                    </div>
                    <div class="my-2 animate__animated animate__fadeInRight">
                        <button class="btn btn-danger rounded-pill">Show Now</button>
                    </div>
                </div>
                <div class="full overflow-hidden rounded">
                    <img src="{{ Storage::url('public/banner-center.jpg') }}" alt="" class="full">
                </div>
            </div>
        </div>
    </div>
    <div class="my-3">
        <div class="container-fluid px-0 py-2 border-bottom sub-danger link">
            <div class="row justify-content-between full">
                <div class="col col-5 align-self-center">
                    <h5 class="fw-bold">Specials</h5>
                </div>
                <div class="col text-end">
                    <button class="btn btn-light border prev-2"><i class="fa fa-chevron-left"></i></button>
                    <button class="btn btn-light border next-2"><i class="fa fa-chevron-right"></i></button>
                </div>
            </div>
        </div>
        <div class="my-3 overflow-hidden">
            <div class="swiper px-0 my-2 article-1 overflow-hidden">
                <div class="swiper-wrapper full justify-content-between">
                    @for ($i = 0; $i < 9; $i++)
                        <x-article-special></x-article-special>
                    @endfor
                </div>
            </div>
        </div>
    </div>
    <div class="my-3" style="height: 120px;">
        <div class="full overflow-hidden">
            <img src="{{ Storage::url('public/offer-banner.jpg') }}" alt="" class="full">
        </div>
    </div>
    <div class="my-3">
        <div class="container-fluid px-0 py-2 border-bottom sub-danger link">
            <div class="row justify-content-between full">
                <div class="col col-5 align-self-center">
                    <h5 class="fw-bold">Top Categories</h5>
                </div>
                <div class="d-flex col justify-content-end">
                    <button class="btn btn-danger border rounded-pill fw-bold">Electronic</button>
                    <button class="btn btn-light border rounded-pill fw-bold">Mobile</button>
                    <button class="btn btn-light border rounded-pill fw-bold">Roller</button>
                    <div class="text-end">
                        <button class="btn btn-light border prev-0"><i class="fa fa-chevron-left"></i></button>
                        <button class="btn btn-light border next-0"><i class="fa fa-chevron-right"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="my-3">
            <div class="swiper px-0 my-2 article-0 overflow-hidden">
                <div class="swiper-wrapper full justify-content-between">
                    {{-- @for ($i = 0; $i < 10; $i++)
                        <x-article-unique></x-article-unique>
                    @endfor --}}
                </div>
            </div>
        </div>
    </div>
    <div class="my-3">
        <div class="container-fluid px-0 py-2 border-bottom sub-danger link">
            <div class="row justify-content-between full">
                <div class="col col-5 align-self-center">
                    <h5 class="fw-bold">Browers Categories</h5>
                </div>
                <div class="col text-end">
                    <button class="btn btn-light border prev-3"><i class="fa fa-chevron-left"></i></button>
                    <button class="btn btn-light border next-3"><i class="fa fa-chevron-right"></i></button>
                </div>
            </div>
        </div>
        <div class="my-3 overflow-hidden">
            <div class="swiper px-0 my-2 article-2 overflow-hidden">
                <div class="swiper-wrapper full justify-content-between">
                    @for ($i = 0; $i < 8; $i++)
                        <div class="m-2 card swiper-slide w35">
                            <div class="row" style="height: 200px;">
                                <div class="col col-5 h-100">
                                    <div class="full">
                                        <img src="{{ Storage::url('public/cat.jpg') }}" alt="" class="full">
                                    </div>
                                </div>
                                <div class="col col-7">
                                    <div class="py-2 border-bottom animate__animated animate__fadeInDown link">
                                        <h6 class="fw-bold">Je test le title inferieur</h6>
                                    </div>
                                    <div class="animate__animated animate__fadeInUp link mb-2">
                                        <small>Lorem ipsum dolor sit amet consectetur...</small>
                                    </div>
                                    <button class="btn btn-light link">10 Items</button>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
    <div class="my-3">
        <div class="container-fluid px-0 py-2 border-bottom sub-danger link">
            <div class="row justify-content-between full">
                <div class="col col-5 align-self-center">
                    <h5 class="fw-bold">Latest Blog</h5>
                </div>
                <div class="col text-end">
                    <button class="btn btn-light border prev-3"><i class="fa fa-chevron-left"></i></button>
                    <button class="btn btn-light border next-3"><i class="fa fa-chevron-right"></i></button>
                </div>
            </div>
        </div>
        <div class="my-3 overflow-hidden">
            <div class="swiper px-0 my-2 article-2 overflow-hidden">
                <div class="swiper-wrapper full justify-content-between">
                    @for ($i = 0; $i < 8; $i++)
                        <x-blog-unique></x-blog-unique>
                    @endfor
                </div>
            </div>
        </div>
    </div>
    <div class="my-3">
        <div class="container-fluid px-0 py-2 border-bottom sub-danger link">
            <div class="row justify-content-between full">
                <div class="col col-5 align-self-center">
                    <h5 class="fw-bold">Manufacturers</h5>
                </div>
                <div class="col text-end">
                    <button class="btn btn-light border prev-3"><i class="fa fa-chevron-left"></i></button>
                    <button class="btn btn-light border next-3"><i class="fa fa-chevron-right"></i></button>
                </div>
            </div>
        </div>
        <div class="my-3 overflow-hidden">
            <div class="swiper px-0 my-2 article-2 overflow-hidden">
                <div class="swiper-wrapper full justify-content-between">
                    @for ($i = 0; $i < 8; $i++)
                        <div class="m-2 card swiper-slide w-25">
                            <div style="height: 120px;">
                                <div class="full">
                                    <img src="{{ Storage::url('public/brand-logo.png') }}" alt="" class="full">
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script async>
        $('.home-slide').owlCarousel({
                items : 1,
                nav : false,
                dots : false,
                loop: true,
                autoplay:true,
                autoplaySpeed:1500,
                autoplayTimeout:10000,
                autoHeight:true,
                responsive: {
                    1279: {
                        items: 1
                    },
                    1250: {
                        items: 1
                    },
                    600: {
                        items: 1
                    }
                }
            });
            $('.home-prev').click(function(){
                $('.home-slide .owl-prev').click();
            });
            $('.home-next').click(function(){
                $('.home-slide .owl-next').click();
            });

            new Swiper('.article-0', {
                direction: 'horizontal',
                loop: false,
                navigation: {
                    nextEl: '.next-0',
                    prevEl: '.prev-0',
                }
            });
            new Swiper('.article-1', {
                direction: 'horizontal',
                loop: true,
                navigation: {
                    nextEl: '.next-2',
                    prevEl: '.prev-2',
                }
            });
            new Swiper('.article-2', {
                direction: 'horizontal',
                loop: true,
                navigation: {
                    nextEl: '.next-3',
                    prevEl: '.prev-3',
                }
            });
    </script>
@endsection