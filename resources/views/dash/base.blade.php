<!DOCTYPE html>
<html lang="fr">
  <head>
    <script src="{{ asset('vendors/tinymce/tinymce.min.js') }}" charset="utf-8"></script>
    @include('base.meta')
    <title>@yield('title') - Market</title>
    <script type="text/javascript" defer>
      tinymce.init({
          selector: '#editor',
      });
  </script>
</head>
  <body class="" style="background-color: var(--color-background-mute)">
    <x-header></x-header>
        <section class="container-js">
            <div class="row row-cols-2 my-4">
              <aside class="col col-3 zd">
                @include('dash.sidebar')
              </aside>
              <main class="col col-9">
                @yield('dash.main')
              </main>
            </div>
        </section>
  </body>
  @yield('script')
</html>