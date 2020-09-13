import Slider from '@components/slider.js';

class Review {
    constructor(htmlElement) {
        this._root = htmlElement;
        this._slider = null;

        this._swiperSettings = {
          breakpoints: {
            1024: {
              initialSlide: 0,
              slidesPerView: 3,
              spaceBetween: 16,
              centeredSlides: true,
            //   slidesPerView: "auto",
            },
          },
        };
    }

    /**
     * @private
     * @method _initSlider
     * @return {Review}
     */
    _initSlider() {
        this._slider = new Slider(this._root, this._swiperSettings);
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
    }
}

export default Review;
