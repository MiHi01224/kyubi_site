const menu = document.getElementById('js-menu');
const nav = document.getElementById('js-nav');

/* ハンバーガーメニュー切り替え   */
menu.addEventListener("click", () => {
    nav.classList.toggle('nav--active');
});