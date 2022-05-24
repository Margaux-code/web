function changeColor() {
    if (document.body.style.background == "black") {
        changeToWhite();
    }
    else {
        changeToBlack();
    }
}

function changeToWhite() {
    document.cookie = "couleur=claire; path=/";
    alert(document.cookie);
    var slogan = document.getElementById("slogan");
    var button = document.getElementsByClassName("nav-button");
    var footer = document.getElementById("footer");
    var search_bar = document.getElementById("search-bar");
    var search_button = document.getElementById("searchbutton");
    var table_td = document.getElementsByClassName("tablee_td");
    var table_th = document.getElementsByClassName("table_th");
    var titre = document.getElementsByTagName("h2");

    for (let l = 0; l < titre.length; l++) {
        titre[l].style.color = 'black';
    }

    document.body.style.background = 'white';
    footer.style.color = 'black';
    slogan.style.color = 'rgb(46, 44, 41)';
    search_bar.style.border = '3px solid rgb(148, 148, 148)';
    search_bar.style.background = 'white';
    search_button.style.border = '1px solid rgb(148, 148, 148)';
    search_button.style.background = 'rgb(148, 148, 148)';
    text_accueil.style.color = 'black';

    for (let i = 0; i < table_td.length; i++) {
        table_td[i].style.backgroundColor = 'darkgrey';
        table_td[i].style.color = 'white';
    }

    for (let j = 0; j < table_th.length; j++) {
        table_th[j].style.border = 'border: 1px solid black';
    }


    for (let k = 0; k < button.length; k++) {
        button[k].style.color = 'black';
    }

    
}

function changeToBlack() {
    document.cookie = "couleur=sombre; path=/";


    var slogan = document.getElementById("slogan");
    var button = document.getElementsByClassName("nav-button");
    var footer = document.getElementById("footer");
    var search_bar = document.getElementById("search-bar");
    var search_button = document.getElementById("searchbutton");
    var table_td = document.getElementsByClassName("table_td");
    var table_th = document.getElementsByClassName("table_th");
    var titre = document.getElementsByTagName("h2");

    for (let l = 0; l < titre.length; l++) {
        titre[l].style.color = 'white';
    }
}

    document.body.style.background = 'black';
    footer.style.color = 'white';
    slogan.style.color = 'white';
    search_bar.style.border = '3px solid rgb(28, 28, 28)';
    search_bar.style.background = 'lightgrey';
    search_button.style.border = '1px solid rgb(28, 28, 28)';
    search_button.style.background = 'rgb(28, 28, 28)';
    text_accueil.style.color = 'white';

    for (let i = 0; i < table_td.length; i++) {
        table_td[i].style.backgroundColor = 'white';
        table_td[i].style.color = '#333333';
    }

    for (let j = 0; j < table_th.length; j++) {
        table_th[j].style.border = 'border: 1px solid white';
    }

    for (let k = 0; k < button.length; k++) {
        button[k].style.color = 'white';
    }

    for (let l = 0; l < titre.length; l++) {
        titre[l].style.color = 'white';
    }
}


function openForm() {
    document.getElementById("CoIns-window").style.display = "block";
    var page = document.getElementById("page");
    page.style.filter = "blur(4px)";
    page.style.pointerEvents = "none";
}

function closeForm() {
    document.getElementById("CoIns-window").style.display = "none";
    var page = document.getElementById("page");
    page.style.filter = "blur(0)";
    page.style.pointerEvents = "auto";
}