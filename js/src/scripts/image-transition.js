// // typical import
// import gsap from "gsap";
import { gsap } from "gsap";
// // or get other plugins:
// import Draggable from "gsap/Draggable";
// import ScrollTrigger from "gsap/ScrollTrigger";


let headerAnimation = function() {

}

let heroAnimation = function() {
    const logo = document.querySelector(".header-logo");
    const headerButton = document.querySelector(".btn-header");

    const hero = document.querySelector(".hero");
    const subtitle = hero.querySelector(".hero__suptitle");
    const title = hero.querySelector(".hero__title");
    const heroButton = hero.querySelector(".btn-outline");
    const facebook = hero.querySelector(".facebook");
    const instagram = hero.querySelector(".instagram");

    const tl = gsap.timeline();
};


let courseCardAnimation = function () {
    const image = document.querySelector(".courses__card .course-image");
    const additionalImage = document.querySelector(".courses__card .course-image-additional");
    const text = document.querySelector(".courses__card .course-description");
    const bullets = document.querySelectorAll(".courses__card .card__info-bullet");
    const tl = gsap.timeline();

    tl.from(image, { duration: 0.5, opacity: 0 });
    tl.from(additionalImage, { duration: 0.5, opacity: 0, x: 250 }, "-=0.4");
    tl.from(text, { duration: 0.3, opacity: 0, y: 50 }, "-=0.3");
    tl.from(bullets, { stagger: 0.1, opacity: 0, y: 100 }, "-=0.3");
};


const image = document.querySelector(".courses__card .course-image");
if (image) {
  const config = {
    attributes: true,
    attributeFilter: ["src"],
  };

  const animateImage = function (mutationsList, observer) {
    for (let mutation of mutationsList) {
      if (mutation.type === "attributes" && mutation.attributeName === "src") {
        courseCardAnimation();
        observer.takeRecords();
      }
    }
  };

  const observer = new MutationObserver(animateImage);
  observer.observe(image, config);

}

