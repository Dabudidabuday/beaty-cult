import '../style/app.scss';
import './scripts/index.js';

// import AtmoSlider from "./scripts/sliders/atmo-slider";
// import TeacherSlider from "./scripts/sliders/teacher-slider";
import Hero from "./scripts/components/hero";

class App {
    constructor() {
        this.atmoSlider = new AtmoSlider(document.querySelector(".atmo"));
        this.teachersSlider = new TeacherSlider(document.querySelector('.teachers'));
        this.hero = new Hero('.section.hero');
    }

    run() {
        hero.run();
    }
}

window.onload = () => {
    let app = new App();

    app.run();
};
