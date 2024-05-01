// Navbar Fixed
window.onscroll = function () {
    const header = document.querySelector("header");
    const fixedNav = header.offsetTop;
    // Petekan menduwur
    const upBtn = document.querySelector("#up-button");

    if (window.pageYOffset > fixedNav) {
        header.classList.add("navbar-fixed");
        upBtn.classList.add("flex");
        upBtn.classList.remove("hidden");
    } else {
        header.classList.remove("navbar-fixed");
        upBtn.classList.remove("flex");
        upBtn.classList.add("hidden");
    }
};

// Hamburger
const hamburger = document.querySelector("#hamburger");
const navMenu = document.querySelector("#nav-menu");

hamburger.addEventListener("click", function () {
    hamburger.classList.toggle("hamburger-active");
    navMenu.classList.toggle("hidden");
});
