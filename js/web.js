const body = document.body;
let lastScroll = 0;

window.addEventListener("scroll", () => {
  const currentScroll = window.pageYOffset;
  if (currentScroll <= 0) {
    body.classList.remove("scroll-up");
    return;
  }

  if (currentScroll > lastScroll && !body.classList.contains("scroll-down")) {
    body.classList.remove("scroll-up");
    body.classList.add("scroll-down");
  }
  if (currentScroll < lastScroll && body.classList.contains("scroll-down")) {
    body.classList.remove("scroll-down");
    body.classList.add("scroll-up");
  }
  lastScroll = currentScroll;
});

// Active class on url
function setActive() {
  linkObj = document.querySelector(".menu").getElementsByTagName("a");
  for (i = 0; i < linkObj.length; i++) {
    if (document.location.href.indexOf(linkObj[i].href) >= 0) {
      linkObj[i].classList.add("active");
    }
  }
}
window.onload = setActive;

// Rotate menu btn
// const navToggler = document.querySelector(".navbar-toggler");
// navToggler.addEventListener("click", function () {
//   if (!this.classList.contains("collapsed")) {
//     this.classList.add("navbarTogglerRotate");
//   } else {
//     this.classList.remove("navbarTogglerRotate");
//   }
// });

// When the user scrolls the page, execute myFunction
// window.onscroll = function () {
//   myFunction();
// };

// let myFunction = () => {
//   var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
//   var height =
//     document.documentElement.scrollHeight -
//     document.documentElement.clientHeight;
//   var scrolled = (winScroll / height) * 100;
//   document.getElementById("myBar").style.width = scrolled + "%";
// };
