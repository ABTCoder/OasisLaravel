$('#slide').vmcSlide({

    data: [],
    // width
    width: 'auto',

    // height
    height: 662,

    // image width
    // 0 = auto
    imgWidth: 0,

    // image height
    // 0 = auto
    imgHeight: 0,

    // min width
    minWidth: 10,

    // min height
    minHeight: 10,

    // <a href="https://www.jqueryscript.net/tags.php?/grid/">grid</a> options
    gridTdX: 10,
    gridTdY: 5,
    gridOdX: 30,
    gridOdY: 10,

    // shows navigation
    sideButton: false,

    // shows pagination
    navButton: true,

    // shows caption text
    showText: false,

    // the caption contains html
    isHtml: false,

    // autoplay
    autoPlay: true,

    // ascending or descending
    ascending: true,

    // check out more effects in the vmc.slide.effects.js
    effects: ['slideX'],

    // removes effects in IE6
    ie6Tidy: false,

    // random effects
    random: true,

    // duration
    duration: 3000,

    // animation speed
    speed: 800,

    // pause on hover
    hoverStop: true,

    // flip callback
    flip: function (fromIndex, toIndex) {
    },

    // created callback
    created: function () {
    },

});