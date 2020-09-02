import Slider from '@components/slider.js';

class Teachers {
    constructor(htmlElement) {
        this._root = htmlElement;
        this._slider = null;

        this._swiperSettings = {
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

    // /**
    //  * @private
    //  * @method _initAccordion
    //  * @return {Teachers}
    //  */
    // _initAccordion() {
    //     // initialize accordion component if necessary
    //
    //     return this;
    // }

    /**
     * @private
     * @method _initSlider
     * @return {Teachers}
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

export default Teachers;
