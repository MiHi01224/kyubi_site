const menu = document.getElementById('js-menu');
const nav = document.getElementById('js-nav');

/* ハンバーガーメニュー切り替え   */
menu.addEventListener("click", () => {
    nav.classList.toggle('nav--active');
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