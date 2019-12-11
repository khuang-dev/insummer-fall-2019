(function ($) {
$(document).ready(function() {


    const btnSearchMobile = $('.btn__search-mobile');
    const btnSearchDesktop = $('.btn__search-desktop');
    const searchToggle = $('.search-toggle');
    const searchbarMobile = $('.search__mobile');
    const searchbarDesktop = $('.search__desktop');
    const searchField = $('.search-field');


    btnSearchMobile.on('click', function (event) {
        event.preventDefault();
        searchToggle.toggle();
        searchbarMobile.animate({
            width: 'toggle'
        }, 400, function() {
            searchField.focus();
        });
    });

    searchField.on('blur', function(){
        searchToggle.toggle();
        searchbarMobile.animate({
            width: 'toggle'
        }, 400);
    });
//issue is clicking on search button blurs AND clicks
    btnSearchDesktop.on('click', function (event) {
        event.preventDefault();
        searchbarDesktop.animate({
            width: 'toggle'
        }, 400, function() {
            searchField.focus();
        });
    });

    searchField.on('blur', function(){
        searchbarDesktop.animate({
            width: 'toggle'
        }, 400);
    });


}); // end of doc ready
})(jQuery);