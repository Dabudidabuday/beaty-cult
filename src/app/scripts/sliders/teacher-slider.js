import Slider from '../slider.js';

/**
 * @constructor
 * @param htmlElement {HTMLElement}
 */
class TeacherSlider {
    constructor(htmlElement, settings) {
        this._root = htmlElement;
        this.slider = null;
        this.settings = {
            breakpoints: {
                1024: {
                    initialSlide: 0,
                    slidesPerView: 4,
                    spaceBetween: 16,
                    centeredSlides: false,
                }
            }
        }
    }

    /**
     * @private
     * @method _addEventHandlers
     * @returns {TeacherSlider}
     */
    _addEventHandlers() {
        return this;
    }

    _initSlider() {
        this.slider = new Slider(this._root, this.settings);
        this.slider.run();
        return this;
    }

    /**
     * @public
     * @method run
     * @returns {void}
     */
    run() {
        this
            ._initSlider()
            ._addEventHandlers();
    }
}

export default TeacherSlider;
