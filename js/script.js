let burger_menu = document.querySelector("i.fa-bars");
let menu = document.querySelector("menu");
burger_menu.addEventListener("click", function () {
  if (burger_menu.className == "fa fa-times") {
    burger_menu.className = "fa fa-bars";
    menu.classList.remove("show");
  } else {
    burger_menu.className = "fa fa-times";
    menu.classList.add("show");
    menu.addEventListener("click", function () {
      burger_menu.className = "fa fa-bars";
      menu.classList.remove("show");
    });
  }
});
let form_login = document.querySelector(".form-login");
let btn_login = document.querySelector(".btn-login");
let form_signin = document.querySelector(".signin");
let btn_signin = document.querySelector(".btn-signin");

btn_login.addEventListener("click", function () {
  form_signin.classList.remove("form-signin-active");
  if (form_login.className == "form-login form-login-active") {
    form_login.classList.remove("form-login-active");
  } else {
    form_login.classList.add("form-login-active");
    btn_signin.addEventListener("click", function () {});
  }
});

btn_signin.addEventListener("click", function () {
  form_login.classList.remove("form-login-active");
  if (form_signin.className == "signin form-signin-active") {
    form_signin.classList.remove("form-signin-active");
  } else {
    form_signin.classList.add("form-signin-active");
    btn_login.addEventListener("click", function () {});
  }
});

// ADD MEMBER

let select = document.querySelector(".select_all");
let select_piscine = document.querySelector(".select_piscine");
let select_fitness = document.querySelector(".select_fitness");
let select_machines = document.querySelector(".select_machines");
let date_machines = document.querySelector(".date-machines");
select.addEventListener("change", function () {
  if (select.value == "piscine") {
    select_piscine.classList.remove("hidden");
    select_machines.classList.add("hidden");
    select_fitness.classList.add("hidden");
  } else if (select.value == "fitness") {
    select_fitness.classList.remove("hidden");
    select_machines.classList.add("hidden");
    select_piscine.classList.add("hidden");
    date_machines.classList.add("hidden");
  } else {
    select_machines.classList.remove("hidden");
    date_machines.classList.remove("hidden");
    select_piscine.classList.add("hidden");
    select_fitness.classList.add("hidden");
  }
});

let phrase = document.querySelector(".phrase");
if (phrase) {
  phrase = phrase.textContent.slice(11, -12);
  let option = document.querySelector("option[value='" + phrase + "']");
  option.textContent += " (complet)";
  option.disabled = true;
} else {
}
