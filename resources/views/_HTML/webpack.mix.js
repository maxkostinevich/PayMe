let mix = require("laravel-mix");

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application, as well as bundling up your JS files.
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
  "resources/js/core.js",
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

// Full API
// mix.js(src, output);
// mix.react(src, output); <-- Identical to mix.js(), but registers React Babel compilation.
// mix.preact(src, output); <-- Identical to mix.js(), but registers Preact compilation.
// mix.coffee(src, output); <-- Identical to mix.js(), but registers CoffeeScript compilation.
// mix.ts(src, output); <-- TypeScript support. Requires tsconfig.json to exist in the same folder as webpack.mix.js
// mix.extract(vendorLibs);
// mix.sass(src, output);
// mix.standaloneSass('src', output); <-- Faster, but isolated from Webpack.
// mix.fastSass('src', output); <-- Alias for mix.standaloneSass().
// mix.less(src, output);
// mix.stylus(src, output);
// mix.postCss(src, output, [require('postcss-some-plugin')()]);
// mix.browserSync('my-site.test');
// mix.combine(files, destination);
// mix.babel(files, destination); <-- Identical to mix.combine(), but also includes Babel compilation.
// mix.copy(from, to);
// mix.copyDirectory(fromDir, toDir);
// mix.minify(file);
// mix.sourceMaps(); // Enable sourcemaps
// mix.version(); // Enable versioning.
// mix.disableNotifications();
// mix.setPublicPath('path/to/public');
// mix.setResourceRoot('prefix/for/resource/locators');
// mix.autoload({}); <-- Will be passed to Webpack's ProvidePlugin.
// mix.webpackConfig({}); <-- Override webpack.config.js, without editing the file directly.
// mix.babelConfig({}); <-- Merge extra Babel configuration (plugins, etc.) with Mix's default.
// mix.then(function () {}) <-- Will be triggered each time Webpack finishes building.
// mix.extend(name, handler) <-- Extend Mix's API with your own components.
// mix.options({
//   extractVueStyles: false, // Extract .vue component styling to file, rather than inline.
//   globalVueStyles: file, // Variables file to be imported in every component.
//   processCssUrls: true, // Process/optimize relative stylesheet url()'s. Set to false, if you don't want them touched.
//   purifyCss: false, // Remove unused CSS selectors.
//   uglify: {}, // Uglify-specific options. https://webpack.github.io/docs/list-of-plugins.html#uglifyjsplugin
//   postCss: [] // Post-CSS options: https://github.com/postcss/postcss/blob/master/docs/plugins.md
// });
