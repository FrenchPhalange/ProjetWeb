let form_login = document.querySelector(".form-login");
let btn_login = document.querySelector(".btn-login");
let form_signin = document.querySelector(".signin");
let btn_signin = document.querySelector(".btn-signin");

btn_login.addEventListener("click", function () {
  if (form_login.className == "form-login form-login-active") {
    form_login.classList.remove("form-login-active");
  } else {
    form_login.classList.add("form-login-active");
    btn_signin.addEventListener("click", function () {});
  }
});

btn_signin.addEventListener("click", function () {
  if (form_signin.className == "signin form-signin-active") {
    form_signin.classList.remove("form-signin-active");
  } else {
    form_signin.classList.add("form-signin-active");
    btn_login.addEventListener("click", function () {});
  }
});
