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
    .js("src/js/main.js", "public/assets/js")
    .postCss("src/css/main.css", "public/assets/css", [
        require("tailwindcss"),
    ])
    .version()
