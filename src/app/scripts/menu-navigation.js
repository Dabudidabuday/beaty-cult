const menu = document.querySelector('.header__menu');
const btnOpen = document.querySelector('#btnMenuOpen');
const btnClose = document.querySelector('#btnMenuClose');

btnOpen.addEventListener('click', function() {
    menu.classList.remove('visually-hidden');
});

btnClose.addEventListener('click', function() {
    menu.classList.add('visually-hidden');
});

