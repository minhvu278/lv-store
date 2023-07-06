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
                'resources/sass/client/partials/header.scss',
                'resources/sass/client/partials/footer.scss',
            ],
            refresh: true,
        }),
    ],
});
