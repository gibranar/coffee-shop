import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                coldiac: ['Coldiac', ...defaultTheme.fontFamily.sans],
                calibri: ['Calibri', ...defaultTheme.fontFamily.sans],
                novantico: ['Novantico', ...defaultTheme.fontFamily.sans],
                faberSansStd: ['FaberSansStd', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: "#c49d74",
                primaryDark: "#6c655f",
                primaryDark2: "#3e3530",
            }
        },
    },
    plugins: [],
};
