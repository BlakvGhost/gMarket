jQuery(function() {

    let $sidebar = $('#sidebarUp');
    let $cart = $('#cart_div');
    new fJs.Sticky({
        elt: '#static-header',
        callback: function(elt) {
            $(elt).append($sidebar, $cart);
            $sidebar.addClass('position-absolute top-100').css({'width': '250px'}).removeClass('show');
            $cart.addClass('btn btn-dark navbar-brand rounded-pill').removeClass('nav-item');
        },
        fallback: function(elt) {
            $('aside').prepend($sidebar);
            $('#sec2haut').append($cart);
            $cart.removeClass('btn btn-dark navbar-brand rounded-pill').addClass('nav-item');
            $sidebar.removeClass('position-absolute top-100 show').css({'width': ''})
        }
    });

    $('.countdownSrc').each(function (e, item){
        setInterval(function (){
            let countDownDate = new Date($(item).data('ar-countdown')).getTime();
            let now = new Date().getTime();
            let timeleft = countDownDate - now;
            $(item).find('#DayCountDown').text(Math.floor(timeleft / (1000 * 60 * 60 * 24)));
            $(item).find('#HoursCountDown').text(Math.floor((timeleft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)));
            $(item).find('#MinuitCountDown').text(Math.floor((timeleft % (1000 * 60 * 60)) / (1000 * 60)));
            $(item).find('#SecondCountDown').text( Math.floor((timeleft % (1000 * 60)) / 1000));
        },1000);
    })

    $('.rated-bar').each(function(px, link){
        $(this).find('i').slice(0, $(this).data('ar-rate')).addClass('text-warning');
    });
})
