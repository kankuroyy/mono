// #1 password display ON/OFF フォーム入力: パスワードの表示オンオフ
function passChk(){
  const pwd = document.getElementById("pwd");
  const pwdCheck = document.getElementById("password-check");
  pwdCheck.addEventListener("change",function() {
    if (pwdCheck.checked) {
      pwd.setAttribute("type", "text");
    } else {
      pwd.setAttribute("type", "password");
    }
  },
  false
);
}
// #1 password display ON/OFFここまで




// const pwd = document.getElementById("pwd");
// const pwdCheck = document.getElementById("password-check");
// pwdCheck.addEventListener(
//   "change",
//   function() {
//     if (pwdCheck.checked) {
//       pwd.setAttribute("type", "text");
//     } else {
//       pwd.setAttribute("type", "password");
//     }
//   },
//   false
// );