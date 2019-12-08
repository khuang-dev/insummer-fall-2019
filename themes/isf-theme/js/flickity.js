document.addEventListener('DOMContentLoaded', function () {
    
    //Flickity script
    const elem = document.querySelector('.main-carousel');
    const flkty = new Flickity(elem, {
        cellAlign: 'left',
        wrapAround: true,
        freeScroll: false,
        autoPlay: false,
        pageDots: true
    });
});