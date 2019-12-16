
(function($){

    $(function(){

        $('.fp-main-carousel').flickity({
            // options
            cellAlign: 'left',
            wrapAround: true,
            freeScroll: false,
            autoPlay: true,
            pageDots: true,
            adaptiveHeight: true,
            prevNextButton: false

        });

        $('.festival-gallery .main-carousel').flickity({
            // options
            cellAlign: 'left',
            wrapAround: true,
            freeScroll: false,
            autoPlay: false,
            pageDots: false,
            adaptiveHeight: true,
            prevNextButton: true
        });
    })// end of doc ready

})(jQuery)
