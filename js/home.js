AOS.init();
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