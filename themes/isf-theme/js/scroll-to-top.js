(function ($) {
    $(document).ready(function () {
        $('#scroll-to-top').click(function() {
            $('html, body').animate({ 
                scrollTop: 0 
            }, 'slow');
            return false;
        })
    }); // end of doc ready
})(jQuery);