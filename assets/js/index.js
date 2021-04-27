let hamburgerMenu = document.getElementsByClassName("c-hamburger__menu")[0];
let hamburgerButton = document.getElementsByClassName("c-hamburger__button")[0];
let body = document.getElementsByTagName("body")[0];
let hamburgerClose = document.getElementsByClassName("c-hamburger__close")[0];

console.log("working")

hamburgerButton.addEventListener("click", () => {
    hamburgerMenu.classList.add("show");
    body.classList.add("no-scroll");
})

hamburgerClose.addEventListener("click", () => {
    hamburgerMenu.classList.remove("show");
    body.classList.remove("no-scroll");
})
