const accordionItems = Array.from(document.querySelectorAll(".accordion .accordion-item"));

function hideAllExcept (itemIndex) {
    accordionItems.forEach((item, index) => {
        if (itemIndex === index) return

        const outerList = item.querySelector(".accordion__outer-list");
        const innerList = item.querySelector(".accordion__inner-list");
        const title = item.querySelector(".item__title");
        const btn = item.querySelector(".btn-accordion");

        outerList.classList.remove("active")
        title.classList.remove("active");
        innerList.classList.add("visually-hidden");
        btn.classList.remove("active");
    });
}

accordionItems.forEach( (item, index)  => {
    const outerList = item.querySelector('.accordion__outer-list');
    const innerList = item.querySelector(".accordion__inner-list");
    const title = item.querySelector(".item__title");
    const btn = item.querySelector(".btn-accordion");


    outerList.addEventListener('click', function() {
        hideAllExcept(index);

        title.classList.toggle('active');
        innerList.classList.toggle('visually-hidden');
        btn.classList.toggle('active');
    });


});

// open first item on window downloaded
document.addEventListener("DOMContentLoaded", function () {
    let firstItem = accordionItems[0];
     const outerList = firstItem.querySelector(".accordion__outer-list");
     const innerList = firstItem.querySelector(".accordion__inner-list");
     const title = firstItem.querySelector(".item__title");
     const btn = firstItem.querySelector(".btn-accordion");

    title.classList.toggle("active");
    innerList.classList.toggle("visually-hidden");
    btn.classList.toggle("active");
});



const headerAccordionItems = Array.from(document.querySelectorAll(".header .header-accordion-item"));

function hideAllExcept(itemIndex) {
  headerAccordionItems.forEach((item, index) => {
    if (itemIndex === index) return;

    const outerList = item.querySelector(".accordion__outer-list");
    const innerList = item.querySelector(".accordion__inner-list");
    const title = item.querySelector(".item__title");
    const btn = item.querySelector(".btn-accordion");

    outerList.classList.remove("active");
    title.classList.remove("active");
    innerList.classList.add("visually-hidden");
    btn.classList.remove("active");
  });
}

headerAccordionItems.forEach((item, index) => {
  const outerList = item.querySelector(".accordion__outer-list");
  const innerList = item.querySelector(".accordion__inner-list");
  const title = item.querySelector(".item__title");
  const btn = item.querySelector(".btn-accordion");

  outerList.addEventListener("click", function () {
    hideAllExcept(index);

    title.classList.toggle("active");
    innerList.classList.toggle("visually-hidden");
    btn.classList.toggle("active");
  });
});