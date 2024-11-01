<?php
include_once('../../components/security/admin.php');
include_once('../../components/config/conection.php');

    if($conection != NULL) {
        $id;
        $nombre;
        $apellido;
        $correo;
        $rol;
        $clave;

        if(isset($_POST['id']) and isset($_POST['nombre']) and isset($_POST['apellido']) and isset($_POST['correo']) and isset($_POST['rol'])){

            $id = mysqli_real_escape_string($conection,$_POST['id']);
            $nombre = mysqli_real_escape_string($conection,$_POST['nombre']);
            $apellido = mysqli_real_escape_string($conection,$_POST['apellido']);
            $correo = mysqli_real_escape_string($conection,$_POST['correo']);
            $rol = mysqli_real_escape_string($conection,$_POST['rol']);
            $clave = mysqli_real_escape_string($conection,MD5($_POST['clave']));


            $consulta_usuario = "SELECT * FROM `usuarios`
                                                 WHERE (nombre = '$nombre' AND id_usuario != '$id')
                                                 OR (correo = '$correo' AND id_usuario != '$id')";

            $resultado_usuario = mysqli_query($conection, $consulta_usuario);

            if(mysqli_fetch_array($resultado_usuario) > 0){
                header('Location: ../index.php?mail=no');
            }else{
                if(empty($_POST['clave'])){
                    $actualizar_usuario = mysqli_query($conection, "UPDATE `usuarios` SET `nombre`='$nombre',`apellido`='$apellido',`correo`='$correo',`fk_rol`='$rol' WHERE id_usuario = '$id'");

                    header('Location: ../index.php?ok=err');
                }else{
                    $actualizar_usuario = mysqli_query($conection, "UPDATE `usuarios` SET `nombre`='$nombre',`apellido`='$apellido',`correo`='$correo', `clave`='$clave', `fk_rol`='$rol' WHERE id_usuario = '$id'");
                    
                    header('Location: ../index.php?ok=err');
                }
            }


        }
    }


?>