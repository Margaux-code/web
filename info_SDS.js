function changeColor() {
    if(document.body.style.background == "black"){
        changeToWhite();
    }
    else{
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

    document.body.style.background = 'white'; 
    footer.style.color = 'black';
    slogan.style.color = 'rgb(46, 44, 41)';
    search_bar.style.border = '3px solid rgb(148, 148, 148)';
    search_bar.style.background = 'white';
    search_button.style.border = '1px solid rgb(148, 148, 148)';
    search_button.style.background = 'rgb(148, 148, 148)';
    text_accueil.style.color ='black';
    for(let i=0; i<button.length; i++){
        button[i].style.color = 'black';
    }
}

function changeToBlack() {
    document.cookie = "couleur=sombre; path=/";
    

    var slogan = document.getElementById("slogan");
    var button = document.getElementsByClassName("nav-button");
    var footer = document.getElementById("footer");
    var search_bar = document.getElementById("search-bar");
    var search_button = document.getElementById("searchbutton");

    document.body.style.background = 'black'; 
    footer.style.color = 'white';
    slogan.style.color = 'white';
    search_bar.style.border = '3px solid rgb(28, 28, 28)';
    search_bar.style.background = 'lightgrey';
    search_button.style.border = '1px solid rgb(28, 28, 28)';
    search_button.style.background = 'rgb(28, 28, 28)';
    text_accueil.style.color ='white';

    for(let i=0; i<button.length; i++){
        button[i].style.color = 'white';
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