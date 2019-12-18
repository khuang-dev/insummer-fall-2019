(function ($) {

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

    //Template 
    function buildEventMarkup(data) {
        let htmlTemplate = '';
        $.each(data, function (key, value) {
            console.log(value);
            const date = new Date(value.acf.event_date);
            const month = getMonthName(date.getMonth());
            const day = date.getDate();

            htmlTemplate += `
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

    //Category filter

    $('.category-all-btn').on('click', function () {
        $('.category-btn').removeClass('category-active');
        $('.category-all-btn').addClass('category-active');

        $.ajax({
            method: 'GET',
            url: window.isf_vars.rest_url + 'wp/v2/isf_event'
        })
            .done(function (data) {
                console.log(data)
                $('#content-output-isf').empty();
                $('#content-output-isfplus').empty();
                const isfOutput = buildEventMarkup(data);
                $('#content-output-isf').append(isfOutput);
            })
    })
    $('.category-all-btn-yearround').on('click', function () {
        $('.category-btn').removeClass('category-archive');
        $('category-all-btn-yearround').addClass('category-active');
        $.ajax({
            method: 'GET',
            url: window.isf_vars.rest_url + 'wp/v2/isf_event?ISF_plus=19'
        })
            .done(function (data) {
                console.log(data)
                if ($('#content-output-isf').length > 0) {
                    $('#content-output-isf').empty();
                }

                $('#content-output-isfplus').empty();
                const isfOutput = buildEventMarkup(data);
                $('#content-output-isfplus').append(isfOutput);

            })
    })
    $('.category-btn').on('click', function (e) {
        $('.category-btn').removeClass('category-active');
        $('.category-all-btn').removeClass('category-active');
        $(e.target).addClass('category-active');

        if ($('#content-output-isf').length > 0) {

            $.ajax({
                method: 'GET',
                url: window.isf_vars.rest_url + 'wp/v2/isf_event?event-taxonomy=' + e.target.value + '&ISF_plus=18',

            })
                .done(function (data) {
                    console.log(data);

                    $('#content-output-isf').empty();

                    if (data.length == 0) {
                        $('.no-post').show();
                    }
                    else {
                        $('.no-post').hide();
                        const isfOutput = buildEventMarkup(data);
                        $('#content-output-isf').append(isfOutput);
                    }


                })
                .fail(function () {
                    alert('an error has occurred');
                })
        }


        if ($('#content-output-isfplus').length > 0) {
            $.ajax({
                method: 'GET',
                url: window.isf_vars.rest_url + 'wp/v2/isf_event?event-taxonomy=' + e.target.value + '&ISF_plus=19'
            })
                .done(function (data) {
                    $('#content-output-isfplus').empty();
                    if (data.length > 0) {
                        $('.isf-plus-description').show();
                    } else {
                        console.log(data)
                        $('.isf-plus-description').hide();
                    }
                    if (data.length == 0) {
                        $('.no-post').show();
                    } else {
                        $('.no-post').hide();
                        const isfOutput = buildEventMarkup(data);
                        $('#content-output-isfplus').append(isfOutput);
                    }
                })

                .fail(function () {
                    alert('an error has occurred');
                })
        }
    })
})(jQuery);