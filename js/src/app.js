// import './vendors/blotter.min.js';

import '../../css/src/app.scss';

import Teachers from "./sections/Teachers";
import Atmo from "./sections/Atmo";
import Review from "./sections/Review";



class App {
    constructor() {
        this.atmo = new Atmo(document.querySelector(".section.atmo", ".atmo-slider"));
        this.teachers = new Teachers(document.querySelector('.section.teachers'));
        this.review = new Review(document.querySelector('.section.review'));
    }

    run() {
        this.teachers.run();
        this.atmo.run();
        this.review.run();
    }
}

window.onload = () => {
    let app = new App();

    app.run();
};


const mainPageNavmenu = function () {
  const menu = document.querySelector(".header__menu");
  const btnOpen = document.querySelector("#btnMenuOpen");
  const btnClose = document.querySelector("#btnMenuClose");

  if (!menu) return;

  btnOpen.addEventListener("click", function () {
    menu.classList.remove("visually-hidden");
  });

  btnClose.addEventListener("click", function () {
    menu.classList.add("visually-hidden");
  });
};

mainPageNavmenu();


// Open close Nav menus - course page
const coursePageNavMenu = function() {
    const navigation = document.querySelector(".navigation");
    const navButton = document.querySelector(".navigation-button");
    const btnArrow = document.querySelector(".btn-arrow");

    if (!navigation) return

    navButton.addEventListener("click", function () {
        navigation.classList.toggle("visually-hidden");
        btnArrow.classList.toggle("active");
    });
}

coursePageNavMenu();









