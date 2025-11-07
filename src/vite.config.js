import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    server: {
        host: '0.0.0.0', // Escucha en todas las interfaces
        port: 5173,      // Asegura el mismo puerto
        cors: true,             // <--- permite CORS desde cualquier origen
        hmr: {
            host: '10.10.18.189', // Tu IP del host
            protocol: 'http',
        },
    },
});
