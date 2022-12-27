<div class="cart-modal">
    <div class="modal fade" id="cardAddedModal" tabindex="-1" aria-labelledby="cardAddedModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header bg-danger text-light">
            <h6 class="modal-title text-light" id="cardAddedModalLabel"><i class="mdi mdi-check"></i>&nbsp; Product Added Successful To Your Cart</h6>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body p-3">
            <div class="row row-cols-2">
                <div class="my-3 col-5" style="height: 200px;">
                    <img src="/" alt="" class="full">
                </div>
                <div class="px-2 col-7">
                    <div class="animate__animated animate__fadeInUp link">
                        <small>There are 4 items in your cart</small>
                    </div>
                    <div class="animate__animated animate__fadeInUp link">
                        <small class="fw-bold" id="title"></small>
                    </div>
                    <div class="animate__animated animate__fadeInUp link">
                        <small id="price"></small>
                    </div>
                    <div class="my-3 w-100 row justify-content-between">
                        <a href="{{ route('cart') }}" class="btn col col-5 btn-dark animate__animated animate__fadeInLeft" title="Ajouter au Panier">
                            <i class="mdi mdi-cart-outline"></i>
                            Voir le Panier
                        </a>
                        <button class="btn btn-dark col col-5 animate__animated animate__fadeInRight" title="CheckOut">
                            <i class="mdi mdi-share"></i>
                            Checkout
                        </button>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="wishlist-modal">
    <div class="modal fade" id="wishlistAddedModal" tabindex="-1" aria-labelledby="wishlistAddedModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header bg-danger text-light">
            <h6 class="modal-title text-light" id="wishlistAddedModalLabel"><i class="mdi mdi-check"></i>&nbsp; Product Added Successful To Your Wishlist</h6>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body p-3">
            <div class="row row-cols-2">
                <div class="my-3 col-5" style="height: 200px;">
                    <img src="/" alt="" class="full">
                </div>
                <div class="px-2 col-7">
                    <div class="animate__animated animate__fadeInUp link">
                        <small>There are 4 items in your Wishlist</small>
                    </div>
                    <div class="animate__animated animate__fadeInUp link">
                        <small class="fw-bold" id="title"></small>
                    </div>
                    <div class="animate__animated animate__fadeInUp link">
                        <small id="price"></small>
                    </div>
                    <div class="my-3 w-100 row justify-content-between">
                        <a href="{{ route('wishlist') }}" class="btn col col-5 btn-dark animate__animated animate__fadeInLeft" title="Ajouter au Panier">
                            <i class="mdi mdi-cards-heart"></i>
                            Voir la List
                        </a>
                        <button class="btn btn-dark col col-5 animate__animated animate__fadeInRight delCartItem" title="Retirer de la liste" data-pb-storage="wishlist">
                            <i class="mdi mdi-share"></i>
                            Retirer
                        </button>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  
  <div class="compare-modal">
    <div class="modal fade" id="comparelistAddedModal" tabindex="-1" aria-labelledby="compareAddedModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header bg-danger text-light">
            <h6 class="modal-title text-light" id="compareAddedModalLabel"><i class="mdi mdi-check"></i>&nbsp; Product Added Successful To Your Wishlist</h6>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body p-3">
            <div class="row row-cols-2">
                <div class="my-3 col-5" style="height: 200px;">
                    <img src="/" alt="" class="full">
                </div>
                <div class="px-2 col-7">
                    <div class="animate__animated animate__fadeInUp link">
                        <small>There are 4 items in your compare List</small>
                    </div>
                    <div class="animate__animated animate__fadeInUp link">
                        <small class="fw-bold" id="title"></small>
                    </div>
                    <div class="animate__animated animate__fadeInUp link">
                        <small id="price"></small>
                    </div>
                    <div class="my-3 w-100 row justify-content-between">
                        <a href="/" class="btn col col-5 btn-dark animate__animated animate__fadeInLeft" title="Ajouter au Panier">
                            <i class="mdi mdi-cards-heart"></i>
                            Voir la List
                        </a>
                        <button class="btn btn-dark col col-5 animate__animated animate__fadeInRight delCartItem" title="Retirer de la liste" data-pb-storage="compare">
                            <i class="mdi mdi-share"></i>
                            Retirer
                        </button>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="compare-modal">
    <div class="modal fade" id="compareAddedModal" tabindex="-1" aria-labelledby="compareAddedModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header bg-danger text-light">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body p-3">
            <div class="row row-cols-2">
                <div class="my-3 col-5" style="height: 200px;">
                    <img src="/" alt="" class="full">
                </div>
                <div class="px-2 col-7">
                    <div class="my-3 w-100 row justify-content-between">
                        <a href="" class="btn col col-5 btn-dark animate__animated animate__fadeInLeft" title="Ajouter au Panier">
                            <i class="mdi mdi-cards-heart"></i>
                            Voir la List
                        </a>
                        <button class="btn btn-dark col col-5 animate__animated animate__fadeInRight delCartItem" title="Retirer de la liste" data-pb-storage="compare">
                            <i class="mdi mdi-share"></i>
                            Retirer
                        </button>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="product-modal">
    <div class="modal fade" id="productViewModal" tabindex="-1" aria-labelledby="productViewModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header bg-danger text-light">
            <h6 class="modal-title text-light" id="productViewModalLabel"><i class="mdi mdi-check"></i>&nbsp; Product Added Successful To Your Wishlist</h6>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body p-3">
            
          </div>
        </div>
      </div>
    </div>
  </div>

  