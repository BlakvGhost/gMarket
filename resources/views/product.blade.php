@extends('base.index')
@section('title')
    {{ $post->libele }}
@endsection
@section('content')
@include('base.cart-modal')
<div class="forReview">
    <div class="modal fade" id="review_product_tremplate" tabindex="-1" aria-labelledby="reviewLabel" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="reviewLabel">Evaluer un produit</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body text-center">
      <h4>Evaluer {{ $post->libele }}</h4>
      @auth
      <form action="{{ route('product.review', $post) }}" method="post">
        @csrf
        <div class="form-group">
          <label for="content_id" class="form-label">What up about ?</label>
          <textarea name="content" id="content_id" cols="30" rows="5" class="form-control" placeholder="Dite quelque chose à propos de {{ $post->libele }}"></textarea>
        </div>
        <div class="my-3 rateByStar">
          <p>Rate the product to help others recognize the best</p>
          <a class="m-1 text-decoration-none rate-link"> <i class="mdi mdi-star mdi-24px"></i></a>
          <a class="m-1 text-decoration-none rate-link"> <i class="mdi mdi-star mdi-24px"></i> </a>
          <a class="m-1 text-decoration-none rate-link"> <i class="mdi mdi-star mdi-24px"></i> </a>
          <a class="m-1 text-decoration-none rate-link"> <i class="mdi mdi-star mdi-24px"></i> </a>
          <a class="m-1 text-decoration-none rate-link"> <i class="mdi mdi-star mdi-24px"></i> </a>
        </div>
        <input type="hidden" name="rate" id="rate_id">
        <div class="my-3">
          <button class="btn btn-success" type="submit">Submit</button>
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
      </div>
      </form>
      @else
      <div class="text-center">
        <h5>Connectez Vous avant de Notez un produit</h5>
        <a href="{{ route('register') }}" class="btn btn-link">Inscription</a>
        <a href="{{ route('login') }}" class="btn btn-link">Deja un Compte</a>
      </div>
      @endauth
    </div>
  </div>
</div>
</div>
  </div>
<div class="row row-cols-2">
    <div class="text-dark">
        <h5 class="link fw-bold">{{ $post->libele }}</h5>
    </div>
    <div class="text-end">
        <a href="{{ url('/') }}" class="link mx-2"><i class="mdi mdi-home-outline"></i></a>
        <span><i class="mdi mdi-chevron-right"></i></span>
        <a href="javascript:void(0)" class="link mx-2">{{ $post->category->name }}</a>
    </div>
