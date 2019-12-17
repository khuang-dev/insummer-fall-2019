(function($){
    const currentPage=getPath(window.location.pathname);

function getPath(thepath){
    thepath=thepath.replace('/isf/','');
    thepath=thepath.replace('/','');
    return thepath;

}
console.log(currentPage);
if(currentPage=='year-round'){
    $('.past-event-container').appendTo('.entry-content');
}
    
})(jQuery);