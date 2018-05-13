# Monllar
### Requerimientos
- framework: Laravel 5.3
- php 7.1
- mysql 5.7

# Estructura del proyecto

- Dos grandes partes : frontal y admin

### Estructura de las carpetas css

Pondremos los ficheros creados por nosotros en resources y mapeados por el fichero gulpfile

- El comun.css es el fichero css que es común tanto para el backend (admin) y la parte frontal
- El comun-admin.css es el fichero css común para la parte admin
- El comun-frontal.css es el fichero css común para la parte frontal
- Cada página de la web tendrá su propio css y js si son necesarios. Por ejemplo, la página portada tiene frontal/portada.css
- Incluiremos los archivos que están en public para nuestras páginas

Recordar después del cambio de los archivos sass o typescript ejecutar

````
gulp

````

# Typescript

Los ficheros source están en 

````
resources/assets/typescript/monllar

````

Son mapeados por gulpefile a public/lib/monllar

````
public/lib/monllar

````

En las páginas web, usaremos los ficheros de esta dirección 

# Gulp

Instalar gulp-cli

````

npm install --global gulp-cli

````

Instalar modululos node

````
npm intall

````

## Observaciones

Cambiar de nombre el fichero ".env.example" por ".env"
luego ejecutar desde la terminal de Laragon

````
$ php artisan key:generate
$ php artisan config:cache
$ php artisan route:clear
````