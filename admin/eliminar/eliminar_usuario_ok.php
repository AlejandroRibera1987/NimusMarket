<?php

include_once('../../components/security/admin.php');
include_once('../../components/config/conection.php');

    if($conection != NULL){

        $id;

        if(isset($_GET['id'])){

            $id = mysqli_real_escape_string ($conection, $_GET['id']);

            $consulta = "DELETE FROM `usuarios` WHERE id_usuario = '$id'";

            mysqli_query ($conection,$consulta);

            header("Location: ../index.php?eliminarusuario=ok");

        }

    }


?>