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
  // Date filter
  function getMonthName(month) {
    const months = [
        'Jan', // 0
        'Feb', // 1
        'Mar', // 2
        'Apr',
        'May',
        'Jun',
        'Jul',
        'Aug',
        'Sep',
        'Oct',
        'Nov',
        'Dec',
    ];
    return months[month];
}
function buildEventMarkup(data) {
    let htmlTemplate = '';
    $.each(data, function (key, value) {
        console.log('value:');
        console.log(value);
        const date = new Date(value.acf.event_date);
        const month = getMonthName(date.getMonth());
        const day = date.getDate();

        htmlTemplate += `
        <p class="isf-plus-description"><?php echo get_field('isfplus_description');?></p>

           <article class="wrapper__single-event">
               <div class="wrapper__image-event">
                    <img src="${value.acf.event_image}">
                    <div class="thumbnail__date">
                        <p class="thumbnail__date-month">${month}</p>
                        <p class="thumbnail__date-day">${day}</p>
                    </div>
                </div>
                
                <div class="wrapper__info-event">
                    <p class="title__event">${value.title.rendered}</p>
                    <p><?php the_field('event_date'); ?>${value.acf.event_date}</p>
                    <p>${value.acf.event_time[0].start_time} - ${value.acf.event_time[0].end_time}</p>
                </div>
                <div class="wrapper__btn-info">
                        <button class="events-btn">
                        <a href="${value.acf.ticket_button[0].url}">${value.acf.ticket_button[0].label}</a>
                        </button>
                    </div>
                </article>
             `
    })
    return htmlTemplate;
}
$.ajax({
    method: 'GET',
    url: window.isf_vars.rest_url + 'wp/v2/isf_event?ISF_plus=19&per_page=3'
})
    .done(function (data) {
        $('.isf-plus-container1').empty();
        const isfOutput = buildEventMarkup(data);
            $(isfOutput).appendTo('.isf-plus-container1');
    })

    .fail(function () {
        alert('an error has occurred');
    })

    
})(jQuery);