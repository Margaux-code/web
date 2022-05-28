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

function chatBox_open() {
    document.getElementById("button-chatbox-container").style.display = "none";
    document.getElementById("chatbox-container").style.display = "block";
}

function chatBox_close() {
    document.getElementById("button-chatbox-container").style.display = "block";
    document.getElementById("chatbox-container").style.display = "none";
}

function isClient() {
    if(getCookie('Session_type_user')!='client'){
        document.getElementById("button-chatbox-container").style.display = "none";
    }
}