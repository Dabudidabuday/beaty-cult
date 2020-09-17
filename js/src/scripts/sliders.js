var Flickity = require("flickity");

var atmoContainer = document.querySelector('.atmo .atmo-slider');
var teacherContainer = document.querySelector('.teachers .teachers-slider');
var studentsContainer = document.querySelector(".students .students-slider");
var reviewContainer = document.querySelector(".review .review-slider");

var sliderOptions = {
  cellAlign: "center",
  contain: true,
  wrapAround: false,
  selectedAttraction: 0.01,
  friction: 0.15,
  pageDots: false,
  initialIndex: 2
};

if (matchMedia("screen and (min-width: 1024px)").matches) {
  sliderOptions.cellAlign = 'left';
  sliderOptions.wrapAround = true;
  sliderOptions.initialIndex = 1;

}

var teachersSlider = new Flickity(teacherContainer, sliderOptions);

if (atmoContainer) {
  var atmoSlider = new Flickity(atmoContainer, sliderOptions);
}

if (reviewContainer) {
  var reviewSlider = new Flickity(reviewContainer, sliderOptions);
  var studentsSlider = new Flickity(studentsContainer, sliderOptions);
}
