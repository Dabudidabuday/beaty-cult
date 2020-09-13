const promoSection = document.querySelector('.section.promo');
const lighter = document.getElementById("light");

function update(e) {
  var x = e.clientX || e.touches[0].clientX;
  var y = e.clientY || e.touches[0].clientY;
  
  document.documentElement.style.setProperty("--cursorX", x + "px");
  document.documentElement.style.setProperty("--cursorY", y + "px");
}

promoSection.addEventListener("mousemove", update);
promoSection.addEventListener("touchmove", update);
