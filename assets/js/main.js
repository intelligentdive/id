/* ---------------
NAV OVERLAY MOTION
----------------*/
var t1 = gsap.timeline({ paused: true });

t1.to("#nav-overlay", 0.5, {
    "left": "0%"
});

t1.from("#nav-overlay .nav-bg", 0.5, {
    "width": "0%"
});

t1.from("#nav-overlay .close", 0.5, {
    "top": "-100%"
});

t1.from("#nav-overlay .nav-menu .menu-link .nav-link", 0.5, {
    y: "100%",
    stagger: 0.05,
});

t1.to("#nav-overlay .line", 0.5, {
    "transform": "scaleY(1)",
    "transform-origin": "bottom",
});

t1.from("#nav-overlay .nav-address .address-block .nav-menu", 0.5, {
    y: "100%",
    stagger: 0.05,
});

t1.reverse();


/*------------ 
HAMBURGER MENU
----------- */
document.getElementById("ham-icon").addEventListener("click", function () {
    t1.reversed(!t1.reversed());
    this.classList.add('active');
});

document.querySelector(".close").addEventListener("click", function () {
    t1.reversed(!t1.reversed());
    //this.classList.remove('active');
    document.getElementById("ham-icon").classList.remove('active');
});


/* -------------------
NAVBAR POSITION TOGGLE
------------------- */
var navbar = document.getElementById("nav-container");

window.onscroll = function () {
    /* ---------------
    BACK TO TOP SCRIPT
    --------------- */
    let scrollProgress = document.getElementById("progress");
    let pos = document.documentElement.scrollTop;
    let calcHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    let scrollValue = Math.round((pos * 100) / calcHeight);
    if (pos > 100) {
        scrollProgress.style.transform = "translateY(0px)";
    } else {
        scrollProgress.style.transform = "translateY(100px)";
    }
    scrollProgress.addEventListener("click", () => {
        document.documentElement.scrollTop = 0;
    });
    scrollProgress.style.background = `conic-gradient(#222 ${scrollValue}%, #d7d7d7 ${scrollValue}%)`;



    /* -----------
    FIX NAV SCRIPT
    ----------- */
    if (window.pageYOffset >= 70) {
        navbar.classList.add("active-position");
    } else {
        navbar.classList.remove("active-position");
    }
};


/* ---------------
BACK TO TOP SCRIPT
--------------- */
function custom_scroll_top() {
    document.documentElement.scrollTop = 0;
    document.getElementById("progress").style.transform = "translateY(100px)";
}
window.onload = custom_scroll_top();


/* -----------------------
CUSTOM MOUSE CURSOR SCRIPT
----------------------- */

var cursor = document.querySelector('.cursor');
var cursorinner = document.querySelector('.cursor2');
var a = document.querySelectorAll('a');

document.addEventListener('mousemove', function (e) {
    var x = e.clientX;
    var y = e.clientY;
    cursor.style.transform = `translate3d(calc(${e.clientX}px - 50%), calc(${e.clientY}px - 50%), 0)`
});

document.addEventListener('mousemove', function (e) {
    var x = e.clientX;
    var y = e.clientY;
    cursorinner.style.left = x + 'px';
    cursorinner.style.top = y + 'px';
});

document.addEventListener('mousedown', function () {
    cursor.classList.add('click');
    cursorinner.classList.add('cursorinnerhover')
});

document.addEventListener('mouseup', function () {
    cursor.classList.remove('click')
    cursorinner.classList.remove('cursorinnerhover')
});

a.forEach(item => {
    item.addEventListener('mouseover', () => {
        cursor.classList.add('hover');
    });
    item.addEventListener('mouseleave', () => {
        cursor.classList.remove('hover');
    });
})

