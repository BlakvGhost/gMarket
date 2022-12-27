<div class="mb-3 collapse" id="sidebarUp">
    <div>
        <ul class="list-group">
            <li class="list-group-item list-group-item-action position-relative">
                <div>
                    <a href="javascript:void(0)" class="link">Home</a>
                    <i class="float-end fa fa-chevron-down p-1"></i>
                    <i class="float-end fa fa-chevron-right p-1"></i>
                </div>
                <div class="under-sideList position-absolute start-100 top-0 zd w-100 animate__animated animate__fadeInLeft">
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-action">
                            <a href="javascript:void(0)" class="link">Blog 1</a>
                        </li>
                        <li class="list-group-item list-group-item-action">
                            <a href="javascript:void(0)" class="link">Blog 2</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="list-group-item list-group-item-action position-relative">
                <div>
                    <a href="javascript:void(0)" class="link">Catalogue</a>
                    <i class="float-end fa fa-chevron-down p-1"></i>
                    <i class="float-end fa fa-chevron-right p-1"></i>
                </div>
                <div class="under-sideList position-absolute start-100 top-0 zd w-100 animate__animated animate__fadeInLeft">
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-action">
                            <a href="javascript:void(0)" class="link">Blog 1</a>
                        </li>
                        <li class="list-group-item list-group-item-action">
                            <a href="javascript:void(0)" class="link">Blog 2</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="list-group-item list-group-item-action position-relative">
                <div>
                    <a href="javascript:void(0)" class="link">Shop</a>
                    <i class="float-end fa fa-chevron-down p-1"></i>
                    <i class="float-end fa fa-chevron-right p-1"></i>
                </div>
                <div class="under-sideList position-absolute start-100 top-0 zd w-100 animate__animated animate__fadeInLeft">
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-action">
                            <a href="javascript:void(0)" class="link">Blog 1</a>
                        </li>
                        <li class="list-group-item list-group-item-action">
                            <a href="javascript:void(0)" class="link">Blog 2</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="list-group-item list-group-item-action position-relative">
                <div>
                    <a href="javascript:void(0)" class="link">Products</a>
                    <i class="float-end fa fa-chevron-down p-1"></i>
                    <i class="float-end fa fa-chevron-right p-1"></i>
                </div>
                <div class="under-sideList position-absolute start-100 top-0 zd w-100 animate__animated animate__fadeInLeft">
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-action">
                            <a href="javascript:void(0)" class="link">Blog 1</a>
                        </li>
                        <li class="list-group-item list-group-item-action">
                            <a href="javascript:void(0)" class="link">Blog 2</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="list-group-item list-group-item-action">
                <a href="javascript:void(0)" class="link">About-Us</a>
            </li>
            <li class="list-group-item list-group-item-action">
                <a href="javascript:void(0)" class="link">Electronics</a>
            </li>
            <li class="list-group-item list-group-item-action position-relative">
                <div>
                    <a href="javascript:void(0)" class="link">Blog</a>
                    <i class="float-end fa fa-chevron-down p-1"></i>
                    <i class="float-end fa fa-chevron-right p-1"></i>
                </div>
                <div class="under-sideList position-absolute start-100 top-0 zd w-100 animate__animated animate__fadeInLeft">
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-action">
                            <a href="javascript:void(0)" class="link">Blog 1</a>
                        </li>
                        <li class="list-group-item list-group-item-action">
                            <a href="javascript:void(0)" class="link">Blog 2</a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</div>
<div id="sidebarDown">
    <div class="overflow-hidden rounded p-1 border">
        <div class="position-relative rounded overflow-hidden" style="height:350px;">
            <div class="full position-absolute start-0 top-0 p-4 text-light">
                <div class="my-2 animate__animated animate__fadeInRight">
                    <h4>Samsung Galaxy S8+</h4>
                </div>
                <div class="my-2 animate__animated animate__fadeInRight">
                    <h6 class="fw-normal">For PC Desktop only</h6>
                </div>
            </div>
            <div class="full">
                <img src="{{ Storage::url('public/banner-left.jpg') }}" alt="" class="full">
            </div>
        </div>
    </div>
    <div class="overflow-hidden rounded p-1 border my-3 bg-white">
        <div class="bg-danger p-2 text-light overflow-hidden rounded">
            <strong>Testimonials</strong>
        </div>
        <div class="swiper testimonial overflow-hidden my-2">
            <div class="swiper-wrapper" style="">
                @for ($i = 0; $i < 7; $i++)
                    <div class="swiper-slide full">
                        <div class="col p-3 text-center">
                            <div class="text-center text-dark">
                                <div class="my-2">
                                    <img src="{{ Storage::url('public/me.jpg') }}" style="width:82px;height:82px" class="rounded-circle img-thumbnail">
                                </div>
                                <div class="">
                                    <h6 class="fw-bolder">Kabirou Hassane</h6>
                                </div>
                                <div class="fv-title-normal" >
                                    <h6 class="text-dark"> Web Dev </h6>
                                </div>
                                <div class="text-dark my-2">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Temr, doloribus ptio perspiciatis sed laborum odit rerum?
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>
    <div class="overflow-hidden rounded p-1 border my-3 bg-white">
        <div class="bg-danger p-2 text-light overflow-hidden rounded">
            <strong>Best Seller</strong>
        </div>
        <div class="overflow-hidden my-2">
            @for ($i = 0; $i < 7; $i++)
                <div class="w-100 my-2">
                    <a href="{{ route('product', [1, 'ff']) }}" class="link">
                        <div class="row full m-0">
                            <div class="col col-6 px-2" style="height: 120px;">
                                <img src="{{ Storage::url('public/s1.jpg') }}" alt="" class="full border">
                            </div>
                            <div class="col col-6">
                                <div class="animate__animated animate__fadeInRight mb-2">
                                    <small class="text-muted">Lorem ipsum dolor.</small>
                                </div>
                                <div class="animate__animated animate__fadeInLeft">
                                    <small class="fw-bold text-danger">500$</small>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endfor
        </div>
    </div>
    <div class="overflow-hidden rounded p-1 border my-3 bg-white">
        <div class="bg-danger p-2 text-light overflow-hidden rounded">
            <strong>Top Rated</strong>
        </div>
        <div class="overflow-hidden my-2">
            @for ($i = 0; $i < 7; $i++)
                <div class="w-100 my-2">
                    <a href="{{ route('product', [1, 'ff']) }}" class="link">
                        <div class="row full m-0">
                            <div class="col col-6 px-2" style="height: 120px;">
                                <img src="{{ Storage::url('public/s1.jpg') }}" alt="" class="full border">
                            </div>
                            <div class="col col-6">
                                <div class="animate__animated animate__fadeInRight mb-2">
                                    <small class="text-muted">Lorem ipsum dolor.</small>
                                </div>
                                <div class="animate__animated animate__fadeInLeft">
                                    <small class="fw-bold text-danger">500$</small>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endfor
        </div>
    </div>
</div>
<script>
    new Swiper('.testimonial', {
        direction: 'horizontal',
        loop: true,
    });
</script>