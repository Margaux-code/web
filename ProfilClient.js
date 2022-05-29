function changeActive() {
  if (document.getElementById("buttonInfo").classList.contains('active')) {
    document.getElementById("buttonInfo").classList.remove('active');
    document.getElementById("buttonRDV").classList.add('active');
  } else {
    document.getElementById("buttonRDV").classList.remove('active');
    document.getElementById("buttonInfo").classList.add('active');
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

function setCookie(cname, cvalue, exdays) {
  const d = new Date();
  d.setTime(d.getTime() + (exdays * 1000));
  let expires = "expires=" + d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function find_id_rdv(id_rdv){
  setCookie('Id_rdv_coach', id_rdv, 0);
  window.location = 'MonRDV.php';
}