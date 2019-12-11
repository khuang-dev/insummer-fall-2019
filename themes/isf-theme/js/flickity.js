// document.addEventListener('DOMContentLoaded', function () {
    
//     //Flickity script
//     const elem = document.querySelector('.main-carousel');
//     const flkty = new Flickity(elem, {
//         cellAlign: 'left',
//         wrapAround: true,
//         freeScroll: false,
//         autoPlay: true,
//         pageDots: true
//     });
// });

(function($){

    $(function(){

        $('.main-carousel').flickity({
            // options
            cellAlign: 'left',
            wrapAround: true,
            freeScroll: false,
            autoPlay: true,
            pageDots: true
        });
    })// end of doc ready

})(jQuery)
