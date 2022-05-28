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

/* Animation scroll */
var controller = new ScrollMagic.Controller();

var scene1 = new ScrollMagic.Scene({
    triggerElement: "#competition",
    duration: 500,
    triggerHook: 0
})
.setClassToggle('.halteres', 'go-up')
.setIndicator()
.setPin("#competition")
.addTo(controller);

var scene2 = new ScrollMagic.Scene({
    triggerElement: "#competition",
    duration: 500,
    triggerHook: 0
})
.setClassToggle('.text-container', 'appear-bottom')
.setIndicator()
.setPin("#competition")
.addTo(controller);

var scene3 = new ScrollMagic.Scene({
    triggerElement: "#activite",
    duration: 500,
    triggerHook: 0
})
.setClassToggle('.text-container', 'appear-bottom')
.setIndicator()
.setPin("#activite")
.addTo(controller);

var scene4 = new ScrollMagic.Scene({
    triggerElement: "#salle",
    duration: 500,
    triggerHook: 0
})
.setClassToggle('.text-container', 'appear-bottom')
.setIndicator()
.setPin("#salle")
.addTo(controller);