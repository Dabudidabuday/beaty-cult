
import { gsap } from "gsap";



// let heroAnimation = function() {
//     const logo = document.querySelector(".header-logo");
//     const headerButton = document.querySelector(".btn-header");

//     const hero = document.querySelector(".hero");
//     const subtitle = hero.querySelector(".hero__suptitle");
//     const title = hero.querySelector(".hero__title");
//     const heroButton = hero.querySelector(".btn-outline");
//     const facebook = hero.querySelector(".facebook");
//     const instagram = hero.querySelector(".instagram");

//     const tl = gsap.timeline();

//     tl.from(subtitle, {y: 100, duration: 0.2, opacity: 0});
//     tl.from(title, { y: 100, duration: 0.2, opacity: 0 });
//     tl.from(heroButton, { y: 100, duration: 0.2, opacity: 0 });
// };

// heroAnimation();


let courseCardAnimation = function () {
    const image = document.querySelector(".courses__card .course-image");
    const additionalImage = document.querySelector(".courses__card .course-image-additional");
    const text = document.querySelector(".courses__card .course-description");
    const bullets = document.querySelectorAll(".courses__card .card__info-bullet");
    const tl = gsap.timeline();

    tl.fromTo(image, { duration: 0.5, opacity: 0 }, { opacity: 1});
    tl.fromTo(additionalImage, {opacity: 0, x: 300 }, { opacity: 1, x: 95, duration: 0.5 }, "-=0.4");
    tl.fromTo(text, { duration: 0.3, opacity: 0, y: 50 }, { opacity: 1, y: 0 }, "-=0.3");
    tl.fromTo(bullets, { stagger: 0.1, opacity: 0, y: 100 }, {stagger: 0.1, opacity: 1,  y: 0 }, "-=0.3");
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