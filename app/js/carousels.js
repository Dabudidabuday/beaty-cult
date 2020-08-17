var atmoCarousel = document.querySelector('.atmo-carousel');

var flkty = new Flickity( atmoCarousel, {
    // options
    cellAlign: 'left',
    contain: true,
    wrapAround: true,
    imagesLoaded: true,
    setGallerySize: false,
    pageDots: false
});


var teachersCarousel = document.querySelector('.teachers-carousel')

var flkt2 = new Flickity( teachersCarousel, {
    // options
    cellAlign: 'left',
    contain: true,
    wrapAround: true,
    imagesLoaded: true,
    setGallerySize: false,
    pageDots: false
});
