import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path';
import sass from 'sass';

export default defineConfig({
  plugins: [
    laravel({
      input: [
        'resources/sass/app.scss',
        'resources/js/app.js',
        'resources/css/app.css',
      ],
      refresh: true,
    }),
  ],
  resolve: {
    alias: {
      '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap'),
    },
  },
  css: {
    preprocessorOptions: {
      sass: {
        implementation: sass,
      },
    },
  },
});
