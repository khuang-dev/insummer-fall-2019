(function($){
//variables
    const btnEvent = $('.btn__event');
    const btnGetInvolved = $('.btn__getinvolved');
    const btnHamburger = $('.icon__hamburger');
    const btnClose = $('.fa-times');
    const menuEvent = $('.menu__event');
    const menuGetInvolved = $('.menu__getinvolved');
    const menuTitleEvent = $('.menu__event-wrapper h3')
    const menuTitleGetInvolved = $('.menu__getinvolved-wrapper h3');
    const menuHamburger = $('.menu__hamburger');
//event menu
    btnEvent.on('click', function(event){
        event.preventDefault();
        menuTitleEvent.css('font-weight', '600');
        menuEvent.toggle();
        $('.menu-overlay-event').show();
    });
    $(document).on('click', '.menu-overlay-event', function(){
        menuEvent.toggle();
        menuTitleEvent.css('font-weight', '400');
        $('.menu-overlay-event').hide();    
    });
//get involved menu
    btnGetInvolved.on('click', function(event){
        event.preventDefault();
        menuTitleGetInvolved.css('font-weight', '600');
        menuGetInvolved.toggle();
        $('.menu-overlay-getinvolved').show();
    });
    $(document).on('click', '.menu-overlay-getinvolved', function(){
        menuGetInvolved.toggle();
        menuTitleGetInvolved.css('font-weight', '400');
        $('.menu-overlay-getinvolved').hide();    
    });
//hamburger menu
    btnHamburger.on('click', function(event){
        event.preventDefault();
        menuHamburger.toggle(200);
        $('.menu-overlay-hamburger').show();
        menuEvent.hide();
        $('.menu-overlay-event').hide();  
        menuTitleEvent.css('font-weight', '400');
        menuGetInvolved.hide();
        $('.menu-overlay-getinvolved').hide();  
        menuTitleGetInvolved.css('font-weight', '400');

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

})(jQuery);