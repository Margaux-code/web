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

function setCookie(cname, cvalue, exdays) {
    const d = new Date();
    d.setTime(d.getTime() + (exdays * 1000));
    let expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function chatBox_open() {
    if (getCookie('Session_type_user') == '') {
        setCookie('Session_Id_user', 0, 0);
        document.getElementById("ask-container").style.display = "flex";
        page.style.filter = "blur(4px)";
        page.style.pointerEvents = "none";
    }
    document.getElementById("button-chatbox-container").style.display = "none";
    document.getElementById("chatbox-container").style.display = "block";
}

function chatBox_close() {
    document.getElementById("button-chatbox-container").style.display = "block";
    document.getElementById("chatbox-container").style.display = "none";
}

function isClient() {
    if ((getCookie('Session_type_user') != 'client') && (getCookie('Session_type_user') != '')) {
        console.log("test");
        document.getElementById("button-chatbox-container").style.display = "none";
    }
}

function start() {
    testCo();
    isClient();
}

function cancelSession() {
    document.getElementById("ask-container").style.display = "none";
    page.style.filter = "blur(0)";
    page.style.pointerEvents = "auto";

    chatBox_close()
}

function validName() {
    setCookie('Session_name_user', document.getElementById('session-name').value, 0);

    document.getElementById("ask-container").style.display = "none";
    page.style.filter = "blur(0)";
    page.style.pointerEvents = "auto";

    window.location.reload();
}