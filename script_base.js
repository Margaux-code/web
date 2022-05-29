function setCookie(cname, cvalue, exdays) {
  const d = new Date();
  d.setTime(d.getTime() + (exdays * 1000));
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

function eraseCookie(name) {
  document.cookie = name + '=; Max-Age=-99999999;';
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


function testCo() {
  let co = getCookie("connection");
  let btnDeco = document.getElementById("deco");

  if (co == true) {
    console.log("User connection succed");
    btnDeco.style.display = "inline-block";
  }
  else {
    btnDeco.style.display = "none";
  }
}

function btnProfil() {
  let co = getCookie("connection");
  let who = getCookie("Session_type_user");
  console.log(btnDeco)

  if (co == true) {
    if (who == 'client') {
      window.location = 'ProfilClient.php';
    } else if (who == 'coach') {
      window.location = 'ProfilCoach.php';
    } else if (who == 'admin') {
      window.location = 'ProfilAdmin.php';
    } else {
      alert("Une erreure est survenue. <br> Veuillez vous reconnecter");
      window.location = 'accueil.html';
    }
  }
  else {
    openForm();
  }
}

function btnDeco() {
  eraseCookie('Session_name_user');
  eraseCookie('Session_type_user');
  eraseCookie('Session_Id_user');
  eraseCookie('connection');
  var path = window.location.pathname;
  var page = path.split("/").pop();
  if (page == 'acceuil.html') {
    window.location.reload();
  } else {
    window.location('accueilhtml');
  }

}