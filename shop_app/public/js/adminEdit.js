/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!***********************************!*\
  !*** ./resources/js/adminEdit.js ***!
  \***********************************/
window.check = function () {
  //下記は確認ダイアログがいいえ(false)だった時の条件
  if (!window.confirm('この内容で保存しますか？')) {
    return false;
  }
};

var password = document.getElementById("password");
var password_confirm = document.getElementById("password_confirm");
var password_error_msg = document.getElementById("password_error_msg");
var password_check = password_confirm.addEventListener('input', function () {
  if (password.value === password_confirm.value) {
    password.style.backgroundColor = '#DDFFDD';
    password_error_msg.textContent = "";
  } else {
    password.style.backgroundColor = '#FADBDA';
    password_error_msg.textContent = "パスワードが一致しません";
  }
});
/******/ })()
;