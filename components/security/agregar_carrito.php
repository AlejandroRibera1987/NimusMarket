<?php
    include_once('../config/conection.php');

    if($conection != NULL) {
        $id;
        $cantidad;

        if(isset($_GET['id']) and isset($_GET['cantidad'])){
            $id = mysqli_real_escape_string($conection, $_GET['id']);
            $cantidad = mysqli_real_escape_string($conection, $_GET['cantidad']);

            $consulta = "SELECT * FROM productos WHERE id_producto = '$id'";

            $resultado = mysqli_query($conection, $consulta);

            $dato = mysqli_fetch_assoc($resultado);
            
            $nombre = $dato['nombre_producto'];
            $precio = $dato['precio'];
            $img_producto = $dato['img_producto'];

            $agregar_carrito = "INSERT INTO `carrito`(`carrito_nombre`, `carrito_cantidad`, `carrito_precio`, `carrito_img`, `fk_producto`) VALUES ('$nombre','$cantidad','$precio','$img_producto','$id')";

            $insertar_carrito = mysqli_query($conection, $agregar_carrito);

            if($insertar_carrito) {
                header('Location: ../../pages/carritocompras.php');
            } else {
                header('Location:../pages/carrito.php?agregar=no');
            }
        }
    }

?>