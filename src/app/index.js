import '../style/app.scss';

import Teachers from "./sections/Teachers";

class App {
    constructor() {
        this.teachers = new Teachers(document.querySelector('.section.teachers'));
    }

    run() {
        this.teachers.run();
    }
}

window.onload = () => {
    let app = new App();

    app.run();
};
