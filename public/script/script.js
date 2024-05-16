const toggle = document.querySelector("#toggle-down");
const navMenu = document.querySelector("#nav-menu");

toggle.addEventListener("click", function () {
    navMenu.classList.toggle("hidden");
});
