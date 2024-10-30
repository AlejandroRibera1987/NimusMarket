<?php

include_once('../components/header.php');

$alerta = "";

if(isset($_GET['log'])){
    $alerta = "<p class='alerta_error'>El usuario no existe, Registrate</p>";
}
if(isset($_GET['pass'])){
    $alerta = "<p class='alerta_error'>Contraseña o Usuario incorrecto</p>";
}

?>

    <main>
        <section class="login">
            <h2>Inicio de sesión</h2>
            <figure>
                <img src="../img/userlogin.png" alt="imagen Login">
            </figure>
            <form action="../components/security/login_ok.php" method="post">
                <div class="usuario">
                    <input type="text" id="usuario" name="usuario" value="Usuario" onfocus="this.value=''">
                </div>
                <div class="clave">
                    <input type="text" id="clave" name="clave" value="Contraseña" onfocus="this.type='password', this.value=''">
                </div>
                <div class="btn_login">
                    <input type="submit" value="Ingresar">
                </div>
                <div class="registrate">
                    <p>No te has registrado</p>
                    <p>Hace click <a href="">aqui!</a></p>
                </div>
            </form>
            <?php echo $alerta;?>
        </section>
    </main>

<?php

include_once('../components/footer.php');

?>