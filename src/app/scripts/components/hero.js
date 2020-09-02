// import accordion from "path/to/accordion";
// import slider from "path/to/slider";

class Hero {
    constructor(htmlElement) {
        this._root = htmlElement;
        this._accordion = accordion;
        this._slider = slider;

        this._swiperSettings = {
            someNewSetting: 215125
        }
    }

    _initAccordion() {
        this._accordion.run(this._root);
    }

    _initSlider() {
        this._slider.run(this._root, this._swiperSettings);
    }

    run() {
        this._initAccordion();
        this._initSlider();
    }
}

export default Hero;
