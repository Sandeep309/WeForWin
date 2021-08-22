// Side Panel Toggle
const burger = document.querySelector(".burger");
const leftSide = document.querySelector(".leftPanel");
burger.addEventListener("click", () => {
  leftSide.classList.toggle("pClose");
});

// Accordian
const acc = document.getElementsByClassName("sideAccordion");
const accArrow = document.querySelector(".accArrow");
let i;
// Accordian Loop
for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function () {
    this.classList.toggle("sideActive");
    // accArrow.classList.toggle("arrowRotate");
    const panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
      accArrow.classList.add("arrowDefault");
      accArrow.classList.remove("arrowRotate");
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
      accArrow.classList.remove("arrowDefault");
      accArrow.classList.add("arrowRotate");
    }
  });
}

// URL Based Active Class
$(function ($) {
  var path = window.location.href;
  $(".nav-item a").each(function () {
    if (this.href === path) {
      $(this).addClass("myActive");
    }
  });
});
