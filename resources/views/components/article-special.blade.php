<article class="m-2 card swiper-slide w-50 product-item-special item" data-ar-price="8000" data-ar-img="{{ Storage::url('public/s1.jpg') }}" data-ar-id="{{ 8 }}" data-ar-availability="In Stock">
    <div class="row p-2">
        <div class="col-5 border-end">
            <div class="w-100 position-relative" style="height: 250px;">
                <img src="{{ Storage::url('public/s1.jpg') }}" alt="" class="full produc-down" data-pb-fillto="img" data-pb-content="{{ Storage::url('public/s1.jpg') }}">
            </div>
            <div class="swiper swiper-special overflow-hidden my-2 position-relative">
                <div class="swiper-wrapper" style="width: 75%;margin: auto">
                    @for ($i = 0; $i < 8; $i++)
                        <div class="swiper-slide w-50 card m-2">
                            <div style="height: 50px; width:50px;">
                                <img src="{{ Storage::url('public/n1.jpg') }}" alt="" class="full">
                            </div>
                        </div>
                    @endfor
                </div>
                <div class="carousel-control">
                    <div class="carousel-control-prev">
                        <button class="btn btn-light border p-1 prev">
                            <i class="fa fa-caret-left"></i>
                        </button>
                    </div>
                    <div class="carousel-control-next">
                        <button class="btn btn-light border p-1 next">
                            <i class="fa fa-caret-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col col-7">
            <div class="my-2 p-2 border-bottom animate__animated animate__fadeInDown link" data-pb-fillto="#title" data-pb-content="Huawei G7">
                <a href="{{ route('product', [1, 'iPhone-xs']) }}" class="link">
                    <h6>Je test le title inferieur</h6>
                </a>
            </div>
            <div class="rated-bar fw-normal link">
                <i class="mdi mdi-star text-warning"></i>
                    <i class="mdi mdi-star text-warning"></i>
                    <i class="mdi mdi-star text-warning"></i>
                    <i class="mdi mdi-star text-warning"></i>
                    <i class="mdi mdi-star"></i>
            </div>
            <div class="animate__animated animate__fadeInUp" data-pb-fillto="#price" data-pb-content="800 050 FCFA">
                <h6 class="fw-bold text-danger">800 000 FCFA</h6>
            </div>
            <div class="animate__animated animate__fadeInUp link my-3">
                <small>Lorem ipsum dolor sit amet consectetur...</small>
            </div>
            <div class="w-100" style="text-align-last: justify">
                <div class="rounded-3 border bg-light w-100 py-1 px-3 countdownSrc" data-ar-countdown="{{ Date('Y-m-d H:s:i') }}">
                    <small id="DayCountDown"></small>
                    <small> : </small>
                    <small id="HoursCountDown"></small>
                    <small> : </small>
                    <small id="MinuitCountDown"></small>
                    <small> : </small>
                    <small id="SecondCountDown" class="text-danger"></small>
                </div>
            </div>
            <div class="py-2 w-100 animate__animated animate__fadeInUp">
                <button class="btn btn-dark modalUp" title="Ajouter au Panier"  data-bs-toggle="modal" data-bs-target="#cardAddedModal" data-pb-storage="cart">
                    <i class="mdi mdi-cart-outline"></i>
                    Ajouter au Panier
                </button>
            </div>
            <div class="hovered">
                <button class="btn btn-dark animate__animated animate__fadeInLeft modalUp" title="Ajouter au la liste de souhait" data-pb-storage="wishlist" data-bs-toggle="modal" data-bs-target="#wishlistAddedModal">
                    <i class="mdi mdi-cards-heart"></i>
                </button>
                <button class="btn btn-dark animate__animated animate__fadeInUp modalUp" title="Voir le produit" data-pb-storage="views" data-bs-toggle="modal" data-bs-target="#productViewModal">
                    <i class="fa fa-eye"></i>
                </button>
                <button class="btn btn-dark animate__animated animate__fadeInRight" title="Comparer le produit">
                    <span class="form-check form-switch">
                        <input type="checkbox" name="compare" id="compareBtn" class="form-check-input modalUp" data-pb-storage="compare" data-bs-toggle="modal" data-bs-target="#compareAddedModal">
                    </span>
                </button>
            </div>
        </div>
    </div>
</article>
<script>
    new Swiper('.swiper-special', {
        direction: 'horizontal',
        loop: true,
        navigation: {
            nextEl: '.next',
            prevEl: '.prev',
        }
    });
</script>