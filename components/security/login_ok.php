<?php

include_once('../../components/config/conection.php');


if($conection != NULL){

    $usuario;
    $clave;

    if(isset($_POST['usuario']) and isset($_POST['clave'])){

        $usuario = mysqli_real_escape_string($conection,$_POST['usuario']);
        $clave = mysqli_real_escape_string($conection,$_POST['clave']);

        $consulta = "SELECT * FROM usuarios WHERE correo = '$usuario'";

        $resultado = mysqli_query($conection, $consulta);

        $dato = mysqli_fetch_array($resultado);

        if($dato == NULL){
           header('Location: ../../pages/login.php?log=no');
        }

        $consulta_dos = "SELECT * FROM usuarios WHERE correo='$usuario' AND clave=MD5('$clave')";
        $resultado_dos = mysqli_query($conection,$consulta_dos);
        $datos_dos = mysqli_fetch_array($resultado_dos);

        if($datos_dos == NULL){
            header('Location: ../../pages/login.php?pass=no');
        }else{
            header('Location: ../../admin/index.php');
        }

    }


}

?>