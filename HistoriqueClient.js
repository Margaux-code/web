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