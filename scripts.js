document.getElementById("nav-container").style.height = 0;

var prevScrollpos = window.pageYOffset;

function nav() {
    var navbarContainer = document.getElementById("nav-container");
    if (navbarContainer.className === "nav-container") {
        navbarContainer.className += " visible";
        document.getElementById("nav-container").style.height = 'auto';
    } else {
        navbarContainer.className = 'nav-container';
        document.getElementById("nav-container").style.height = '0';
    }
}

window.onscroll = function() {
    if(window.innerWidth > 768) {
        var currentScrollPos = window.pageYOffset;
        if (prevScrollpos > currentScrollPos) {
            document.getElementById("nav-container").style.height = 0;
        } else {
            document.getElementById("nav-container").style.height = "auto";
        }
        prevScrollpos = currentScrollPos;
    }
}