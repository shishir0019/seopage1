const mix = require("laravel-mix");

mix.copy("resources/js/main.js", "public/js").copy("resources/css/client.css", "public/css")