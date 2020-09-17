import { gsap } from "gsap";



// Header navigation event behaviour
const mainPageNavmenu = function () {
  const menu = document.querySelector(".header__menu");
  const btnOpen = document.querySelector("#btnMenuOpen");
  const btnClose = document.querySelector("#btnMenuClose");

  if (!menu) return;

  var tl = gsap.timeline();

  

  btnOpen.addEventListener("click", function () {
    menu.classList.remove("visually-hidden");
  });

  btnClose.addEventListener("click", function () {
    menu.classList.add("visually-hidden");
  });
};

mainPageNavmenu();




// SCROLL STYLING
function isInViewport(el) {
  let rect = el.getBoundingClientRect();
  // console.log(rect.top);
  return rect.top <= 0 && rect.bottom >= 0;
}

function setBackground(el, backgroundColor) {
    el.style.background = backgroundColor;
}

let mainPageHeader = document.querySelector(".main-page > .header");

if (mainPageHeader) {
  window.addEventListener("scroll", function () {
    const header = document.querySelector(".main-page .header");
    const hero = document.querySelector(".hero");
    const courses = document.querySelector(".section.courses");
    const headerLogo = document.querySelector(".header .header-logo svg path");

    if (window.scrollY === 0) {
      setBackground(header, "transparent");
      headerLogo.style.fill = "#ffffff";
      header.style.borderBottom = "none";
    }

    if (isInViewport(hero)) {
      setBackground(header, "transparent");
      headerLogo.style.fill = "#ffffff";
      header.style.borderBottom = "none";
    }

    if (isInViewport(courses)) {
      setBackground(header, "white");
      headerLogo.style.fill = "#000000";
      header.style.borderBottom = "1px solid #EFF6F4";
    }
  });
}
