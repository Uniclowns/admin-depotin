/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
    ],
    theme: {
        extend: {
            colors: {
                primary: "#4880FF",
            },
        },
        fontFamily: {
            sans: ["Nunito", "sans-serif"],
        },
    },
    plugins: [
        require('flowbite/plugin'),
    ],
};
