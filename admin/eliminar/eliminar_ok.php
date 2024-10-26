<?php

include_once('../../components/config/conection.php');

if($conection != NULL){
    $id;

    if(isset($_GET['id'])){

        $id = mysqli_real_escape_string ($conection, $_GET['id']); 

        $consulta = "DELETE FROM productos WHERE id_producto='$id'";


        mysqli_query ($conection,$consulta);

        header("Location: ../index.php?eliminar=ok");
    }
}



?>