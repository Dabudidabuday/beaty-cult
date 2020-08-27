import Swiper from 'swiper';
import 'swiper/swiper-bundle.css';

class Slider {
    constructor(htmlElement, outerSettings) {
        this._root = htmlElement.querySelector(".swiper-container");

        this.defaultSettigns = {
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
                    slidesPerView: 3,
                    spaceBetween: 16
                },
            },

            navigation: {
                nextEl: '.swiper-button-prev',
                prevEl: '.swiper-button-next',
            },
        };

        this.outerSettings = outerSettings || {};
        this.slider = null;
    }

    /**
     * @private
     * @method _getSettings
     * @returns {Object}
     */
    _getSettings() {
        return Object.assign(this.defaultSettigns, this.outerSettings);
    }

    /**
     * @private
     * @method _getSettings
     * @returns {void}
     */
    _init() {
        this.slider = new Swiper(this._root, this._getSettings());
    }

    run() {
        this._init();
    }
}

export default Slider;
