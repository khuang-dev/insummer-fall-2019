(function($){

    const btnEvent = $('.btn__event');
    const btnGetInvolved = $('.btn__getinvolved');
    const btnHamburger = $('.icon__hamburger');
    const btnClose = $('.fa-times');
    const menuEvent = $('.menu__event');
    const menuGetInvolved = $('.menu__getinvolved');
    const menuTitleEvent = $('.menu__event-wrapper h3')
    const menuTitleGetInvolved = $('.menu__getinvolved-wrapper h3');
    const menuHamburger = $('.menu__hamburger');

    btnEvent.on('click', function(event){
        event.preventDefault();
        menuTitleEvent.css('font-weight', '600');
        menuEvent.toggle();
        $('.menu-overlay-event').show();
    });

    $(document).on('click', '.menu-overlay-event', function(){
        removeActiveEvent();
    });

    btnGetInvolved.on('click', function(event){
        event.preventDefault();
        menuTitleGetInvolved.css('font-weight', '600');
        menuGetInvolved.toggle();
        $('.menu-overlay-getinvolved').show();

    });

    $(document).on('click', '.menu-overlay-getinvolved', function(){
        removeActiveGetInvolved();
    });

    btnHamburger.on('click', function(event){
        event.preventDefault();
        menuHamburger.toggle(200);
        $('.menu-overlay-hamburger').show();

    //     if( $('.menu-overlay-getinvolved').length > 0 ) {
    //         removeActiveGetInvolved();
    //     }

    //     if( $('.menu-overlay-event').length > 0 ) {
    //         removeActiveEvent();
    //     }

    //     $('.site').prepend('<div class="menu-overlay-hamburger"></div>');
    });
    btnClose.on('click', function(event){
        event.preventDefault();
        menuHamburger.toggle();
        $('.menu-overlay-hamburger').hide();
    })

    $(document).on('click', '.menu-overlay-hamburger', function(){
        menuHamburger.toggle();
        $('.menu-overlay-hamburger').hide();
    });

    function removeActiveGetInvolved() {
        menuGetInvolved.toggle();
        menuTitleGetInvolved.css('font-weight', '400');
        $('.menu-overlay-getinvolved').hide();
    }

    function removeActiveEvent() {
        menuEvent.toggle();
        menuTitleEvent.css('font-weight', '400');
        $('.menu-overlay-event').hide();
    }

})(jQuery);