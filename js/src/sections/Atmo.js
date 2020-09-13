import Slider from '@components/slider.js';

class Atmo {
    constructor(htmlElement, sliderElement) {
        this._root = htmlElement;
        this._slider = null;
        this._sliderElement = sliderElement || htmlElement;

        this._swiperSettings = {
          breakpoints: {
            1024: {
              initialSlide: 0,
              slidesPerView: 4,
              loop: true,
              spaceBetween: 16,
              centeredSlides: false,
            },
          },
          navigation: {
            clickable: true,
            nextEl: ".slider-nav-next",
            prevEl: ".slider-nav-prev",
          },
          flipEffect: {
            rotate: 30,
            slideShadows: false,
          },
        };
    }

    /**
     * @private
     * @method _initSlider
     * @return {Atmo}
     */
    _initSlider() {
        this._slider = new Slider(this._sliderElement, this._swiperSettings);
        this._slider.run();

        return this;
    }

    /**
     * @public
     * @method run
     * @returns {void}
     */
    run() {
        this._initSlider();
            console.log("slider button: ",this._swiperSettings.navigation.nextEl);
    }
}

export default Atmo;
