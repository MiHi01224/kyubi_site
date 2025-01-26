const logo = document.getElementById('js-logo');
const menu = document.getElementById('js-menu');
const nav = document.getElementById('js-nav');
const flower = document.getElementById('js-flower');

/* ハンバーガーメニュー切り替え   */
menu.addEventListener("click", () => {
  logo.classList.toggle('header--active');
  menu.classList.toggle('menu--active');
  nav.classList.toggle('nav--active');
  flower.classList.toggle('flower--active');
});

/* 右クリック禁止 */
const images = document.querySelectorAll('img');
  images.forEach(img => {
  img.addEventListener('contextmenu', function(event) {
  event.preventDefault();
  });
});

/*　右ドラッグ禁止　*/
document.querySelectorAll('img').forEach(img => {
  img.addEventListener('dragstart', function(event) {
  event.preventDefault();
  });
});