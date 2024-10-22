<?php


define('servidor', 'localhost');
define('usuario', 'root');
define('clave', '');
define('base_de_datos', 'bdcoins');
define('puerto', '3306');

$conection = mysqli_connect(servidor, usuario, clave, base_de_datos, puerto);

if(!$conection){
    echo "<h1>No se pudo Conectar a la Base de datos</h1>";
}else{
    echo "<h1>Hay conexion a la Base de datos</h1>";
}




?>



