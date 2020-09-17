import gsap from "gsap";

import ScrollTrigger from "gsap/ScrollTrigger";
gsap.registerPlugin(ScrollTrigger);


let imageFish = document.querySelector(".image-fish");
let imageGirl = document.querySelector(".image-girl");

let fishTransition = function () {
  let tl = gsap.timeline();

  tl.to(imageFish, {
    scrollTrigger: {
      trigger: imageFish,
      toggleActions: "restart pause reverse pause",
      start: "20% 65%",
      // end: 'bottom 30%',
      scrub: 2,
      end: "+=330",
      // markers: true,
    },
    duration: 2,
    opacity: 0,
  });

  tl.set(imageFish, { opacity: 1 });
};

fishTransition();
