const mix = require("laravel-mix")
const tailwindcss = require('tailwindcss')

mix.setPublicPath("assets")

mix.browserSync({
    proxy: "anotherkit.test",
    files: ["assets/**/*.css", "assets/**/*.js", "site/**/*.php"],
})

mix
    .sourceMaps()
    .js("src/js/main.js", "assets/js")
    .sass("src/css/main.scss", "assets/css")
    .options({
        processCssUrls: false,
        postCss: [tailwindcss('./tailwind.config.js')],
    })
    .version()
