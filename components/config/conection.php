<?php


define('servidor', 'sql108.infinityfree.com');
define('usuario', 'if0_37607652');
define('clave', 'D45ADMIN2024');
define('base_de_datos', 'if0_37607652_bd_nimusmarket');
define('puerto', '3306');

$conection = mysqli_connect(servidor, usuario, clave, base_de_datos, puerto);

if(!$conection){
    echo "<h1>No se pudo Conectar a la Base de datos</h1>";
}else{
   // echo "<h1>Hay conexion a la Base de datos</h1>";
}

?>



