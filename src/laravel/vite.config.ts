import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import react from '@vitejs/plugin-react';

export default defineConfig({
    build: {
        // outDir に manifest.json を出力
        manifest: true,
        rollupOptions: {
            // デフォルトの .html エントリを上書き
            input: 'resources/ts/app.tsx',
        },
    },
    //5173と8000を接続するために明示的にhostを0.0.0.0に設定
    server: {
        host: '0.0.0.0',
    },
    plugins: [
        laravel({
            input: 'resources/js/app.tsx',
            refresh: true,
        }),
        react(),
    ],
    resolve: {
        alias: {
            '@': '/resources/js',
        },
    },
});
