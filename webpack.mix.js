const mix = require("laravel-mix")

mix.setPublicPath("public/assets")

mix.browserSync({
    proxy: "anotherkit.test",
    files: ["public/assets/**/*.css", "public/assets/**/*.js", "site/**/*.php", "content/**/*.txt"],
})

mix
    .sourceMaps()
    .js("src/js/main.js", "public/assets/js")
    .sass("src/css/main.scss", "public/assets/css")
    .options({
        processCssUrls: false
    })
    .version()
