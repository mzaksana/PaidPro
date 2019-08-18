var hashtag = [];

$(document).ready(function () {
    init();
    initHashtag();
});


function init(params) {
    const url = BASE_URL + "InfestPromote/monitor/";
    $.post(url).done(function (data) {
        $('#container').html(data);
    });
}

function initHashtag() {
    const url = BASE_URL + "InfestPromote/getHashtag/";
    $.post(url).done(function (dataBack) {
        console.log("data", dataBack);
        let data = JSON.parse(dataBack);
        for (let i = 0; i < data.length; i++) {
            hashtag.push(data[i]['name']);
        }
        console.log(hashtag);

    });
    console.log(hashtag);
}

function menu(menu){
    const url = BASE_URL + "InfestPromote/" + menu.dataset.menu;
    $.post(url).done(function (data) {
        $('#container').html(data);
    });

    document.querySelector("#menu li.active").classList.remove('active');
    document.querySelector("#menu a.active").classList.remove('active');

    menu.classList.add('active');
    menu.parentElement.classList.add('active');
}

/* Monitoring Function
* */
function search() {

    let qy = document.getElementById("search-in").value;
    let list = document.getElementsByClassName("apply");
    console.log(list);
    let data=[];
    for (let i = 0; i <list.length ; i++) {
        data.push(list[i].getAttribute("data-pos"));
    }
    const result = getData(qy, BASE_PATH+"core",data);
    let decoded = JSON.parse(result);
    console.log(decoded);
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
        let username = monitorStatus[x]['username'];
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
            let shortcode = monitorStatus[x]['shortcode'];
            let postTime = monitorStatus[x]['postTime'];


            list += '<td><span class="badge badge-dot mr-4">';
            list += '<i class="bg-success"></i> completed</span></td>';


            list += "<td>" + '<div class="d-flex align-items-center">' + postTime + '</div>' + "</td>";
            list += '<td><div class="d-flex align-items-center">';
            list += '<a href=\"https://www.instagram.com/p/' + shortcode + '" target=\"_blank\">https://www.instagram.com/p/' + shortcode + '</div></td>';
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
    document.querySelector("#list tbody").innerHTML = createTbody(data["monitorStatus"]);
    document.getElementById("list").hidden = false;

}
// End Monitoring Function

/* Hashtag Function
* */
function addHashtag(node) {
    let input = document.getElementById("newHashtag");
    if(input.value.length!=null && input.value.length !== 0 && input.value.length!==null){
        let url = BASE_URL + "InfestPromote/addHashtag/" + input.value;
        $.post(url).done(function (data) {
            node.nextElementSibling.click();
            let page='<a href="#" class="btn btn-neutral btn-icon list-tag">';
            page+='<span class="btn-inner--text">'+input.value+'</span>';
            page+='</a>';

            $('#hashtag').prepend(page);
            let par=document.querySelector("#add").parentElement;
            par.insertBefore(par.children[0],par.children[2]);
        });
    }
}
// End Hashtag Function

/* Target Function
* */
function addTarget(node) {
    let input = document.getElementById("newTarget");
    if(input.value.length!=null && input.value.length !== 0 && input.value.length!==null){
        let url = BASE_URL + "InfestPromote/addTarget/" + input.value;
        $.post(url).done(function (dataBack) {
            let data = JSON.parse(dataBack)[0];
            console.log(data);
            let page='<div class="col-xl-3 col-lg-6 list-target">';
            page+='<div class="card card-stats mb-4 mb-xl-0 shadow card-target" data-pos="'+data._id+'" onclick="openTarget(this)">';
            page+='<div class="btn card-body">';
            page+='<div class="row">';
            page+='<div class="col">';
            page+='<h5 class="card-title text-uppercase text-muted mb-0">'+data.name+'</h5>';
            page+='<span class="h2 font-weight-bold mb-0">0</span>';
            page+='</div>';
            page+='<div class="col-auto middle-h">';
            page+='<div class="icon icon-shape bg-danger text-white rounded-circle shadow">';
            page+='<i class="fas fa-users"></i>';
            page+='</div></div></div>';
            page+='<p class="mt-3 mb-0 text-muted text-sm">';
            page+='<span class="text-nowrap">Added '+data.time+'</span>';
            page+='</p></div></div></div>';

            $('#target').prepend(page);
            let par=document.getElementById("target");
            par.insertBefore(par.children[0],par.children[2]);
            node.nextElementSibling.click();
        });
    }
}

function openTarget(node) {
    const url = BASE_URL + "InfestPromote/targetList/" + node.getAttribute("data-pos");
    $.post(url).done(function (data) {
        $('#container').html(data);
    });
}

function addUserTarget() {
    let input = document.getElementById("newUserTarget");
    if(input.value.length!=null && input.value.length !== 0 && input.value.length!==null){
        let src=input.value.split(/[\s,]+/);
        let data=[];
        for (let i = 0; i < src.length; i++) {
            if(src[i].length!=null && src[i].length !== 0 && src[i].length!==null){
                data.push(src[i]);
            }
        }
        let url = BASE_URL + "InfestPromote/addUserTarget/"+document.getElementById("targetList").getAttribute("data-pos");
        $.post(url,{data:data}).done(function (dataBack) {
            console.log(dataBack);
        });
    }
}

// End Target Function

/* Special function ---------------------------------------
* */

function autosize(x){
    var el = x;
    setTimeout(function(){
        el.style.cssText = 'height:auto; padding:0';
        // for box-sizing other than "content-box" use:
        // el.style.cssText = '-moz-box-sizing:content-box';
        el.style.cssText = 'height:' + el.scrollHeight + 'px';
    },0);
}

