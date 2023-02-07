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
