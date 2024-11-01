<?php
include_once('../../components/security/admin.php');
include_once('../../components/header.php');
include_once('../../components/config/conection.php');


    if($conection != NULL){
        $id;

        if(isset($_GET['id'])){

            $id = mysqli_real_escape_string ($conection, $_GET['id']);

            $consulta = "SELECT u.id_usuario, u.nombre, u.apellido, u.correo, r.nombre_rol, u.clave, u.fk_rol
                FROM usuarios u
                INNER JOIN roles r ON u.fk_rol = r.id_rol
                WHERE u.id_usuario = '$id'";
            $resultado = mysqli_query($conection, $consulta);
            
            
            $dato = mysqli_fetch_array($resultado);
            $nombre = $dato['nombre'];
            $apellido = $dato['apellido'];
            $correo = $dato['correo'];
            $rol = $dato['nombre_rol'];
            $id_rol = $dato['fk_rol'];
            $clave = $dato['clave'];
            
        }
    }

?>

    <main>
        <div class="menu_admin">
            <ul>
                <li class="btn_primary"><a href="../index.php">Volver</a></li>
            </ul>
        </div>
        <div class="usuario_nuevo">
            <h2>Modificar Producto</h2>
            <?php
                if(isset($_GET['error'])){
                    echo "
                        <p class='alerta_error'>El Mail ya Existe</p>
                    ";
                }                
            ?>
            <form action="modificar_usuario_ok.php" method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
                <div class="nombres_usuarios">
                    <div class="nombre_usuario">
                        <input type="text" id="nombre" name="nombre" value="<?php echo $nombre; ?>" onfocus="this.value=''">
                    </div>
                    <div class="apellido_usuario">
                        <input type="text" id="apellido" name="apellido" value="<?php echo $apellido; ?>" onfocus="this.value=''">
                    </div>
                </div>
                <div class="correo_usuario">
                    <input type="email" id="correo" name="correo" value="<?php echo $correo; ?>" onfocus="this.value=''">
                </div>
                <div class="rol_usuario">
                    <select name="rol" id="rol">
                        <option value="<?php echo $id_rol; ?>"><?php echo $rol; ?></option>
                        <?php
                            $consulta_rol = mysqli_query($conection,"SELECT * FROM roles");
                            while($rol = mysqli_fetch_array($consulta_rol)){
                        ?>
                        <option value="<?php echo $rol['id_rol']; ?>"><?php echo $rol['nombre_rol']; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="claves">
                    <input type="text" id="calve" name="clave" value="Contraseña"
                    onfocus="this.type='password', this.value=''">
                </div>
                <div class="btn_usuario">
                    <input type="submit" value="Registrar Ahora">
                </div>
            </form>
        </div>
    </main>


<?php

    include_once('../../components/footer.php');

?>