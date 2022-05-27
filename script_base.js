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


function testCo (){
  let co = getCookie("connection");

  if(co==true){
    alert("Vous êtes connecté");
  }

}

function btnProfil(){
  let co = getCookie("connection");

  if(co==true){
    window.location = 'ProfilClient.php';
  }
  else {
    openForm();
  }
}