function autocomplete(inp, arr) {
    console.log(document.getElementById("search-in"));
    /*the autocomplete function takes two arguments,
    the text field element and an array of possible autocompleted values:*/
    var currentFocus;
    /*execute a function when someone writes in the text field:*/
    inp.addEventListener("input", function(e) {
        var a, b, i, val = this.value;
        /*close any already open lists of autocompleted values*/
        closeAllLists();
        if (!val) { return false;}
        currentFocus = -1;
        /*create a DIV element that will contain the items (values):*/
        a = document.createElement("DIV");
        a.setAttribute("id", this.id + "autocomplete-list");
        a.setAttribute("class", "autocomplete-items");
        /*append the DIV element as a child of the autocomplete container:*/
        this.parentNode.appendChild(a);
        /*for each item in the array...*/
        for (i = 0; i < arr.length; i++) {
            /*check if the item starts with the same letters as the text field value:*/
            if (arr[i].substr(0, val.length).toUpperCase() === val.toUpperCase()) {
                /*create a DIV element for each matching element:*/
                b = document.createElement("DIV");
                b.setAttribute("class", "list-autocomplate");
                /*make the matching letters bold:*/
                b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
                b.innerHTML += arr[i].substr(val.length);
                /*insert a input field that will hold the current array item's value:*/
                b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
                /*execute a function when someone clicks on the item value (DIV element):*/
                b.addEventListener("click", function(e) {
                    /*insert the value for the autocomplete text field:*/
                    inp.value = this.getElementsByTagName("input")[0].value;
                    /*close the list of autocompleted values,
                    (or any other open lists of autocompleted values:*/
                    closeAllLists();
                });
                a.appendChild(b);
            }
        }
    });
    /*execute a function presses a key on the keyboard:*/
    inp.addEventListener("keydown", function(e) {
        var x = document.getElementById(this.id + "autocomplete-list");
        if (x) x = x.getElementsByTagName("div");
        if (e.keyCode === 40) {
            /*If the arrow DOWN key is pressed,
            increase the currentFocus variable:*/
            currentFocus++;
            /*and and make the current item more visible:*/
            addActive(x);
        } else if (e.keyCode === 38) { //up
            /*If the arrow UP key is pressed,
            decrease the currentFocus variable:*/
            currentFocus--;
            /*and and make the current item more visible:*/
            addActive(x);
        } else if (e.keyCode == 13) {
            /*If the ENTER key is pressed, prevent the form from being submitted,*/
            e.preventDefault();
            if (currentFocus > -1) {
                /*and simulate a click on the "active" item:*/
                if (x) x[currentFocus].click();
            }
        }
    });
    function addActive(x) {
        /*a function to classify an item as "active":*/
        if (!x) return false;
        /*start by removing the "active" class on all items:*/
        removeActive(x);
        if (currentFocus >= x.length) currentFocus = 0;
        if (currentFocus < 0) currentFocus = (x.length - 1);
        /*add class "autocomplete-active":*/
        x[currentFocus].classList.add("autocomplete-active");
    }
    function removeActive(x) {
        /*a function to remove the "active" class from all autocomplete items:*/
        for (var i = 0; i < x.length; i++) {
            x[i].classList.remove("autocomplete-active");
        }
    }
    function closeAllLists(elmnt) {
        /*close all autocomplete lists in the document,
        except the one passed as an argument:*/
        var x = document.getElementsByClassName("autocomplete-items");
        for (var i = 0; i < x.length; i++) {
            if (elmnt != x[i] && elmnt != inp) {
                x[i].parentNode.removeChild(x[i]);
            }
        }
    }
    /*execute a function when someone clicks in the document:*/
    document.addEventListener("click", function (e) {
        closeAllLists(e.target);
    });
}

function login() {
    let form = document.getElementById("login");
    let url = BASE_URL + "InfestPromote/doLogin/";
    $.post({url: url, data: $(form).serialize(), dataType: "json"}).done(function (dataBack) {
        location.reload();
    });
}

function logout() {
    let url = BASE_URL + "InfestPromote/logout/";
    $.post(url).done(function (dataBack) {
        location.reload();
    });
}

function updateVal(node) {
    if (node.getAttribute("data-val") === 0 || node.getAttribute("data-val") == 0) {
        console.log("0");
        node.setAttribute("data-val", 1);
        node.classList.remove('btn-neutral');
        node.classList.add('btn-info');
        node.firstChild.classList.add('text-white');

    } else if (node.getAttribute("data-val") === 1 || node.getAttribute("data-val") == 1) {
        node.setAttribute("data-val", 0);
        node.classList.remove('btn-info');
        node.classList.add('btn-neutral');
        node.firstChild.classList.remove('text-white');
    }else{
        node.setAttribute("data-val", 0);
        node.classList.remove('btn-info');
        node.classList.add('btn-neutral');
        node.firstChild.classList.remove('text-white');
        node.classList.remove("apply");

        $('#hashtag-list').prepend(node);
    }
}

function applyTarget() {
    let target = document.querySelectorAll(".list-target[data-val]");
    for (let i = 0; i <target.length ; i++) {
        if(target[i].getAttribute("data-val")==1){
            target[i].setAttribute("data-val", 2);
            target[i].classList.add("apply");
            $('#hashtag').prepend(target[i]);
        }
    }
}


/* Legendary Function
* */
function scrap() {
    $.post(BASE_URL + "InfestPromote/scrap/"+document.getElementById("targetList").getAttribute("data-pos")).done(function (dataBack) {
        console.log(dataBack);
    });
}