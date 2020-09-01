let accordionItems = Array.from(document.querySelectorAll('.accordion > .item'));
let accordionButtons = Array.from(document.querySelectorAll('.btn-accordion'));

function hideAllExcept (title, button) {
    let innerLists = Array.from(document.querySelectorAll('.accordion .accordion__inner-list'));
    innerLists.forEach(item => {
        title.classList.remove('active');
        item.classList.add('visually-hidden');
        button.classList.remove('active');
    })
}

accordionItems.forEach(item => {
    let outerList = item.querySelector('.accordion__outer-list');
    let innerList = item.querySelector('.accordion__inner-list');
    let title = item.querySelector('.item__title');
    let btn = item.querySelector('.btn-accordion');

    outerList.addEventListener('click', function() {
        hideAllExcept(title, btn);
        console.log(hideAllExcept(title, btn));
        title.classList.add('active');
        innerList.classList.remove('visually-hidden');
        btn.classList.toggle('active');
    })
})

