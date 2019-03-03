# Sonarqube

Parece que el archivo sonar.properties no hace ningún efecto. Como solución ponemos los properties en forma de variables globales




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