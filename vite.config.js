import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css', 'resources/js/app.js',

                // Admin

                // Client
                'resources/sass/client/master.scss',
                'resources/client/sass/pages/homepage/home.scss',
                'resources/sass/client/partials/header.scss',
                'resources/sass/client/partials/footer.scss',
                'resources/js/master.js',
            ],
            refresh: true,
        }),
    ],
});
