AOS.init();
let burger_menu = document.querySelector("i.fa-bars");
let menu = document.querySelector("menu");
burger_menu.addEventListener("click", function () {
  if (burger_menu.className == "fa fa-times") {
    burger_menu.className = "fa fa-bars";
    menu.classList.remove('show');
  } else {
    burger_menu.className = "fa fa-times";
    menu.classList.add('show');
    menu.addEventListener('click', function(){
      burger_menu.className = "fa fa-bars";
      menu.classList.remove('show');
    })
  }
});
  let data = [
    "Tapis de course",
    "Elliptiques",
    "Monteurs d'escaliers",
    "Rameurs",
    "Machines à ski",
    "Velos droits/couchés",
    "Exerciteur du haut de corps",
    "Onde Cardio",
  ];
  for (let i = 0; i < data.length; i++) {
    let div_car = document.createElement("div");
    div_car.className = "car car-" + i;
    div_car.innerHTML = "<i class='fa fas fa-check'></i>";
    div_car.innerHTML += data[i];
    document
      .querySelector(".part-1-section-4")
      .appendChild(div_car);
  }
  let data2 = [
    "Balles de physiothérapie",
    "Disque Versa",
    "Barres de corps",
    "Billes de médecine",
    "BOSU",
    "Bandes d'exercice",
    "Cordes à sauter"
  ];
  for (let i = 0; i < data2.length; i++) {
    let div_car = document.createElement("div");
    div_car.className = "car car-" + i;
    div_car.innerHTML = "<i class='fa fas fa-check'></i>";
    div_car.innerHTML += data2[i];
    document
      .querySelector(".part-2-section-4")
      .appendChild(div_car);
  }

let img_opinion = document.querySelector('.person-opinion')
let name_opinion = document.querySelector('.name-client')
let point_opinion1 = document.querySelector('.p-1')
let point_opinion2 = document.querySelector('.p-2')
let left_arrow = document.querySelector('.fa-angle-left')
let right_arrow = document.querySelector('.fa-angle-right')

right_arrow.addEventListener('click', function(){
  img_opinion.src = "img/person-1.jpg";
  name_opinion.textContent = "David Coperfield";
  point_opinion2.classList.add('point-active')
  point_opinion1.classList.remove('point-active')
})
left_arrow.addEventListener('click', function(){
  img_opinion.src = "img/person-2.jpg";
  name_opinion.textContent = "Arden Cho";
  point_opinion2.classList.remove('point-active')
  point_opinion1.classList.add('point-active')
})