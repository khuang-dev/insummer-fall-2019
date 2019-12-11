(function($){

    //new quote
    $('').on('click', function(){
        
        $.ajax({
            method: "GET",
            url: window.qod_vars.rest_url + '/wp/v2/posts?filter[orderby]=rand&filter[posts_per_page]=1'
        })
        .done(function(data) {
            //empty
            $('').empty();
            //append
            $('').append('<p>' + data[0].content.rendered + '</p>');
            if (data[0]._qod_quote_source === "") {
                $('.entry-meta').append('<h2>' + data[0].title.rendered + '</h2>');
            } else if (data[0]._qod_quote_source_url === "") {
                $('.entry-meta').append('<h2>' + data[0].title.rendered + '<span class="source">' + ', ' + data[0]._qod_quote_source + '</span>'+'</h2>');
            } else {
                $('.entry-meta').append('<h2>' + data[0].title.rendered + '<span class="source">' + ', <a href="' + data[0]._qod_quote_source_url + '">' + data[0]._qod_quote_source + '</a>'+'</span>'+'</h2>')
            }
        })
        .fail(function(error){
            alert('');
    });
    });

})(Jquery);