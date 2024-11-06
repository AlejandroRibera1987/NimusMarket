<?php

include_once('../../components/config/conection.php');


if($conection != NULL) {

    $nombre;
    $apellido;
    $correo;
    $clave1;
    $clave2;

    if(isset($_POST['nombre']) and isset($_POST['apellido']) and isset($_POST['correo']) and isset($_POST['clave1']) and isset($_POST['clave2'])){

        $nombre = mysqli_real_escape_string($conection,$_POST['nombre']);
        $apellido = mysqli_real_escape_string($conection,$_POST['apellido']);
        $correo = mysqli_real_escape_string($conection,$_POST['correo']);
        $clave1 = mysqli_real_escape_string($conection,$_POST['clave1']);
        $clave2 = mysqli_real_escape_string($conection,$_POST['clave2']);

        if($clave1 == $clave2){
            
            $consulta = "SELECT * FROM `usuarios` WHERE correo ='$correo'";
            $resultado = mysqli_query($conection,$consulta);

            if(mysqli_num_rows($resultado) > 0){
                header("Location: ../../pages/registrousuario.php?correo=no");
            }else {
                $insertar = "INSERT INTO `usuarios`(`nombre`, `apellido`, `correo`, `clave`, `fk_rol`) VALUES ('$nombre','$apellido','$correo',MD5('$clave1'), 2)";
                mysqli_query($conection,$insertar);
                header('Location: ../../pages/login.php');
            }

        }else{
            header('Location: ../../pages/registrousuario.php?pass=no');
        }

    }





}

?>