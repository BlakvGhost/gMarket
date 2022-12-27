
jQuery(function() {
    (!function(){
        "use strict"
    
        const form = (jQuery, {
            
            init: function() {
                this.passwordVisibility();
                this.ifEmailExist();

                let $y = $('#specification-group')
                let $_y = $('.specification-item').eq(0);

                $('#createMoreSpe').on('click', function() {
                    let $__y = $_y.clone();

                    $y.append($__y);

                    $__y.find('.delSpForm').on('click', function() {

                        $(this).parent().detach();
                    })
                });
                
            },
            passwordVisibility: function() {
                $('.password-visible').each(function() {

                    $(this).on('click', function() {
                        let $parent = $(this).prev('input');

                        if ($parent.is(':password')){                            
                            $parent.attr('type', 'text');
                            $(this).children('i').removeClass('mdi-eye-outline').addClass('mdi-eye-off-outline');
                        }else{
                            $parent.attr('type', 'password');
                            $(this).children('i').addClass('mdi-eye-outline').removeClass('mdi-eye-off-outline');
                        }
                    })                    
                })
            },
            ifEmailExist: function() {
                let $elt = $('#userEmail');

                $elt.on('change', function() {
                    
                    let _y = $(this).val().trim();

                    if (_y.length > 0) {
                        $.ajax({
                            url: '/ajax-verify-email',
                            data: {'email': _y},
                            success: function(e) {
                                Utils.formUserCheckFunction(e, $elt);                                
                            },
                        })
                    }
                })
            }
        }).init();
    }())
})