</div>
<div class="my-3 item" data-ar-libele="{{ $post->libele }}" data-ar-price="{{ $post->new_price ?? $post->price }}" data-ar-img="{{ Storage::url($post->cover) }}" data-ar-id="{{ $post->id }}" data-ar-availability="In Stock">
    <div class="row row-cols-2">
        <div class="">
            <div class="card rounded-3 overflow-hidden" style="height: 500px;">
                <img src="{{ Storage::url($post->cover) }}" alt="{{ $post->libele }}" class="full" data-pb-fillto="img" data-pb-content="{{ Storage::url($post->cover) }}">
            </div>
            <div class="my-3">
                <div class="swiper swiper-special overflow-hidden my-2 position-relative">
                    <div class="swiper-wrapper overflow-hidden" style="width: 80%;margin: auto">
                        @foreach ($post->photos as $item)
                        <div class="swiper-slide w-25 card m-2">
                            <div style="height: 80px;">
                                <img src="{{ Storage::url($item->cover) }}" alt="{{ $item->description }}" class="full">
                            </div>
                        </div>
                        @endforeach
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
        </div>
        <div>
            <div class="mb-2 py-2 border-bottom animate__animated animate__fadeInDown link" data-pb-fillto="#title" data-pb-content="{{ $post->libele }}">
                <h6> {{ $post->libele }} </h6>
            </div>
            <div class="d-flex my-2">
                <div class="rated-bar fw-normal link border-end px-2" data-ar-rate="{{ $rate }}">
                    <i class="mdi mdi-star"></i>
                    <i class="mdi mdi-star"></i>
                    <i class="mdi mdi-star"></i>
                    <i class="mdi mdi-star"></i>
                    <i class="mdi mdi-star"></i>
                </div>
                <div class="border-end mx-3 px-2">
                    <small class="text-muted"> {{ $post->reviews->count() }} review</small>
                </div>
                <div class="px-2">
                    <a href="javascript:void(0)" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#review_product_tremplate">
                        <i class="mdi mdi-pen"></i>
                        <small> write a review</small>
                    </a>
                </div>
            </div>
            @if ($post->is_promote)
            <div class="w-75 my-3" style="text-align-last: justify">
                <div class="rounded-3 border bg-light w-100 py-1 px-3 countdownSrc" data-ar-countdown="{{ $post->promote_until }}">
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
            <div class="my-2">
                <table class="table">
                    <tr data-pb-fillto="#price" data-pb-content="{{ $post->new_price || $post->price }}">
                        <th>Price : </th>
                        <td> {{ $post->new_price ?? $post->price }} FCFA</td>
                    </tr>
                    <tr>
                        <th>Category : </th>
                        <td> {{ $post->category->name }} </td>
                    </tr>
                    <tr>
                        <th>Availability : </th>
                        <td> {{ 'In Stock' }} </td>
                    </tr>
                </table>
            </div>
            <div class="my-2 d-flex">
                <div class="form-group mx-2 w-25">
                    <label for="price">Quantity</label>
                    <input type="number" name="quantity" id="quantity" value="1" class="form-control text-center">
                </div>
                <div class="animate__animated animate__fadeInRight align-self-end">
                    <button class="btn btn-dark modalUp" title="Ajouter au Panier" data-bs-toggle="modal" data-bs-target="#cardAddedModal" data-pb-storage="cart">
                        <i class="mdi mdi-cart-outline"></i>
                        Ajouter au Panier
                    </button>
                </div>
            </div>
            <div class="animate__animated animate__fadeInUp my-3">
                <button class="btn btn-dark modalUp" title="Ajouter au la liste de souhait" data-pb-storage="wishlist" data-bs-toggle="modal" data-bs-target="#wishlistAddedModal">
                    <i class="mdi mdi-cards-heart"></i>
                </button>
                <a href="javascript:void(0)" class="btn btn-danger w-50" title="Acheter le produit">
                    <i class="mdi mdi-share"></i>
                    Bye It Now
                </a>
            </div>
            <div class="py-2 my-3 border-top">
                <small class="text-muted">{{ $post->desc }}</small>
            </div>
            <div class="py-2 border-top border-bottom">
                <a href="javascript:void(0)" class="link mx-1"><i class="mdi mdi-facebook"></i> Facebook</a>
                <a href="javascript:void(0)" class="link mx-1"><i class="mdi mdi-twitter"></i> Twitt</a>
                <a href="javascript:void(0)" class="link mx-1"><i class="mdi mdi-whatsapp"></i> Pin It</a>
            </div>
        </div>
    </div>
    <div class="my-3">
        <div class="card rounded overflow-hidden p-3">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab" aria-controls="description" aria-selected="true">Description</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="review-tab" data-bs-toggle="tab" data-bs-target="#review" type="button" role="tab" aria-controls="review" aria-selected="false">Review</button>
            </li>
          </ul>
          <div class="tab-content py-2" id="myTabContent">
            <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                <small class="text-muted">{{ $post->desc }}</small>
                <table class="table my-2">
                    @foreach ($post->specifications as $key => $item)
                    <tr>
                        <th>{{ $item->key }} : </th>
                        <td> {{ $item->value }} </td>
                    </tr>
                    @endforeach
                </table>
            </div>
            <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
                @forelse ($post->reviews as $review)
                <div class="py-2 border-bottom text-muted">
                    <span> {{ $review->content }} <span>
                    <div class="rated-bar fw-normal link p-2" data-ar-rate="{{ $review->rate }}">
                        <i class="mdi mdi-star"></i>
                        <i class="mdi mdi-star"></i>
                        <i class="mdi mdi-star"></i>
                        <i class="mdi mdi-star"></i>
                        <i class="mdi mdi-star"></i>
                    </div>
                    <div>
                        <span>{{ $review->user->first_name . ' ' . $review->user->last_name }}</span>
                        <span class="text-end">{{ $review->created_at }}</span>
                    </div>
                </div>
                @empty
                <div class="px-2">
                    <a href="javascript:void(0)" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#review_product_tremplate">
                        <i class="mdi mdi-pen"></i>
                        <small> write a review</small>
                    </a>
                </div>
                @endforelse             
            </div>
          </div>
        </div>
    </div>
    <div class="my-3">
        <div class="container-fluid px-0 py-2 border-bottom sub-danger link">
            <div class="row justify-content-between full">
                <div class="col col-5 align-self-center">
                    <h5 class="fw-bold">Related Products</h5>
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
                    @foreach ($similars as $key => $post)
                    <x-article-unique :post="$post" :key="$key"></x-article-unique>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
    $('.rate-link').each(function(px, link){
        $(this).on('click', function() {
            let _y = px + 1;

            $('.rate-link').removeClass('text-warning');
            $('#rate_id').val(_y);
            $('.rate-link').slice(0, _y).addClass('text-warning');
        });
    });
    new Swiper('.swiper-special', {
        direction: 'horizontal',
        navigation: {
            nextEl: '.next',
            prevEl: '.prev',
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
</script>
@endsection