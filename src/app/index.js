import '../style/app.scss';
import './scripts/index.js';

import AtmoSlider from "./scripts/sliders/atmo-slider";
import TeacherSlider from "./scripts/sliders/teacher-slider";
class App {
    constructor() {
        this.atmoSlider = new AtmoSlider(document.querySelector(".atmo"));
        this.teachersSlider = new TeacherSlider(document.querySelector('.teachers'));
    }

    run() {
        this.atmoSlider.run();
        this.teachersSlider.run();
    }
}

window.onload = () => {
    let app = new App();

    app.run();
};
