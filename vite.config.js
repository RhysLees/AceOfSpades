import { defineConfig } from 'vite';
import laravel, { refreshPaths } from 'laravel-vite-plugin';
import {viteStaticCopy} from 'vite-plugin-static-copy';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: [
                ...refreshPaths,
                'app/Http/Livewire/**',
            ],
            valetTls: 'aceofspades.test'
        }),
        viteStaticCopy({
            targets: [
                {
                    src: 'resources/images',
                    dest: ''
                },
                {
                    src: 'resources/audio',
                    dest: ''
                },
            ],
        }),
    ],
});
