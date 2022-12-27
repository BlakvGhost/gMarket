<meta charset="UTF-8"/>
<link rel="icon" href="{{ asset('logo.png')}}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="{{ asset('vendors/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/owl/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/fa/all.min.css')}} ">
    <link rel="stylesheet" href="{{ asset('vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{ asset('vendors/animate/animate.css')}}">
    <link rel="stylesheet" href="{{ asset('vendors/toastr/toastr.min.css')}}">
    <link rel="stylesheet" href="{{ asset('vendors/slick-1.8.1/slick/slick-theme.css')}}">
    <link rel="stylesheet" href="{{ asset('vendors/swiper/package/swiper-bundle.min.css')}}">
    <script type="text/javascript" src="{{ asset('vendors/jquery/jquery.js')}}" charset="utf-8"></script>
    <script type="text/javascript" src="{{ asset('vendors/bootstrap/bootstrap.min.js')}}" charset="utf-8"></script>
    <script type="text/javascript" src="{{ asset('vendors/owl/owl.carousel.min.js')}}" charset="utf-8"></script>
    <script type="text/javascript" src="{{ asset('vendors/slick-1.8.1/slick/slick.min.js')}}" charset="utf-8"></script>
    <script type="text/javascript" src="{{ asset('vendors/swiper/package/swiper-bundle.min.js')}}" charset="utf-8"></script>
    <script src="{{ asset('vendors/fv/fjs.init.js') }}" charset="utf-8" type="module"></script>
    <script src="{{ asset('js/app.js') }}" charset="utf-8" async></script>
    <script src="{{ asset('js/fillmodal.js') }}" charset="utf-8" async></script>
    <script src="{{ asset('js/form.js') }}" charset="utf-8" async></script>
    <script>
      let Utils = (jQuery, {});
      $(window).load(function(){
        $('#PageLoader').fadeOut('2000');
        if (sessionStorage.getItem('newsletterHideModal') === 'true'){
          $('#newsletter-modal').detach();
        }
        $('.launchModal').click();
        $('#modalCheck').click(function (){
            if ($(this).is('input:checked')){
                sessionStorage.setItem('newsletterHideModal',true);
            }else {
                sessionStorage.setItem('newsletterHideModal',false);
            }
        });
      })
    </script>
    <style>
        @import "{{ asset('base.css') }}";
    </style>