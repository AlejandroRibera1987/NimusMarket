<?php
session_start();
include_once('../config/conection.php');

if($conection != NULL){
    $id;
    $id_usuario = $_SESSION['id_usuario'];



    if(isset($_GET['id'])){

        $id = mysqli_real_escape_string ($conection, $_GET['id']); 

        $consulta = "DELETE FROM carrito WHERE fk_producto='$id' AND fk_usuario = '$id_usuario'";


        mysqli_query ($conection,$consulta);

        header("Location: ../../pages/carritocompras.php?eliminarproducto=ok");
    }
}



?>