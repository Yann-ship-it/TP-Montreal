// ScrollTop
document.addEventListener("DOMContentLoaded", function () {
  window.onscroll = function (ev) {
    document.getElementById("scrollTop").className =
      window.pageYOffset > 100 ? "visible" : "none";
  };
});

// Menu burger
const menu = document.getElementById("menu");
const ul = document.querySelector("ul");

menu.addEventListener("click", function (e) {
  e.preventDefault();
  menu.classList.toggle("open");
  ul.classList.toggle("open");
});


let total = 1000;

let s = 2; // en secondes
let ms = s * 2000; // en MS
let delta = 40; // MS entre chaque tour
let tours = ms/delta; // 2000 / 40 = 50 tours
let step = Math.ceil(total / tours);
let cpt = 0;

let all = document.querySelectorAll(".allElements")
let sac =  document.getElementById("sac");
let coffee =  document.getElementById("cofee");
let design = document.getElementById("design")
let awards = document.getElementById("awards")

let maxArrayScore = []
let score = 0
let loopCount = 300

for (let i = 0; i < all.length; i++) {
  maxArrayScore.push(all[i].textContent)
}
console.log(maxArrayScore);

let count = 0;

all[0].innerHTML = count;
all[1].innerHTML = count;
all[2].innerHTML = count;
all[3].innerHTML = count;

let intervalId = setInterval(() => {
  count += step;
  if (count >= total) {
    clearInterval(intervalId);
    count = total;
  }

  if(maxArrayScore[0] != all[0].textContent && maxArrayScore[0] >= count){
    all[0].innerHTML = count;
  }
  else{
    all[0].innerHTML = maxArrayScore[0]
  }

  if(maxArrayScore[1] != all[1].textContent && maxArrayScore[1] >= count){
    all[1].innerHTML = count;
    console.log(all[1].textContent)
    console.log(maxArrayScore[1])
  }
  else{
    all[1].innerHTML = maxArrayScore[1]
  }

  if(maxArrayScore[2] != all[2].textContent && maxArrayScore[2] >= count){
    all[2].innerHTML = count;
  }
  else{
    all[2].innerHTML = maxArrayScore[2]
  }

  if(maxArrayScore[3] != all[3].textContent && maxArrayScore[3] >= count){
    all[3].innerHTML = count;
  }
  else{
    all[3].innerHTML = maxArrayScore[3]
  }
}, delta);
