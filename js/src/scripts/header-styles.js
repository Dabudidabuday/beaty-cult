


function isInViewport(el) {
    let rect = el.getBoundingClientRect();
    // console.log(rect.top);
    return (
        rect.top <= 0 &&
        rect.bottom >= 0
    );
}

function setBackground(el, backgroundColor) {
    el.style.background = backgroundColor;
}

window.addEventListener ("scroll", function(){

    const header = document.querySelector('.main-page .header');
    const hero = document.querySelector('.hero');
    const courses = document.querySelector('.section.courses');

    // const courseHeader = document.querySelector('.course-page .header');
    // const courseHero = document.querySelector('.hero-course');

    const headerLogo = document.querySelector('.header .header-logo svg path');

    if (window.scrollY === 0) {
        setBackground(header, 'transparent');
        headerLogo.style.fill="#ffffff";
        header.style.borderBottom="none"
    }

    if (isInViewport(hero)) {
        setBackground(header, 'transparent');
        headerLogo.style.fill="#ffffff";
        header.style.borderBottom="none";
    }

    if (isInViewport(courses)) {
        setBackground(header, 'white');
        headerLogo.style.fill="#000000";
        header.style.borderBottom="1px solid #EFF6F4";
    }

});
