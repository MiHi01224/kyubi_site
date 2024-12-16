const menu = document.getElementById('js-menu');
const nav = document.getElementById('js-nav');


menu.addEventListener("click", () => {
    nav.classList.toggle('nav--active');
});