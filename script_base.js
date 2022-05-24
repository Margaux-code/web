// Add your code here

function changeColor() {
  if (document.body.style.background == "black") {
    changeToWhite();
  }
  else {
    changeToBlack();
  }
}
function setCookie(cname, cvalue, exdays) {
  const d = new Date();
  d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
  let expires = "expires=" + d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
  let name = cname + "=";
  let ca = document.cookie.split(';');
  for (let i = 0; i < ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

function checkCookieTheme() {
  let theme = getCookie("theme");
  if (theme != "") {
    alert("Le theme que vous avez choisi est " + theme);
  }
}

function changeToWhite() {

  setCookie("theme","clair",365);
  checkCookieTheme();


  var slogan = document.getElementById("slogan");
  var button = document.getElementsByClassName("nav-button");
  var footer = document.getElementById("footer");
  var search_bar = document.getElementById("search-bar");
  var formImg = document.getElementById("imgCoIns");
  var closeForm = document.getElementById("closeForm-container");

  document.body.style.background = 'white';
  footer.style.color = 'black';
  slogan.style.color = 'rgb(46, 44, 41)';
  search_bar.style.background = 'white';
  text_accueil.style.color = 'white';
  formImg.src = "Image/marbreblanc.jpg";
  closeForm.style.filter = "invert(0%)";

  for (let i = 0; i < button.length; i++) {
    button[i].style.color = 'black';
  }
}

function changeToBlack() {
  setCookie("theme","fonce",365);
  checkCookieTheme();

  var slogan = document.getElementById("slogan");
  var button = document.getElementsByClassName("nav-button");
  var footer = document.getElementById("footer");
  var search_bar = document.getElementById("search-bar");
  var formImg = document.getElementById("imgCoIns");
  var closeForm = document.getElementById("closeForm-container");

  document.body.style.background = 'black';
  footer.style.color = 'white';
  slogan.style.color = 'white';
  search_bar.style.background = 'lightgrey';
  text_accueil.style.color = 'white';
  formImg.src = "Image/marbrenoir.jpg";
  closeForm.style.filter = "invert(100%)";

  for (let i = 0; i < button.length; i++) {
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
