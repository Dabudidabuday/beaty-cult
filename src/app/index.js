import '../style/app.scss';

import Teachers from "./scripts/sections/Teachers";
import Atmo from "./scripts/sections/Atmo";
import Review from "./scripts/sections/Review";

class App {
    constructor() {
        this.atmo = new Atmo(document.querySelector('.section.atmo'))
        this.teachers = new Teachers(document.querySelector('.section.teachers'));
        this.review = new Review(document.querySelector('.section.review'));
    }

    run() {
        this.teachers.run();
        this.atmo.run();
    }
}

window.onload = () => {
    let app = new App();

    app.run();
};


let navButton = document.querySelector('.navigation-button');
let navigation = document.querySelector('.navigation');
let btnArrow = document.querySelector('.btn-arrow');

navButton.addEventListener('click', function() {
    navigation.classList.toggle('visually-hidden');
    btnArrow.classList.toggle('active');
})


// TODO переписать в виде класса и подключать где нужно

const menu = document.querySelector('.header__menu');
const btnOpen = document.querySelector('#btnMenuOpen');
const btnClose = document.querySelector('#btnMenuClose');

btnOpen.addEventListener('click', function() {
    menu.classList.remove('visually-hidden');
});

btnClose.addEventListener('click', function() {
    menu.classList.add('visually-hidden');
});


// $(document).ready(function() {
//     $(this).mousemove(function(e) {
//         $("#light").css({
//             "top": e.pageY - 250,
//             "left": e.pageX - 250
//         })
//     })
// })

let light = document.querySelector('#light');

function lighter() {
    light.addEventListener('mousemove', function(e) {
        x = e.offsetX;
        y = e.offsetY;
        light.style.top = y;
        light.style.left = x;
    })
}
