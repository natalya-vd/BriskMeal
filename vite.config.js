import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

const path = require('path')

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/sass/admin/app.scss',
                'resources/js/app.js',
                'resources/js/admin/app.js',
            ],
            refresh: true,
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
    ],
    resolve: {
        alias: {
            vue: 'vue/dist/vue.esm-bundler.js',
            '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap'),
        },
    },
    server: {
        hmr: {
            host: 'localhost',
        },
    }
});
