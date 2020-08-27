let accordionItems = Array.from(document.querySelectorAll('.accordion > .item'));
let accordionButtons = Array.from(document.querySelectorAll('.btn-accordion'));


accordionItems.forEach(item => {
    let title = item.querySelector('.accordion__outer-list');
    let innerList = item.querySelector('.accordion__inner-list');
    let btn = item.querySelector('.btn-accordion');
    title.addEventListener('click', function() {
        innerList.classList.toggle('visually-hidden');
        btn.classList.toggle('active');
    })
})
