function getData(hashtag,uri,list) {
    let data = {'data':list};

    if (!(hashtag === "")) {
        $('#main-list-panel').hide();
        $('#loading-list-panel').show();
        const jqXHR = $.ajax({
            url: uri + '/InfestPromote/php/bvfetchjson.php?hashtag=' + hashtag,
            async: false,
            type: "POST",
            data:data,
            dataType: "json"
        });
        return jqXHR.responseText;
    }
}