/* ハンバーガーメニュー切り替え   */
const logo = document.getElementById('js-logo');
const menu = document.getElementById('js-menu');
const nav = document.getElementById('js-nav');
const flower = document.getElementById('js-flower');
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

//スクロール時のイベントを追加
// window.addEventListener('scroll', function(){

//   const item = document.querySelectorAll('.work__item');
//   for(let i = 0; i < item.length; i++){
//     var targetTop = item[i].offsetTop;
//     if(window.scrollY + 700 > targetTop){
//       item[i].classList.add('show');
//     }
//   }
// });