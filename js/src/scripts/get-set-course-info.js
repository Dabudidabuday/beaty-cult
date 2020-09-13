
function getCourseInfo (item) {
    const description = item.dataset.description;
    const price = item.dataset.price;
    const duration = item.dataset.duration;
    const date = item.dataset.date;
    const link = item.dataset.link;
    const image = item.dataset.image;
    const additionalImage = item.dataset.additional;

    return {
      description,
      price,
      duration,
      date,
      link,
      image,
      additionalImage
    };
}

function setCourseInfo({
  description = "",
  price = "",
  duration = "",
  date = "",
  link = "",
  image = "",
  additionalImage = ""
}) {
  const cardDescription = document.querySelector(".course-description");
  const cardPrice = document.querySelector(".course-price");
  const cardDate = document.querySelector(".course-date");
  const cardDuration = document.querySelector(".course-duration");
  const cardLink = document.querySelector(".course-link");
  const cardImage = document.querySelector(".course-image");
  const cardAdditionalImage = document.querySelector(".course-image-additional");

  cardDescription.innerText = description;
  cardPrice.innerText = price += ' UAH';
  cardDate.innerText = date;
  cardDuration.innerText = duration;
  cardLink.setAttribute("href", link);
  cardImage.setAttribute("src", image);
  cardAdditionalImage.setAttribute("src", additionalImage);
}


function initCourseCards () {
    const labelsArray = Array.from(document.querySelectorAll(".course-title"));
    const firstCardInfo = getCourseInfo(labelsArray[0]);
    setCourseInfo(firstCardInfo);

    labelsArray.forEach(item => {
        item.addEventListener('click', () => {
            const cardInfo = getCourseInfo(item);
            setCourseInfo(cardInfo);
        })
    })
};



document.addEventListener("DOMContentLoaded", function() {

    initCourseCards();
});

