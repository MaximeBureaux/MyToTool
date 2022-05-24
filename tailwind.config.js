const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                'jost': ["'Jost'", "sans-serif;"],
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            boxShadow: {
                'innerxl': 'inset 0 2px 4px 0 rgb(0 0 0 / 0.15)',
                'innerxl2': 'inset 0px 0px 5px 1px rgb(0 0 0 / 0.15)',
            },
            colors: {
                clifford: '#da373d',
                white:{
                    soft: '#F9F6F8',
                    DEFAULT: '#FFFFFF',
                }
            }
        }
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
