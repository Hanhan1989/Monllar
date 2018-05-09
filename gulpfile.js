var elixir   = require('laravel-elixir');


elixir(function(mix) {
    mix.sass('comun.scss', 'public/css/comun.css');
    mix.sass('frontal/portada.scss', 'public/css/frontal/portada.css');
    mix.sass('admin/portada.scss', 'public/css/admin/portada.css');
});