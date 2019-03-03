# Sonarqube

Parece que el archivo sonar.properties no hace ningún efecto. Como solución ponemos los properties en forma de variables globales.

## Sonar Scanner

Un ejecutable en el host del proyecto del código fuente. Procesa el código. y lo envía al servidor donde está el servicio sonarqube levantado. El tcp de este servidor está en el archivo sonar-scanner.properties. Es importante mantener el mismo nombre del fichero.

Cada vez que hay cambios ejecutar:

````bash
cd /var/www/html
sonar-scanner
````

# Observaciones 

El mysql socket está en la carpeta /tmp. Ejemplo de uso:

````php
<?php

$dsn = 'mysql:unix_socket=/tmp/mysql.sock;dbname=monllar';
$nombre_usuario = 'monllar';
$contraseña = 'monllar';
$opciones = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
); 

$gbd = new PDO($dsn, $nombre_usuario, $contraseña, $opciones);
$gbd->exec("CREATE TABLE CUSTOMERS(    ID   INT              NOT NULL,    NAME VARCHAR (20)     NOT NULL,    AGE  INT              NOT NULL,    ADDRESS  CHAR (25) ,    SALARY   DECIMAL (18, 2),           PRIMARY KEY (ID) );");
?>

````