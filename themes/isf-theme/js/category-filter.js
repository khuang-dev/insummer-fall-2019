(function($){

    function getMonthName( month ) {
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
        console.log(data)
        $.each(data, function(key, value){
            const date = new Date(value.acf.event_date);
            const month = getMonthName( date.getMonth() );
            const day = date.getDate();
        
            const htmlTemplate = `
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
                    </article>
                 `

            return htmlTemplate;

        }

    //new quote
    $('.categories-info').on('click', function(e){
        $.ajax({
            method: 'GET',
            url: window.isf_vars.rest_url + 'wp/v2/isf_event?event-taxonomy=' + e.target.value + '&event-type=summer'
        })
        .done(function(data) {
            $('#content-output').empty();
            const htmlTemplate = buildEventMarkup(data);
            $('#content-output').append(htmlTemplate);
        });


        $.ajax({
            method: 'GET',
            url: window.isf_vars.rest_url + 'wp/v2/isf_event?event-taxonomy=' + e.target.value + '&event-type=summer'
        })
        .done(buildEventMarkup);
            
           
						
            // $args = array( 'post_type' => 'isf_event', 'order' => 'ASC', 'posts_per_page' => get_option('posts_per_page'));
            //    $event_posts = get_posts( $args ); 

                    // <div class="event-button">
                    // <button class="event_button">
                    //     <a class="banner__btn-label" href="<?php the_sub_field('event__btn-url');?>"><?php the_sub_field('event__btn-label');?></a>
                    //     </button>

                    // </div>

        
    //     //.fail(function(error){
    });
});


})(jQuery);