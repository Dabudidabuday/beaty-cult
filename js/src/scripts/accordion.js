import gsap from "gsap";

const accordionItems = Array.from(
  document.querySelectorAll(".accordion .accordion-item")
);
document.addEventListener("DOMContentLoaded", function () {
    let firstItem = accordionItems[0];
     const outerList = firstItem.querySelector(".accordion__outer-list");
     const innerList = firstItem.querySelector(".accordion__inner-list");
     const title = firstItem.querySelector(".item__title");
     const btn = firstItem.querySelector(".btn-accordion");

     var tl = gsap.timeline();

      // tl.set(innerList, {});

    title.classList.toggle("active");
    innerList.classList.add("active");
    btn.classList.toggle("active");
});



const headerAccordionItems = Array.from(document.querySelectorAll(".header .header-accordion-item"));

const accordionLogic = function(array) {
  function hideAllExcept(itemIndex) {
    array.forEach((item, index) => {
      if (itemIndex === index) return;

      const outerList = item.querySelector(".accordion__outer-list");
      const innerList = item.querySelector(".accordion__inner-list");
      const title = item.querySelector(".item__title");
      const btn = item.querySelector(".btn-accordion");

      outerList.classList.remove("active");
      title.classList.remove("active");
      innerList.classList.remove("active");
      btn.classList.remove("active");
    });
  }

  array.forEach((item, index) => {
    const outerList = item.querySelector(".accordion__outer-list");
    const innerList = item.querySelector(".accordion__inner-list");
    const title = item.querySelector(".item__title");
    const btn = item.querySelector(".btn-accordion");

    outerList.addEventListener("click", function () {
      hideAllExcept(index);


      title.classList.toggle("active");
      innerList.classList.toggle("active");
      btn.classList.toggle("active");
    });
  });
}

accordionLogic(headerAccordionItems);
accordionLogic(accordionItems);