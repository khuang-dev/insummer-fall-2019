(function ($) {
    $(document).ready(function () {

        const btnSearchMobile = $('.btn__search-mobile');
        const btnSearchDesktop = $('.btn__search-desktop');
        const searchToggle = $('.search-toggle');
        const searchbarMobile = $('.search__mobile');
        const searchbarDesktop = $('.search__desktop');
        const searchField = $('.search-field');

        //Mobile Search
        btnSearchMobile.on('click', function (event) {
            event.preventDefault();
            if (!btnSearchMobile.hasClass('search-active')) {
                searchToggle.toggle();
                searchbarMobile.animate({
                    width: 'toggle'
                }, 400, function () {
                    searchField.focus();
                    btnSearchMobile.addClass('search-active');
                });
            }
        });

        //Desktop Search
        btnSearchDesktop.on('click', function (event) {
            event.preventDefault();
            console.log('open search');
            if (!btnSearchDesktop.hasClass('search-active')) {
                searchbarDesktop.animate({
                    width: 'toggle'
                }, 400, function () {
                    searchField.focus();
                    btnSearchDesktop.addClass('search-active');
                });
            }
        });

        //Search Blur
        searchField.on('blur', function () {
            console.log('blur');

            if (btnSearchMobile.hasClass('search-active')) {
                searchToggle.toggle();
                searchbarMobile.animate({
                    width: 'toggle'
                }, 400, function () {
                    btnSearchMobile.removeClass('search-active');
                });
            }
            if (btnSearchDesktop.hasClass('search-active')) {

                searchbarDesktop.animate({
                    width: 'toggle'
                }, 400, function () {
                    btnSearchDesktop.removeClass('search-active');
                });
            }
        });
    }); // end of doc ready
})(jQuery);