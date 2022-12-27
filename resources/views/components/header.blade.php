<header class="">
    <style scoped>
        .announce-group-list:hover {
            background-color: var(--vt-c-white-soft);
            border-radius: 10px;
            }
        .navbar-brand {font-size: inherit!important;}
    </style>
      <div class="w-100">
      <nav class="navbar justify-content-between container-js" style="background-color: var(--color-background-mute);height: 40px;">
        <div class="overflow-hidden h-100" style="width: 30%">
          <div class="container-fluid h-100">
            <div class="row m-0 announce-group h-100 flex-nowrap align-items-center">
              @foreach ($annonces as $annonce)
                <div class="col col-12 overflow-hidden nav-item announce-group-list text-center p-0">
                    <a href="javascript:void(0)" class="nav-link text-black" style="white-space: nowrap">
                    <i class="mdi mdi-newspaper"></i> &nbsp;
                    <span> {{ $annonce->title }}</span>
                    </a>
                </div>
              @endforeach
            </div>
          </div>
        </div>
        <div class="container-fl" style="width: 35%">
          <div class="row row-cols-4">
            <div class="dropdown nav-item col">
              <a href="javascript:void(0)" class="link active dropdown-toggle" role="button" data-bs-toggle="dropdown"
                 aria-haspopup="true" aria-expanded="false" id="devise">
                <i class="fa fa-flag-usa"></i>
                 &nbsp; USD</a>
              <div class="dropdown-menu" aria-labelledby="devise">
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </div>
            <div class="dropdown nav-item col">
              <a href="javascript:void(0)" class="link active dropdown-toggle" role="button" data-bs-toggle="dropdown"
                 aria-haspopup="true" aria-expanded="false" id="lang">
                English </a>
              <div class="dropdown-menu" aria-labelledby="lang">
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </div>
            <div class="nav-item col">
              <a href="{{ route('wishlist') }}" class="link active" role="button"> Wishlist(<small id="printWishlistTotal"></small>)</a>
            </div>
            <div class="nav-item col">
              <a href="javascript:void(0)" class="link active" role="button"> Compare(<small id="printCompareTotal"></small>)</a>
            </div>
          </div>
        </div>
      </nav>
      <nav class="navbar justify-content-between container-js py-3 bg-white">
        <div class="w-25">
          <a href="javascript:void(0)" class="nav-link" style="height: 50px;width: 200px">
            <img src="/logo.png" alt="logo de market" class="full">
          </a>
        </div>
        <div class="w-75 row justify-content-center">
          <div class="col col-7">
            <form action="" class="d-inline-flex rounded-pill border overflow-hidden">
              <input type="text" class="form-control border-0" placeholder="Search our product">
              <select name="categorie" id="" class="form-select border-0 border-start">
                <option>All Category</option>
                @foreach ($categories as $item)
                <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
              <button type="submit" class="btn btn-dark rounded-pill d-inline-flex">
                <i class="fas fa-search align-self-center"></i>&nbsp;
                <span>Search</span>
              </button>
            </form>
          </div>
          <div class="col col-auto" id="sec2haut">
            <div class="nav-item d-inline-flex mx-2">
              <div class="align-self-center fw-bold">
                  <div class="rounded-circle border-2 border text-center border-dark" style="height: 40px; width:40px">
                        <i class="mdi mdi-phone mdi-24px align-middle"></i>
                  </div>
              </div>
              <div class="text-center mx-1">
                <small class="text-danger fw-bold">WhatsApp</small>
                <small class="d-block">+229 95 1810 19</small>
              </div>
            </div>
            <div class="nav-item d-inline-flex mx-2 position-relative" id="cart_div">
              <div class="text-center mx-1 align-self-center">
                <small class="">Cart</small>
              </div>
              <div class="align-self-center fw-bold" data-bs-toggle="collapse" data-bs-target="#cart"
              aria-haspopup="true" aria-expanded="false" id="">
                <i class="mdi mdi-cart-outline mdi-24px"></i>
              </div>
              <div class="badge rounded-circle border bg-light text-dark position-absolute top-0" style="right: -20px">
                <small class="fw-bold" id="printCartTotal"></small>
              </div>
              <div class="collapse bg-light p-2 border position-absolute top-100 zd-7" id="cart" style="left: -100%">
                <div class="my-2">
                  <ul class="list-group" id="printCartList">

                  </ul>
                  <h6 class="link text-danger my-2">Total: <span id="printCartTotalPrice" class="text-danger"></span> FCFA</h6>
                  <div class="my-3 text-center">
                    <a href="{{ route('cart') }}" class="btn btn-dark">Shop Now</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </nav>
      <nav class="navbar justify-content-between container-js bg-danger zd-6" id="static-header">
        <div class="d-flex">
          <div class="navbar-brand align-self-center">
            <button class="btn btn-dark rounded-pill" data-bs-toggle="collapse" data-bs-target="#sidebarUp">
              <i class="mdi mdi-menu"></i>
              &nbsp; SHOP CATEGORY
            </button>
          </div>
          <div class="navbar-brand">
            <a href="/" class="nav-link text-light fw-normal">Home</a>
          </div>
          <div class="navbar-brand">
            <a href="javascript:void(0)" class="nav-link text-light">Brands</a>
          </div>
          <div class="navbar-brand">
            <a href="javascript:void(0)" class="nav-link text-light">Offers</a>
          </div>
          <div class="navbar-brand">
            <a href="javascript:void(0)" class="nav-link text-light">All Collection</a>
          </div>
          <div class="navbar-brand dropdown">
            <a href="javascript:void(0)" class="nav-link text-light dropdown-toggle" data-bs-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false" id="more">More</a>
            <div class="dropdown-menu" aria-labelledby="more">
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </div>
        </div>
        @auth
        <div class="navbar-brand">
          <a href="{{ route('dash.default') }}" class="btn btn-dark rounded-pill">
             <i class="mdi mdi-account-outline"></i>
             Dashboard
          </a>
        </div>
        @else
        <div class="navbar-brand dropdown">
          <a href="javascript:void(0)" class="btn btn-dark rounded-pill" data-bs-toggle="dropdown"
             aria-haspopup="true" aria-expanded="false" id="account">
             <i class="mdi mdi-account-outline"></i>
             Account
          </a>
          <div class="dropdown-menu bg-light p-2 border" aria-labelledby="account">
              <div class="my-2 w-100">
                <a href="{{ route('register') }}" role="button" class="btn btn-danger w-100">
                  <i class="mdi mdi-account-outline"></i>
                  Inscription
                </a>
              </div>
              <div class="my-2 w-100">
                <a href="{{ route('login') }}" role="button" class="btn btn-danger w-100">
                  <i class="mdi mdi-security-account"></i>
                  Connexion
                </a>
              </div>
          </div>
      </div>
        @endauth
      </nav>
      </div>
</header>
<script>
    $(".announce-group").owlCarousel({
      dots: false,
      items: 1,
      autoplay: true,
      autoplaySpeed: 1000,
      stopOnHover: true,
    });
</script>