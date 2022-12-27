<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>@yield('title') - Market</title>
    @include('base.meta')
</head>
  <body class="" style="background-color: var(--color-background-mute)">
    <div id="PageLoader" class="full bg-white zd-8 position-fixed">
      <div class="position-absolute top-50 bottom-50 start-50 end-50">
        <img src="{{ Storage::url('public/ajax-loader.gif') }}"class="">
      </div>
    </div>
    <section id="newsletter-modal">
      <div>
          <button type="button" class="btn btn-primary launchModal d-none" data-bs-toggle="modal"
                  data-bs-target="#staticBackdrop"></button>
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                 tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" style="max-width: 650px;">
                <div class="modal-content rounded-3 p-3"  style="background-image: url({{ Storage::url('public/newsletter-bg.png') }}); background-size:100% 100%">
                  <div class="modal-header position-absolute end-0 top-0" data-bs-dismiss="modal" aria-label="Close">
                      <button type="button" class="btn-close btn-dark rounded-circle" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                      <div class="img-ct col-4 mx-auto my-3" style="max-height: 80px;">
                        <img src="{{ Storage::url('public/newsletter-logo.png') }}" alt="Contact Us">
                      </div>
                      <div class="h4 text-center">"MailChimp form action URL" You can find in tab "Newsletter"</div>
                      <form action="" class="form text-center col-7 mx-auto my-3">
                        <div class="form-group form-group-lg my-2">
                            <input type="text" class="form-control form-control-lg text-center" aria-label="false"
                                   placeholder="Your Email...">
                            <button class="btn btn-dark col-6 mx-auto my-3">Subscribe</button>
                        </div>
                          <div class="form-check form-switch my-3">
                              <input type="checkbox" class="form-check-input ms-0" aria-labelledby="modalCheckLabel"
                                     id="modalCheck">
                              <label for="modalCheck" id="modalCheckLabel" class="form-check-labels">Don't Show This Popup Again</label>
                          </div>
                      </form>
                  </div>
                </div>
              </div>
            </div>
      </div>
  </section>
    <x-header></x-header>
        <section class="container-js">
            <div class="row row-cols-2 my-4">
              <aside class="col col-3 zd">
                <x-sidebar></x-sidebar>
              </aside>
              <main class="col col-9">
                @yield('content')
              </main>
            </div>
        </section>
      @include('base.footer')
  </body>
  @yield('script')
</html>