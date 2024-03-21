import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css',
                    'resources/css/vendor/Pe-icon-7-stroke.css',
                    'resources/css/vendor/font-awesome.min.css',
                    'resources/css/plugins/animate.min.css',
                    'resources/css/plugins/jquery-ui.min.css',
                    'resources/css/plugins/swiper-bundle.min.css',
                    'resources/css/plugins/nice-select.css',
                    'resources/css/plugins/magnific-popup.min.css',
                    'resources/css/plugins/ion.rangeSlider.min.css',
                    'resources/css/style.css',
                    'resources/js/app.js',
                    'resources/js/vendor/bootstrap.bundle.min.js',
                    'resources/js/vendor/jquery-3.6.0.min.js',
                    'resources/js/vendor/jquery-migrate-3.3.2.min.js',
                    'resources/js/vendor/modernizr-3.11.2.min.js',
                    'resources/js/plugins/wow.min.js',
                    'resources/js/plugins/jquery-ui.min.js',
                    'resources/js/plugins/swiper-bundle.min.js',
                    'resources/js/plugins/jquery.nice-select.js',
                    'resources/js/plugins/parallax.min.js',
                    'resources/js/plugins/jquery.magnific-popup.min.js',
                    'resources/js/plugins/tippy.min.js',
                    'resources/js/plugins/ion.rangeSlider.min.js',
                    'resources/js/plugins/mailchimp-ajax.js',
                    'resources/js/main.js'],
            refresh: true,
        }),
    ],
});
