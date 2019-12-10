(function ($) {
$(document).ready(function() {


    const btnSearchMobile = $('.btn__search-mobile');
    const btnSearchDesktop = $('.btn__search-desktop');
    const searchToggle = $('.search-toggle');
    const searchbarMobile = $('.search__mobile');
    const searchbarDesktop = $('.search__desktop');
    const searchField = $('.search__desktop .search-field');

    console.log(searchField);

    btnSearchMobile.on('click', function (event) {
        event.preventDefault();
        searchToggle.toggle();
        console.log('test');
        searchbarMobile.animate({
            width: 'toggle'
        }), 400, function() {
            searchField.focus();
        }
    });
    
    // searchField.blur(function(){
    //     searchToggle.toggle();
    //     searchbarDesktop.animate({
    //         width: 'toggle'
    //     }, 400); 
    //     console.log(searchbarDesktop);  
    //  });

    btnSearchDesktop.on('click', function (event) {
        event.preventDefault();
        console.log('search clicked')
        // searchbarDesktop.show(400, function() {
        //     console.log('search animated')
        //     searchField.focus();
        // })

        searchbarDesktop.addClass('active');
        searchField.focus();
    })

    searchField.on('blur', function(){
        console.log('search blurred')
        // searchbarDesktop.hide( 400);   
        searchbarDesktop.removeClass('active')
     });


}); // end of doc ready
})(jQuery);