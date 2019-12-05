(function($){

    const btnEvent = $('.btn__event');
    const btnGetInvolved = $('.btn__getinvolved');
    const eventMenu = $('.menu__event');
    const getInvolvedMenu = $('.menu__getinvolved');
    // const hamburgerMe

    btnEvent.on('click', function(event){
        event.preventDefault();
        $(eventMenu).slideToggle(function(){
            $(eventMenu).focus();
        });
    });
    // $(eventMenu).blur(function(){
    //     $(eventMenu).slideToggle();
    //     console.log('blurred');
    // });
    btnGetInvolved.on('click', function(event){
        event.preventDefault();
        $(getInvolvedMenu).slideToggle();
    })
})(jQuery);