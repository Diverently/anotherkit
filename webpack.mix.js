const mix = require("laravel-mix")

mix.setPublicPath("public")

mix.options({
    processUrls: false,
})

mix
    .js("src/js/main.js", "public/js")
    .postCss("src/css/main.css", "public/css", [
        require("tailwindcss"),
    ])
    .version()
