function bvListHead() {
    var head = "<table id=\"table-recplist\" class=\"table table-hover\">";
    head += "<thead>";
    head += "<tr>";
    head += "<th width=\"10%\">Instagram UID</th>";
    head += "<th width=\"25%\">Username</th>";
    head += "<th width=\"15%\">Status</th>";
    head += "<th width=\"15%\">Waktu Posting</th>";
    head += "<th width=\"35%\">Post link</th>";
    head += "</tr>";
    head += "</thead>\n";
    return head;
}

function bvListFoot() {
    return "</table>";
}

function getData(x,uri,cb) {
    var hashtag = x;
    console.log('hashtag :', hashtag);
    console.log('uri :', uri);
    if (!(hashtag == "")) {
        $('#main-list-panel').hide();
        $('#loading-list-panel').show();
        var jqXHR=$.ajax({
            url: uri+'/core/php/bvfetchjson.php?hashtag=' + hashtag,
            async: false,
        });
        return jqXHR.responseText;

    }
}