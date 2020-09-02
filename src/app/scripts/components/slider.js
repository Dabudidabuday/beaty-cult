import Swiper from 'swiper';

import 'swiper/swiper-bundle.css';

/**
 * @constructor
 * @param htmlElement {HTMLElement}
 * @param outerSettings {Object}
 */
class Slider {
    constructor(htmlElement, outerSettings) {
        this._root = htmlElement;
        this._container = null;
        this._slider = null;

        this._outerSettings = outerSettings || {};
        this._defaultSettigns = {
            direction: 'horizontal',
            loop: true,
            initialSlide: 1,
            spaceBetween: 20,
            slidesPerView: 1.2,
            centeredSlides: true,
            speed: 500,
            breakpoints: {
                320: {
                    slidesPerView: 1.2,
                    spaceBetween: 20
                },

                1024: {
                    slidesPerView: 4,
                    spaceBetween: 16
                },
            },

            navigation: {
                nextEl: '.swiper-button-prev',
                prevEl: '.swiper-button-next',
            },
        };
    }

    /**
     * @private
     * @method _setContainer
     * @returns {Slider}
     */
    _setContainer() {
        if (this._root) {
            this._container = this._root.querySelector(".swiper-container");
        }

        return this;
    }

    /**
     * @private
     * @method _getSettings
     * @returns {Object}
     */
    _getSettings() {
        return Object.assign(this._defaultSettigns, this._outerSettings);
    }

    /**
     * @private
     * @method _getSettings
     * @returns {Slider}
     */
    _init() {
        this._slider = new Swiper(this._container, this._getSettings());

        return this;
    }

    /**
     * @public
     * @method run
     * @returns {void}
     */
    run() {
        this
            ._setContainer()
            ._init();
    }
}

export default Slider;
