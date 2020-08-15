let accordionBtn = document.querySelectorAll('.btn-circle');
let innerList = document.querySelectorAll('.courses__direction-list');

for(let i = 0; i < accordionBtn.length; i++) {
    let btn = accordionBtn[i];

    for(let i = 0; i < innerList.length; i++) {
        let listItem = innerList[i];

        btn.addEventListener('click', function(e) {
            e.stopPropagation();
            listItem.classList.toggle('visually-hidden');

        })
    }
}


var atmoSlider = document.querySelector('.atmo-carousel');

var flkty = new Flickity( atmoSlider, {
    // options
    cellAlign: 'left',
    contain: true,
    wrapAround: true,
    imagesLoaded: true,
    setGallerySize: false,
    pageDots: false
});


var teachersSlider = document.querySelector('.teachers-carousel')

var flkty = new Flickity( teachersSlider, {
    // options
    cellAlign: 'left',
    contain: true,
    wrapAround: true,
    imagesLoaded: true,
    setGallerySize: false,
    pageDots: false
});
