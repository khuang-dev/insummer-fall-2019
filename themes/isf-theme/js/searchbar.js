(function ($) {
    const btnSearchMobile = $('.btn__search-mobile');
    const btnSearchDesktop = $('.btn__search-desktop');
    const searchToggle = $('.search-toggle');
    const searchbarMobile = $('.search__mobile');
    const searchbarDesktop = $('.search__desktop');

    btnSearchMobile.on('click', function (event) {
        event.preventDefault();
        searchToggle.toggle();
        searchbarMobile.animate({
            width: 'toggle'
        }), 400, function() {
            searchbarMobile.focus();
        }
    })
    searchbarMobile.on('blur', function(){
        searchToggle.toggle();
        searchbarMobile.animate({
            width: 'toggle'
        }, 400);   
     });

    btnSearchDesktop.on('click', function (event) {
        event.preventDefault();
        searchbarDesktop.animate({
            width: 'toggle'
        }), 400, function() {
            searchbarDesktop.focus();
        }
    })
    searchbarDesktop.on('blur', function(){
        searchbarDesktop.animate({
            width: 'toggle'
        }, 400);   
     });

})(jQuery);