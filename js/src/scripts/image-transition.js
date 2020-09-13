// // typical import
// import gsap from "gsap";
 
// // or get other plugins:
// import Draggable from "gsap/Draggable";
// import ScrollTrigger from "gsap/ScrollTrigger";
 
// or all tools are exported from the "all" file (excluding bonus plugins):
// import { gsap, ScrollTrigger, Draggable, MotionPathPlugin } from "gsap/all";
 
// don't forget to register plugins
// gsap.registerPlugin(ScrollTrigger, Draggable, MotionPathPlugin); 

// let image = document.querySelector(".courses__card .course-image");
// console.log('image for transition', image);

// const config = {
//   attributes: true
// }; 

// // Функция обратного вызова при срабатывании мутации
// const callback = function(mutationsList, observer) {
//     for (let mutation of mutationsList) {
//         if (mutation.type === 'attributes') {
//             console.log('The ' + mutation.attributeName + ' attribute was modified.');
//             // gsap.from(image, { duration: 3, x: 300, opacity: 0, scale: 0.5 });
//         }
//     }
// };

// // Создаем экземпляр наблюдателя с указанной функцией обратного вызова
// const observer = new MutationObserver(callback);

// // Начинаем наблюдение за настроенными изменениями целевого элемента
// observer.observe(image, config);


// // Позже можно остановить наблюдение
// // observer.disconnect();


