/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {
            fontFamily: {
                Montserrat: ["Montserrat", "cursive"],
                MontserratExtrabold: ["Montserrat-ExtraBold", "cursive"],
                MontserratBold: ["Montserrat-Bold", "cursive"],
            },
        },
    },
    plugins: [require("flowbite/plugin")],
};
