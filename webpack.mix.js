const mix = require("laravel-mix")
// this is only needed to make BrowserSync work with Laravel Valet and https
const homedir = require('os').homedir()
const domain = 'local-url.test'

mix
    .disableSuccessNotifications()
    .setPublicPath("public")
    .options({
        processCssUrls: false,
    })
    .browserSync({
        proxy: 'https://' + domain,
        host: domain,
        open: 'external',
        https: {
            key: homedir + '/.config/valet/Certificates/' + domain + '.key',
            cert: homedir + '/.config/valet/Certificates/' + domain + '.crt'
        },
        files: [
            'assets/css/**/*.css',
            'assets/js/**/*.js',
            'site/templates/**/*.php',
            'site/snippets/**/*.php',
        ],
    })

mix
    .js("src/js/main.js", "public/js")
    .postCss("src/css/main.css", "public/css", [
        require("tailwindcss"),
    ])
    .version()
