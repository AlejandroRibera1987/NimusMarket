<?php
include_once('../../components/config/conection.php');

    if($conection != NULL){

        $id;
        $nombre;
        $descripcion;
        $pais;
        $precio;
        $stock;
        $categoria;

        if(isset($_POST['id']) and isset($_POST['nombre']) and isset($_POST['pais']) and isset($_POST['descripcion']) and isset($_POST['categoria']) and isset($_POST['precio']) and isset($_POST['stock'])){


            $id = mysqli_real_escape_string($conection, $_POST['id']);
            $nombre = mysqli_real_escape_string($conection, $_POST['nombre']);
            $pais = mysqli_real_escape_string($conection, $_POST['pais']);
            $descripcion = mysqli_real_escape_string($conection, $_POST['descripcion']);
            $categoria = mysqli_real_escape_string($conection, $_POST['categoria']);
            $precio = mysqli_real_escape_string($conection, $_POST['precio']);
            $stock = mysqli_real_escape_string($conection, $_POST['stock']);

            $consulta_img_actual = "SELECT img_producto FROM productos WHERE id_producto = '$id'";
            $resultado_img_actual = mysqli_query($conection, $consulta_img_actual);

            $img_producto = $resultado_img_actual;

            if($_FILES['img_producto'] && $_FILES['img_producto']['error']){
                $temporal = $_FILES['img_producto']['tmp_name'];
                
                $nombreImg = $nombre . "_.jpg";

                move_uploaded_file($temporal, "../../img_db/$nombreImg");
                    
                $img_producto = $nombreImg;

                $consulta_modificacion = "UPDATE `productos` SET `nombre_producto`='$nombre', `descripcion_producto`='$descripcion', `pais`='$pais', `precio`='$precio', `stock`='$stock', `img_producto`='$img_producto', `fk_categoria`='$categoria' WHERE `id_producto` = '$id'";
    
                mysqli_query($conection, $consulta_modificacion);
        
                header('Location: ../index.php');
            }
            else{
                echo "No se pudo move la imagen";
            }
            $consulta_modificacion = "UPDATE `productos` SET `nombre_producto`='$nombre', `descripcion_producto`='$descripcion', `pais`='$pais', `precio`='$precio', `stock`='$stock', `fk_categoria`='$categoria' WHERE `id_producto` = '$id'";
    
            mysqli_query($conection, $consulta_modificacion);
    
            header('Location: ../index.php');
        }


    }




?>