<?php
include_once('../../components/security/admin.php');
include_once('../../components/header.php');
include_once('../../components/config/conection.php');

?>

    <main>
        <div class="usuario_nuevo">
        <div class="menu_admin">
            <ul>
                <li class="btn_primary"><a href="../index.php">Volver</a></li>
            </ul>
        </div>
            <h2>Alta de Usuario</h2>
            <?php
                if(isset($_GET['pass'])){
                    echo"<p class='alerta_error'>Las Contraseñas no Coinciden</p>";
                }
                if(isset($_GET['correo'])){
                    echo"<p class='alerta_error'>El Correo ya existe</p>";
                }
                if(isset($_GET['ok'])){
                    echo"<p class='alerta_ok'>Ya se creo el usuario con exito</p>";
                }
            ?>
            <form action="../../components/security/alta_usuario.php" method="post">
                <div class="nombres_usuarios">
                    <div class="nombre_usuario">
                        <input type="text" id="nombre" name="nombre" value="Nombre" onfocus="this.value=''">
                    </div>
                    <div class="apellido_usuario">
                        <input type="text" id="apellido" name="apellido" value="Apellido" onfocus="this.value=''">
                    </div>
                </div>
                <div class="correo_usuario">
                    <input type="email" id="correo" name="correo" value="Email" onfocus="this.value=''">
                </div>
                <div class="rol_usuario">
                    <select name="rol" id="rol">
                        <option value="">Selecione un Rol</option>
                        <?php
                            $consulta_rol = mysqli_query($conection,"SELECT * FROM roles");
                            while($rol = mysqli_fetch_array($consulta_rol)){
                        ?>
                        <option value="<?php echo $rol['id_rol']; ?>"><?php echo $rol['nombre_rol']; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="claves">
                    <input type="text" id="calve1" name="clave1" value="Contraseña"
                    onfocus="this.type='password', this.value=''">
                </div>
                <div class="claves">
                    <input type="text" id="calve2" name="clave2" value="Confirmar Contraseña"
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