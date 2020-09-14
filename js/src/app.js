'use strict';

// // typical import
// import gsap from "gsap";
 
// // or get other plugins:
// import Draggable from "gsap/Draggable";
// import ScrollTrigger from "gsap/ScrollTrigger";
 
// or all tools are exported from the "all" file (excluding bonus plugins):
// import { gsap, ScrollTrigger, Draggable, MotionPathPlugin } from "gsap/all";

// import './vendors/blotter.min.js';

// console.log('gsap library', gsap);

import './scripts/accordion.js';

import '../../css/src/app.scss';

import Teachers from "./sections/Teachers";
import Atmo from "./sections/Atmo";
import Review from "./sections/Review";



class App {
    constructor() {
        this.atmo = new Atmo(document.querySelector(".section.atmo"));
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










let image = document.querySelector(".courses__card .course-image");
console.log('image for transition', image);

const config = {
  attributes: true
}; 

// Функция обратного вызова при срабатывании мутации
const callback = function(mutationsList, observer) {
    for (let mutation of mutationsList) {
        if (mutation.type === 'attributes') {
            console.log('The ' + mutation.attributeName + ' attribute was modified.');
            // gsap.from(image, { duration: 3, x: 300, opacity: 0, scale: 0.5 });
        }
    }
};

// Создаем экземпляр наблюдателя с указанной функцией обратного вызова
const observer = new MutationObserver(callback);

// Начинаем наблюдение за настроенными изменениями целевого элемента
observer.observe(image, config);


// Позже можно остановить наблюдение
// observer.disconnect();

