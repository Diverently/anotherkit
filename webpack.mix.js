const mix = require("laravel-mix")

mix.setPublicPath("public/assets")

mix.browserSync({
    host: "anotherkit.test",
    proxy: "anotherkit.test",
    open: "external",
    notify: false,
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
