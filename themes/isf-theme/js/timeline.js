(function ($) {
    $(function(){

    
    
const timeline = $('.timeline');
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

function clearTimeline(){
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
}
function originalFontSize(){
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

yearBtn.on('click', function(e){
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
            console.log(month);
            if (month === 0) {
                january.append('<article class="timeline-single-post"><img src=' + value.acf.event_image + '><p>' + value.title.rendered + '</p></article>');
                $('.jan-font').addClass('font-change');
            }
            if (month === 1) {
                february.append('<article class="timeline-single-post"><img src=' + value.acf.event_image + '><p>' + value.title.rendered + '</p></article>');
                $('.feb-font').addClass('font-change');
            }
            if (month === 2) {
                march.append('<article class="timeline-single-post"><img src=' + value.acf.event_image + '><p>' + value.title.rendered + '</p></article>');
                $('.mar-font').addClass('font-change');
            }
            if (month === 3) {
                april.append('<article class="timeline-single-post"><img src=' + value.acf.event_image + '><p>' + value.title.rendered + '</p></article>');
                $('.apr-font').addClass('font-change');
            }
            if (month === 4) {
                may.append('<article class="timeline-single-post"><img src=' + value.acf.event_image + '><p>' + value.title.rendered + '</p></article>');
                $('.may-font').addClass('font-change');
            }
            if (month === 5) {
                june.append('<article class="timeline-single-post"><img src=' + value.acf.event_image + '><p>' + value.title.rendered + '</p></article>');
                $('.jun-font').addClass('font-change')
            }
            if (month === 6) {
                july.append('<article class="timeline-single-post"><img src=' + value.acf.event_image + '><p>' + value.title.rendered + '</p></article>');
                $('.jul-font').addClass('font-change');
            }
            if (month === 7) {
                august.append('<article class="timeline-single-post"><img src=' + value.acf.event_image + '><p>' + value.title.rendered + '</p></article>');
                $('.aug-font').addClass('font-change');
            }
            if (month === 8) {
                september.append('<article class="timeline-single-post"><img src=' + value.acf.event_image + '><p>' + value.title.rendered + '</p></article>');
                $('.sep-font').addClass('font-change');
            }
            if (month === 9) {
                october.append('<article class="timeline-single-post"><img src=' + value.acf.event_image + '><p>' + value.title.rendered + '</p></article>');
                $('.oct-font').addClass('font-change');
            }
            if (month === 10) {
                november.append('<article class="timeline-single-post"><img src=' + value.acf.event_image + '><p>' + value.title.rendered + '</p></article>');
                $('.nov-font').addClass('font-change');
            }
            if (month === 11) {
                december.append('<article class="timeline-single-post"><img src=' + value.acf.event_image + '><p>' + value.title.rendered + '</p></article>');
                $('.dec-font').addClass('font-change');
                }
    })
    })
})
$(window).on('scroll', function(){
    const timelineOffset = $('.history-media').offset().top;
    const timelineOuterHeight = $('.history-media').outerHeight();

    if (window.scrollY > (timelineOffset + timelineOuterHeight)) {
        // console.log('test')
        $('.timeline-nav').css('display', 'flex');
    } else {
        $('.timeline-nav').css('display', 'none');
    }
})

    $.each(yearBtnMobile, function(index, value){
        if ($(value).text() == '') {
            console.log('noborder')
            yearBtnMobile.css('border', 'none');
            return false;
        } else {
            console.log('border')
            yearBtnMobile.css('border', '1px solid rgb(190, 190, 190)');
            return true;
        }
    })



})// end of doc ready

})(jQuery);