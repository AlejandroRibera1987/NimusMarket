<?php
include_once('../../components/security/admin.php');
include_once('../../components/header.php');
include_once('../../components/config/conection.php');

if($conection != NULL){

    $id;

    if(isset($_GET['id'])){
        $id = mysqli_real_escape_string ($conection, $_GET['id']);

        $consulta = "SELECT `id_usuario`, `nombre`, `apellido`, `correo` FROM `usuarios` WHERE id_usuario = '$id'";
        $resultado = mysqli_query($conection, $consulta);

        $dato = mysqli_fetch_array($resultado);
        $nombre = $dato['nombre'];
        $apellido = $dato['apellido'];
        $correo = $dato['correo'];
    }



}


?>



<main>
        <div class="menu_admin">
            <ul>
                <li class="btn_primary"><a href="../index.php">Volver</a></li>
            </ul>
        </div>

        <div class="cards_eliminacion">
            <h2>Confirmacion de eliminacion</h2>
            <div class="nombre_usuario">
                <p><?php echo $nombre;?></p>
            </div>
            <div class="apellido_usuario">
                <p><?php echo $apellido;?></p>
            </div>
            <div class="correo_usuario">
                <p><?php echo $correo;?></p>
            </div>
            
            <a href="../index.php" class="btn_cancelar">Cancelar</a>
            <a href="eliminar_usuario_ok.php?id=<?php echo $id;?>" class="btn_aceptar">Eliminar</a>

        </div>
    </main>


<?php

include_once('../../components/footer.php');

?>