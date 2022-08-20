import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import react from '@vitejs/plugin-react';

export default defineConfig({
    server: {
        hmr: {
            host: 'localhost',
            port: 443,
            clientPort: 443,
        },
    },
    plugins: [
        laravel({
            input: [
                'resources/ts/app.tsx',
            ],
            refresh:  [
                'resources/routes/**',
                'routes/**',
                'resources/views/**',
            ],
        }),
        react(),
    ],
    resolve: {
        alias: {
            '@': '/resources/ts',
        },
    },
});
