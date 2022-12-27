<article class="m-2 card swiper-slide w30 product-item item" data-ar-libele="{{ $post->libele }}" data-ar-price="{{ $post->new_price ?? $post->price }}" data-ar-img="{{ Storage::url($post->cover) }}" data-ar-id="{{ $post->id }}" data-ar-availability="In Stock">
    <div class="w-100 position-relative" style="height: 250px;">
        <img src="{{ Storage::url($post->cover) }}" alt="{{ $post->libele }}" class="full produc-down" data-pb-fillto="img" data-pb-content="{{ Storage::url($post->cover) }}">
        @if ($post->is_promote)
        <div class="position-absolute top-0 start-0 text-center p-2 w-100">
            <div class="rounded-3 border bg-light w-100 py-1 countdownSrc" data-ar-countdown="{{ $post->promote_until }}">
                <small id="DayCountDown"></small>
                <small> : </small>
                <small id="HoursCountDown"></small>
                <small> : </small>
                <small id="MinuitCountDown"></small>
                <small> : </small>
                <small id="SecondCountDown" class="text-danger"></small>
            </div>
        </div>
        @endif
        <div class="full position-relative produc-up">
            <div class="full">
                <img src="{{ Storage::url($post->photos[0]->cover) }}" alt="{{ $post->photos[0]->description }}" class="full">
            </div>
            <div class="p-2 position-absolute w-100 start-0 top-0">
                <small class="text-decoration-underline px-1 animate__animated animate__fadeInLeft">Sale</small>
                <span class="form-check form-switch float-end p-1 animate__animated animate__fadeInRight">
                    <input type="checkbox" name="compare" id="compareBtn" class="form-check-input modalUp" data-pb-storage="compare" data-bs-toggle="modal" data-bs-target="#compareAddedModal">
                </span>
            </div>
            <div class="p-2 position-absolute w-100 start-0 bottom-0 text-center animate__animated animate__fadeInUp">
                <input type="hidden" id="quantity" value="1">
                <button class="btn btn-dark modalUp" title="Ajouter au Panier" data-bs-toggle="modal" data-bs-target="#cardAddedModal" data-pb-storage="cart">
                    <i class="mdi mdi-cart-outline"></i>
                </button>
                <button class="btn btn-dark modalUp" title="Ajouter au la liste de souhait" data-pb-storage="wishlist" data-bs-toggle="modal" data-bs-target="#wishlistAddedModal">
                    <i class="mdi mdi-cards-heart"></i>
                </button>
                <button class="btn btn-dark" title="Voir le produit" data-pb-storage="views" data-bs-toggle="modal" data-bs-target="#productViewModal">
                    <i class="fa fa-eye"></i>
                </button>
            </div>
        </div>
    </div>
    <div class="text-center">
        @if ($rate > 0)
        <div class="rated-bar fw-normal link" data-ar-rate="{{ $rate }}">
            <i class="mdi mdi-star"></i>
            <i class="mdi mdi-star"></i>
            <i class="mdi mdi-star"></i>
            <i class="mdi mdi-star"></i>
            <i class="mdi mdi-star"></i>
        </div>
        @endif
        <div class="my-2 animate__animated animate__fadeInDown link" data-pb-fillto="#title" data-pb-content="{{ $post->libele }}">
            <a href="{{ route('product', [$post, str_replace([' ', '.', '*', ',', "'"] , '-', Str::lower($post->libele))]) }}" class="link">
                <h6>{{ $post->libele }}</h6>
            </a>
        </div>
        <div class="animate__animated animate__fadeInUp" data-pb-fillto="#price" data-pb-content="{{ $post->new_price || $post->price }}">
            <h6 class="fw-bold text-danger">
                <span @class(['text-decoration-line-through mx-2' => $post->new_price])> {{ $post->price }} </span>
                @if ($post->new_price)
                <span> {{ $post->new_price }} </span>
                @endif
            </h6>
        </div>
    </div>
</article>
