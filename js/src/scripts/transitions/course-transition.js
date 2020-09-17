import { gsap } from "gsap";

const navMobile = document.querySelector(".header__menu");
const navDesktop = document.querySelector(".navigation");
const navButton = document.querySelector(".navigation-button");
const btnArrow = document.querySelector(".btn-arrow");
const navItems = document.querySelectorAll(".navigation-list > .item");
const tl = gsap.timeline();

if (navDesktop) {
  navButton.addEventListener("click", function () {
    if (!btnArrow.classList.contains("active")) {
      btnArrow.classList.add("active");
      navDesktop.classList.remove("visually-hidden");

      tl.to(navDesktop, {
        y: 0,
        duration: 0.5,
      });

      const tl2 = gsap.timeline();

      gsap.set(navItems, { y: -150, opacity: 0 });

      navItems.forEach((item, i) => {
        tl2.to(
          item,
          {
            y: 0,
            opacity: 1,
            ease: "easeInOut",
            duration: 1,
            delay: i * -0.05,
          },

          `-=${i}* -0.025`
        );
      });

      tl.add(tl2, "-=.2");
    } else {
      btnArrow.classList.remove("active");
      // navigation.classList.add("visually-hidden");
      gsap.to(navDesktop, {
        y: "-100%",
        duration: 0.5,
      });

      gsap.to(navItems, {
        opacity: 0,
        duration: 0.2,
      });
    }
  });
}