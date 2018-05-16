var elixir   = require('laravel-elixir');
require('laravel-elixir-typescript');

elixir(function(mix) {
    mix.sass('comun.scss', 'public/css/comun.css');
    mix.sass('comun-frontal.scss', 'public/css/comun-frontal.css');
    mix.sass('comun-admin.scss', 'public/css/comun-admin.css');
    mix.sass('frontal/portada.scss', 'public/css/frontal/portada.css');
    mix.sass('frontal/ficha_producto.scss', 'public/css/frontal/ficha_producto.css');
    mix.sass('frontal/user_login.scss', 'public/css/frontal/user_login.css');
    mix.sass('frontal/user_registro.scss', 'public/css/frontal/user_registro.css');
    mix.sass('admin/portada.scss', 'public/css/admin/portada.css');
    mix.sass('admin/user_login.scss', 'public/css/admin/user_login.css');
    mix.sass('admin/productoCreate.scss', 'public/css/admin/productoCreate.css');
    mix.typescript('monllar/Texto.ts', 'public/lib/monllar/Texto.js');
});