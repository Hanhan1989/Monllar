# Monllar
# Entorno con Docker 
### Ver docker en *_ajenos_a_laravel/docker_*
- framework: Laravel 5.7.17
- php: 7.3.0
- mariadb: 10.2

1. Run the application
```bash
    docker-compose up -d
```
2. Poner el servername en el fichero hosts
```
    local.monllar.com
```

3. El puerto de acceso a mysql es `127.0.0.1:3306`

4. We can change the ports of access in the docker-compose.yml file.

5. The php.ini configuration is in the folder conf-apache/custom_php.ini


Obs: 
I don't know why the containers didn't start, but with the fixes in the file Dockerfile-mysql, this problem was fixed.

### Datos acceso

Acceso al backoffice: 

- Email: monllar@monllar.com
- password: monllar

# Estructura del proyecto

- Dos grandes partes : frontal y admin

### Estructura de las carpetas css

Ponemos los ficheros creados por nosotros en resources y mapeados por el fichero gulpfile

- El comun.css es el fichero css que es común tanto para el backend (admin) y la parte frontal
- El comun-admin.css es el fichero css común para la parte admin
- El comun-frontal.css es el fichero css común para la parte frontal
- Cada página de la web tendrá su propio css y js si son necesarios. Por ejemplo, la página portada tiene frontal/portada.css
- Incluiremos los archivos que están en public para nuestras páginas

Recordar después del cambio de los archivos sass o typescript ejecutar

````bash
gulp

````

# Typescript

Los ficheros source están en 

````bash
resources/assets/typescript/monllar

````bash
Son mapeados por gulpefile a public/lib/monllar

````
public/lib/monllar

````

En las páginas web, usaremos los ficheros de esta dirección 

# Node y npm

[Instalar node](https://nodejs.org/es/download/) y luego ejecutar

````bash
npm intall

````

# Gulp

Instalar gulp-cli

````bash
npm install --global gulp-cli

````
y luego ejecutar
````bash
gulp

````

obs: en node version >= 10 puede aparecer el error `ReferenceError: internalBinding is not defined`

Ejecutar
````bash
npm install natives@1.1.6

````


# Migrar datos 

- php artisan migrate:fresh : para recrear tablas. Es útil cuando empezamos el proyecto
- Tener en cuenta las prioridades de creación de tablas

````php

// un perfil puede pertenecer a muchos usuarios y un usuario sólo un perfil.
// creamos la tabla usuarios y perfiles. Luego creamos su relación y hacemos esto en perfiles. Así establecemos prioridades.

 Schema::create('perfils', function (Blueprint $table) {
            $table->increments('id');
            $table->string('perfil');
            $table->string('descripcion');
            $table->timestamps();
        });

        Schema::table('usuarios', function($table){
            $table->foreign('id_perfil')->references('id')->on('perfils')->onDelete('cascade');
        });
````

# Seed tables

````
//Se ejecutarán las clases con orden que están en DatabaseSeeder.php

php artisan db:seed 

    public function run()
    {
        $this->call([
            PerfilesTableSeeder::class,
            UsersTableSeeder::class,
        ]);
    }


````

Comandos a usar para crear esquema y sembrar datos en la bbdd

`````bash
composer install // si se instalaron nuevas dependencias
composer dump-autoload // pillar los archivos de migrations
php artisan migrate:fresh // eliminar todas tablas y crearlas de nuevo
php artisan db:seed // sembrar contenido en las tablas


`````


## Sistema debug de Laravel Telescope

```bash
php artisan telescope:install
php artisan migrate
php artisan telescope:publish
```
El dashboard de debug está en `/telescope`

## Observaciones

Cambiar de nombre el fichero ".env.example" por ".env"
luego ejecutar desde la terminal de Laragon

````bash
$ php artisan key:generate
$ php artisan config:cache
$ php artisan route:clear
````

# Testing

## Tests funcionales: Selenium Webdriverio

## Requerimientos

- Instalar java y jdk

-npm version 6.4.1

-node version 10.14.2

## Ejecutar los tests funcionales

Para este proyecto, lo he instalado de forma local el servicio de selenium-standalone

````json
 "scripts": {
        "selenium-standalone": "selenium-standalone",
        "test": "wdio"
    }
````
o sea para inicializar el servicio Selenium usaremos (mirar la version del chromedriver en package.json)

````bash
// Descargar el chromedriver
npm run selenium install --drivers.chrome.version=2.43 --drivers.chrome.baseURL=https://chromedriver.storage.googleapis.com

// Iniciar el servicio selenium 
npm run selenium start

//Para ejecutar los test
npm run test
````

Ver los resultados
````bash
npm run report
````


Obs:

Alternativas opcionales al servicio selenium y chromedriver de npm y setear el script del package.json

Windows
````bash
// instalar scoop https://scoop.sh/  y luego
scoop install selenium
scoop install chromedriver
scoop install allure
````
Mac
````bash
brew install selenium-server-standalone
brew cask install chromedriver
brew install allure
````

## Tests unitarios con phpunit

Ejecutar los tests unitarios

```bash
phpunit --testdox
```