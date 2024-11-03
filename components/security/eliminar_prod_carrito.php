<?php

include_once('../config/conection.php');

if($conection != NULL){
    $id;

    if(isset($_GET['id'])){

        $id = mysqli_real_escape_string ($conection, $_GET['id']); 

        $consulta = "DELETE FROM carrito WHERE fk_producto='$id'";


        mysqli_query ($conection,$consulta);

        header("Location: ../../pages/carritocompras.php?eliminarproducto=ok");
    }
}



?>