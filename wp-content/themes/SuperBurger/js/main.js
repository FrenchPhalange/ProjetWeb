/* dfg */
AOS.init();
let imgchange = document.getElementById('sliderimg');

let point_1 = document.querySelector(".point-1");
let point_2 = document.querySelector(".point-2");
let point_3 = document.querySelector(".point-3");

point_1.addEventListener("click", function () {
  if (point_1.classList.contains == "round-active") {
  } else {
    imgchange.src = "/wp-content/themes/SuperBurger/img/Burger-fond.png";
    point_1.classList.add("round-active");
    point_2.classList.remove("round-active");
    point_3.classList.remove("round-active");
  }
});
point_2.addEventListener("click", function () {
  if (point_1.classList.contains == "round-active") {
  } else {
    imgchange.src = "/wp-content/themes/SuperBurger/img/Burger-fond2.png";
    point_1.classList.remove("round-active");
    point_2.classList.add("round-active");
    point_3.classList.remove("round-active");
  }
});

point_3.addEventListener("click", function () {
  if (point_1.classList.contains == "round-active") {
  } else {
    imgchange.src = "/wp-content/themes/SuperBurger/img/Burger-fond3.png";
    point_1.classList.remove("round-active");
    point_2.classList.remove("round-active");
    point_3.classList.add("round-active");
  }
});

let date_field = document.querySelector('.date');
date_field.addEventListener('mouseover', function(){
  date_field.type = 'date';
})
date_field.addEventListener('mouseleave', function(){
  date_field.type = 'text';
})
let time_field = document.querySelector('.time');
time_field.addEventListener('mouseover', function(){
  time_field.type = 'time';
})
time_field.addEventListener('mouseleave', function(){
  time_field.type = 'text';
})