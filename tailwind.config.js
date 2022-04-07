const colors = require('tailwindcss/colors')
const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
    content: [
        './src/js/**/*.js',
        './site/**/*.php',
        './content/**/*.txt',
    ],
    theme: {
        screens: {
            'xs': '400px',
            ...defaultTheme.screens,
        },
        fontFamily: {
            'sans': ['Lato', 'sans-serif'],
        },
        fontWeight: {
            'normal': 400,
            'bold': 700,
        },
        colors: {
            white: colors.white,
            black: colors.black,
            transparent: 'transparent',
            current: 'currentColor',
            gray: colors.slate,
            purple: colors.purple,
        },
        extend: {},
    },
    plugins: [
        require('@tailwindcss/forms'),
    ],
}
