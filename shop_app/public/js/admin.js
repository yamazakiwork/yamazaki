/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*******************************!*\
  !*** ./resources/js/admin.js ***!
  \*******************************/
var delete_buttons = document.getElementsByName('delete');
Object.keys(delete_buttons).forEach(function (delete_button) {
  delete_buttons[delete_button].addEventListener('click', function (e) {
    //下記は確認ダイアログがいいえ(false)だった時の条件
    if (!window.confirm('このユーザーを削除しますか？')) {
      e.preventDefault();
    }
  });
});
/******/ })()
;