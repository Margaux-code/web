function changeActive() {
    if (document.getElementById("buttonInfo").classList.contains('active')) {
      document.getElementById("buttonInfo").classList.remove('active');
      document.getElementById("buttonRDV").classList.add('active');
    } else {
      document.getElementById("buttonRDV").classList.remove('active');
      document.getElementById("buttonInfo").classList.add('active');
    }
  }