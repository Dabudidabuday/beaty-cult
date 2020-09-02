import Slider from '../slider.js';

/**
 * @constructor
 * @param htmlElement {HTMLElement}
 */
class AtmoSlider {
    constructor(htmlElement) {
        this._root = htmlElement;
        this.slider = null;
    }

    /**
     * @private
     * @method _addEventHandlers
     * @returns {AtmoSlider}
     */
    _addEventHandlers() {
        return this;
    }

    _initSlider() {
        this.slider = new Slider(this._root);
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

export default AtmoSlider;
