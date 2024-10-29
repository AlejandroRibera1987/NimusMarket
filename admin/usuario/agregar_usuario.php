<?php

include_once('../../components/header.php');

?>

    <main>
        <div class="usuario_nuevo">
            <h2>Alta de Usuario</h2>
            <form action="alta_usuario.php" method="post">
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
                        <option value="">Seleccionar Rol</option>
                        <option value="Admin">Administrador</option>
                        <option value="Usuario">Usuario</option>
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