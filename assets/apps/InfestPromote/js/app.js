$(document).ready(function () {
    init();

});

function init(params) {
    var url = BASE_URL + "InfestPromote/monitor/";
    $.post(url).done(function (data) {
        $('#container').html(data);
    });
}

function search() {
    let qy = document.getElementById("search-in").value;
    const result = getData(qy, BASE_PATH+"core", function (data) {
        console.log('wait ', data);
    });

    let decoded = JSON.parse(result);

    showResult(decoded);
}

function createTbody(monitorStatus) {
    let list="";
    for (var x = 0; x < monitorStatus.length; x++) {
        console.log('x :', x);
        list += "<tr>";
        list += '<td scope="row">';
        list += '<div class="media align-items-center">';
        list += '<div class="media-body">';
        list += '<span class="mb-0 text-sm">' + monitorStatus[x]['id'] + '</span>';
        list += '</div>';
        list += '</div>';
        list += '</td>';
        var username = monitorStatus[x]['username'];
        list += '<th scope="row" class="name">';
        list += '<div class="media align-items-center">';
        list += '<div class="media-body">';
        list += '<span class="mb-0 text-sm">';
        list += '<a href=\"https://www.instagram.com/' + username + "/\" target=\"_blank\">" + username;
        list += '</span>';
        list += '</div>';
        list += '</div>';
        list += '</th>';

        if (monitorStatus[x]['posted']) {
            var shortcode = monitorStatus[x]['shortcode'];
            var postTime = monitorStatus[x]['postTime'];


            list += '<td><span class="badge badge-dot mr-4">';
            list += '<i class="bg-success"></i> completed</span></td>';


            list += "<td>" + '<div class="d-flex align-items-center">' + postTime + '</div>' + "</td>";
            list += '<td><div class="d-flex align-items-center">';
            list += '<a href=\"https://www.instagram.com/p/"' + shortcode + "/\" target=\"_blank\">https://www.instagram.com/p/" + shortcode + "/</div></td>";
        } else {
            list += '<td><span class="badge badge-dot mr-4">';
            list += '<i class="bg-warning"></i> pending</span></td>';

            list += '<td><div class="d-flex align-items-center"> - </div></td>';
            list += '<td><div class="d-flex align-items-center"> - </div></td>';
        }
        list += "</tr>\n";
    }
    return list;
}

function showResult(data) {
    let tbody = createTbody(data["monitorStatus"]);
    document.querySelector("#list tbody").innerHTML = tbody;
    document.getElementById("list").hidden = false;

}

function menu(menu){
    var url = BASE_URL + "InfestPromote/"+menu.dataset.menu;
    $.post(url).done(function (data) {
        $('#container').html(data);
    });

    document.querySelector("#menu li.active").classList.remove('active');
    document.querySelector("#menu a.active").classList.remove('active');

    menu.classList.add('active');
    menu.parentElement.classList.add('active');
}