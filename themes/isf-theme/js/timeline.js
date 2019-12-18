(function ($) {

    $(function () {

        // VARIABLES 
        const timelineMobile = $('.timeline-mobile');
        const january = $('.january');
        const february = $('.february');
        const march = $('.march');
        const april = $('.april');
        const may = $('.may');
        const june = $('.june');
        const july = $('.july');
        const august = $('.august');
        const september = $('.september');
        const october = $('.october');
        const november = $('.november');
        const december = $('.december');
        const yearBtn = $('.year-btn');
        const yearBtnMobile = $('.year-btn-mobile');

        //FUNCTIONS 
        function clearTimeline() {
            january.empty();
            february.empty();
            march.empty();
            april.empty();
            may.empty();
            june.empty();
            july.empty();
            august.empty();
            september.empty();
            october.empty();
            november.empty();
            december.empty();
            $('.timeline-bullet-left').hide();
            $('.timeline-bullet-right').hide();
        }
        function getMonthName(month) {
            const months = [
                'January', 
                'February', 
                'March', 
                'April',
                'May',
                'June',
                'July',
                'August',
                'September',
                'October',
                'November',
                'December',
            ];
            return months[month];
        }
        function originalFontSize() {
            $('.jan-font').removeClass('font-change');
            $('.feb-font').removeClass('font-change');
            $('.mar-font').removeClass('font-change');
            $('.apr-font').removeClass('font-change');
            $('.may-font').removeClass('font-change');
            $('.jun-font').removeClass('font-change');
            $('.jul-font').removeClass('font-change');
            $('.aug-font').removeClass('font-change');
            $('.sep-font').removeClass('font-change');
            $('.oct-font').removeClass('font-change');
            $('.nov-font').removeClass('font-change');
            $('.dec-font').removeClass('font-change');

        }

        // DESKTOP TIMELINE 
        yearBtn.on('click', function (e) {
            const year = e.target.innerText;

            $.ajax({
                method: 'GET',
                url: window.isf_vars.rest_url + 'wp/v2/isf_event?filter[meta_key]=event_date&filter[meta_value]=' + year + '&filter[meta_compare]=LIKE'

            })
                .done(function (data) {
                    clearTimeline();
                    originalFontSize();
                    $.each(data, function (key, value) {
                        let date = new Date(value.acf.event_date);
                        let month = date.getMonth();
                        if (month === 0) {
                            january.append('<article class="timeline-single-post"><img src=' + value.acf.event_image + '><p>' + value.title.rendered + '</p></article>');
                            $('.jan-font').addClass('font-change');
                            $('.jan-bullet').show();
                        }
                        if (month === 1) {
                            february.append('<article class="timeline-single-post"><img src=' + value.acf.event_image + '><p>' + value.title.rendered + '</p></article>');
                            $('.feb-font').addClass('font-change');
                            $('.feb-bullet').show();
                        }
                        if (month === 2) {
                            march.append('<article class="timeline-single-post"><img src=' + value.acf.event_image + '><p>' + value.title.rendered + '</p></article>');
                            $('.mar-font').addClass('font-change');
                            $('.mar-bullet').show();
                        }
                        if (month === 3) {
                            april.append('<article class="timeline-single-post"><img src=' + value.acf.event_image + '><p>' + value.title.rendered + '</p></article>');
                            $('.apr-font').addClass('font-change');
                            $('.apr-bullet').show();
                        }
                        if (month === 4) {
                            may.append('<article class="timeline-single-post"><img src=' + value.acf.event_image + '><p>' + value.title.rendered + '</p></article>');
                            $('.may-font').addClass('font-change');
                            $('.may-bullet').show();
                        }
                        if (month === 5) {
                            june.append('<article class="timeline-single-post"><img src=' + value.acf.event_image + '><p>' + value.title.rendered + '</p></article>');
                            $('.jun-font').addClass('font-change')
                            $('.jun-bullet').show();
                        }
                        if (month === 6) {
                            july.append('<article class="timeline-single-post"><img src=' + value.acf.event_image + '><p>' + value.title.rendered + '</p></article>');
                            $('.jul-font').addClass('font-change');
                            $('.jul-bullet').show();
                        }
                        if (month === 7) {
                            august.append('<article class="timeline-single-post"><img src=' + value.acf.event_image + '><p>' + value.title.rendered + '</p></article>');
                            $('.aug-font').addClass('font-change');
                            $('.aug-bullet').show();
                        }
                        if (month === 8) {
                            september.append('<article class="timeline-single-post"><img src=' + value.acf.event_image + '><p>' + value.title.rendered + '</p></article>');
                            $('.sep-font').addClass('font-change');
                            $('.sep-bullet').show();
                        }
                        if (month === 9) {
                            october.append('<article class="timeline-single-post"><img src=' + value.acf.event_image + '><p>' + value.title.rendered + '</p></article>');
                            $('.oct-font').addClass('font-change');
                            $('.oct-bullet').show();
                        }
                        if (month === 10) {
                            november.append('<article class="timeline-single-post"><img src=' + value.acf.event_image + '><p>' + value.title.rendered + '</p></article>');
                            $('.nov-font').addClass('font-change');
                            $('.nov-bullet').show();
                        }
                        if (month === 11) {
                            december.append('<article class="timeline-single-post"><img src=' + value.acf.event_image + '><p>' + value.title.rendered + '</p></article>');
                            $('.dec-font').addClass('font-change');
                            $('.dec-bullet').show();
                        }
                    })
                })
        })
        // DESKTOP SCROLL NAV
        $(window).on('scroll', function () {
            const timelineOffset = $('.history-media').offset().top;
            const timelineOuterHeight = $('.history-media').outerHeight();

            if (window.scrollY > (timelineOffset + timelineOuterHeight)) {
                $('.timeline-nav').css('display', 'flex');
            } else {
                $('.timeline-nav').css('display', 'none');
            }
        })

        // MOBILE TIMELINE 
        yearBtnMobile.on('click', function (e) {
            yearBtnMobile.toggle(500);
            const year = e.target.innerText;
            timelineMobile.empty();
            $.ajax({
                method: 'GET',
                url: window.isf_vars.rest_url + 'wp/v2/isf_event?filter[meta_key]=event_date&filter[meta_value]=' + year + '&filter[meta_compare]=LIKE'

            })
                .done(function (data) {
                    $('.timeline-mobile-year-label').empty();
                    $('.timeline-mobile-year-label').append(year);
                    $.each(data, function (key, value) {
                        const date = new Date(value.acf.event_date);
                        const month = getMonthName(date.getMonth());
                        timelineMobile.append('<div class="timeline-post-title-mobile"><div class="timeline-bullet-mobile"></div><h3 class="month-font-mobile">' + month + '</h3></div><article class="timeline-single-post timeline-post-mobile"><img src=' + value.acf.event_image + '><p>' + value.title.rendered + '</p></article>');
                    })
                })
        })
        $('.timeline-select-title-mobile').on('click', function(){
            yearBtnMobile.toggle(200);
        })

        $.each(yearBtnMobile, function (index, value) {
            if ($(value).text() === '') {
                $(value).css('border', 'none');
            } else {
                $(value).css('color', '1px solid rgb(190, 190, 190)');
            }
        })
    })// end of doc ready

})(jQuery);