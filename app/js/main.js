let accordionItems = Array
    .from(document.querySelectorAll
    ('.accordion .item'));

accordionItems.forEach(function(item, i) {

    let accordionButtons = item.querySelector('.accordion__outer-list');

    let accordionInnerList = item.querySelector('.accordion__inner-list');

    button.addEventListener('click', function() {
        accordionInnerList.classList.toggle('visually-hidden');
    })
});





