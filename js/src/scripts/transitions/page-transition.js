import barba from "@barba/core";
import regeneratorRuntime from "regenerator-runtime";
import gsap from "gsap";
import $ from "jquery";

function pageTransition() {
  var loadingScreen = document.querySelector('ul.transition');

  var tl = gsap.timeline();
  tl.to('ul.transition', { duration: .5, scaleY: 1, transformOrigin: "bottom left", stagger: .2 })
  tl.to('ul.transition', { duration: .5, scaleY: 0, transformOrigin: "bottom left", stagger: .1, delay: .1 });
}

function contentAnimation() {
  var tl = gsap.timeline();
    tl.set(".animate", { visibility: "visible" }, "+=0.5");
    tl.from(".animate", { y: 30, opacity: 0, stagger: 0.1, duration: 1 });

    let heroSocials = document.querySelector(".hero__socials");

    if (heroSocials) {
      if (matchMedia("screen and (min-width: 1024px)").matches) {
        var tl2 = gsap.timeline();
        tl2.set(".animate-right", { visibility: "visible" });
      }
    }

    tl2.from(".animate-right", {
      duration: 0.7,
      x: 30,
      opacity: 0,
      stagger: 0.3,
      delay: 1,
    });
    tl2.to(".animate-right", {
      x: 0,
      opacity: 1,
      stagger: 0.3,
      delay: 0.4,
    }, '-=0.4');
}

// function delay(n) {
//   n = n || 2000;
//   return new Promise((done) => {
//     setTimeout(() => {
//       done();
//     }, n);
//   });
// }

// $(function() {
//   barba.init({
//     sync: true,

//     transitions: [
//       {
//         async leave(data) {
//           const done = this.async();

//           pageTransition();
//           await delay(1500);
//           done();
//         },

//         async enter(data) {
//           contentAnimation();
//         },

//         async once(data) {
//           contentAnimation();
//         },
//       },
//     ],
//   });
// });


window.addEventListener('load', function() {
  contentAnimation();
})