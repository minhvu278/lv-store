import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',

                // Admin

                // Client
                'resources/sass/client/master.scss',
                'resources/sass/client/pages/homepage/home.scss',
                'resources/sass/client/partials/header.scss',
                'resources/sass/client/partials/footer.scss',
                'resources/js/master.js',
            ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap'),
        }
    },
});
