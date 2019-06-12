const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.setPublicPath('public')
mix.options({
  processCssUrls: false
});

// CSS
mix.sass("resources/sass/app.scss", "public/css");

// JS
mix.js(
  "resources/js/app.js",
  "public/js"
);


mix.scripts(
  [
    // Plugins
    "resources/vendor/hs-megamenu/src/hs.megamenu.js",
    "resources/vendor/svg-injector/dist/svg-injector.min.js",
    "resources/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js",
    "resources/vendor/fancybox/jquery.fancybox.min.js",
    "resources/vendor/jquery-validation/dist/jquery.validate.min.js",
    "resources/vendor/ion-rangeslider/js/ion.rangeSlider.min.js",
    "resources/vendor/slick-carousel/slick/slick.js",
    "resources/vendor/dzsparallaxer/dzsparallaxer.js",
    "resources/vendor/custombox/dist/custombox.min.js",
    "resources/vendor/custombox/dist/custombox.legacy.min.js",
    "resources/vendor/datatables/media/js/jquery.dataTables.min.js",
    "resources/vendor/flatpickr/dist/flatpickr.min.js",
    "resources/vendor/appear.js",
    "resources/vendor/circles/circles.min.js",
    // Components
    "resources/vendor/components/hs.core.js",
    "resources/vendor/components/hs.header.js",
    "resources/vendor/components/hs.unfold.js",
    "resources/vendor/components/hs.focus-state.js",
    "resources/vendor/components/hs.malihu-scrollbar.js",
    "resources/vendor/components/hs.validation.js",
    "resources/vendor/components/hs.show-animation.js",
    "resources/vendor/components/hs.svg-injector.js",
    "resources/vendor/components/hs.fancybox.js",
    "resources/vendor/components/hs.range-slider.js",
    "resources/vendor/components/hs.slick-carousel.js",
    "resources/vendor/components/hs.go-to.js",
    "resources/vendor/components/hs.modal-window.js",
    "resources/vendor/components/hs.step-form.js",
    "resources/vendor/components/hs.range-datepicker.js",
    "resources/vendor/components/hs.chart-pie.js",
    "resources/vendor/components/hs.progress-bar.js",
    "resources/vendor/components/hs.selectpicker.js",
    "resources/vendor/components/hs.datatables.js",
    // Init components
    "resources/js/components.js"
  ],
  "public/js/vendor.js"
);
