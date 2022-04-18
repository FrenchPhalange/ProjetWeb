let select = document.querySelector(".select_all");
let select_piscine = document.querySelector(".select_piscine");
let select_fitness = document.querySelector(".select_fitness");
let select_machines = document.querySelector(".select_machines");
select.addEventListener("change", function () {
  if (select.value == "piscine") {
    select_piscine.classList.remove("hidden");
    select_machines.classList.add("hidden");
    select_fitness.classList.add("hidden");
  } else if (select.value == "fitness") {
    select_fitness.classList.remove("hidden");
    select_machines.classList.add("hidden");
    select_piscine.classList.add("hidden");
  } else {
    select_machines.classList.remove("hidden");
    select_piscine.classList.add("hidden");
    select_fitness.classList.add("hidden");
  }
});

let phrase = document.querySelector(".phrase");
if (phrase) {
  phrase = phrase.textContent.slice(11, -12);
  let option = document.querySelector("option[value='" + phrase + "']");
  option.textContent += " (complet)"
  option.disabled = true;
} else {
}
