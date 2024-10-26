<?php

include_once('../../components/header.php');
include_once('../../components/config/conection.php');

    if($conection != NULL){
        $id;
        if(isset($_GET['id'])){
            $id = mysqli_real_escape_string ($conection, $_GET['id']);

            $consulta = "SELECT `id_producto`, `nombre_producto`, `descripcion_producto`, `img_producto` FROM `productos` WHERE id_producto = '$id'";

            $resultado = mysqli_query($conection, $consulta);

            $dato = mysqli_fetch_array($resultado);

           
            $nombre = $dato['nombre_producto'];
            $descripcion = $dato['descripcion_producto'];
            $img_producto = $dato['img_producto'];
        }
    }


?>
    <main>
        <div class="menu_admin">
            <ul>
                <li class="btn_primary"><a href="../index.php">Ver Producto</a></li>
            </ul>
        </div>

        <div class="cards_eliminacion">
            <h2>Confirmacion de eliminacion</h2>
            <div class="nombre">
                <p><?php echo $nombre;?></p>
            </div>
            <div class="descripcion">
                <p><?php echo $descripcion;?></p>
            </div>
            <div>
                <img src="../../img_db/<?php echo $img_producto ?>" alt="Imagen a Eliminar">
            </div>
            
            <a href="../index.php" class="btn_cancel">Cancelar</a>
            <a href="eliminar_ok.php?id=<?php echo $id;?>" class="btn_aceptar">Eliminar</a>

        </div>
    </main>





<?php

include_once('../../components/footer.php');

?>