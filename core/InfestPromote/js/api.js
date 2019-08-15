function getData(x,uri,cb) {
    var hashtag = x;
    console.log('hashtag :', hashtag);
    console.log('uri :', uri);
    if (!(hashtag == "")) {
        $('#main-list-panel').hide();
        $('#loading-list-panel').show();
        var jqXHR=$.ajax({
            url: uri+'/InfestPromote/php/bvfetchjson.php?hashtag=' + hashtag,
            async: false,
        });
        return jqXHR.responseText;

    }
}