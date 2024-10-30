<?php

include_once('../components/header.php');

?>

    <main>
        <section class="login">
            <h2>Inicio de sesión</h2>
            <figure>
                <img src="../img/userlogin.png" alt="imagen Login">
            </figure>
            <form action="login_ok.php" method="post">
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
        </section>
    </main>

<?php

include_once('../components/footer.php');

?>