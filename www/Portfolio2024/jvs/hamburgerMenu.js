const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".navMenu");
const body = document.querySelector("body");
function openMenu() {
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active")
    body.classList.toggle("active");
}