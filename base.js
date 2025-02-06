/* ハンバーガーメニュー切り替え   */
const menu = document.getElementById('js-menu');
const sns = document.getElementById('js-sns');
const nav = document.getElementById('js-nav');
const flower = document.getElementById('js-flower');

menu.addEventListener("click", () => {
  menu.classList.toggle('menu--active');
  sns.classList.toggle('sns--active');
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

/*  */
// 複製するHTML要素を取得
let content_area = document.getElementById("content_area");
let clone_element = content_area.cloneNode(true);
clone_element.id = "content_area2";
content_area.after(clone_element);


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