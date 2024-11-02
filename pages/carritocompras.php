<?php

    session_start();

    if(isset($_SESSION['id_usuario'])){
        include_once('../components/header.php');
    }else{
        header('Location: login.php');
    }
    include_once('../components/config/conection.php');
    include_once('../components/header.php');

    if($conection != NULL){

        $consulta = "SELECT * FROM `carrito`";

        $resultado = mysqli_query($conection, $consulta);

        $dato = mysqli_fetch_array($resultado);

    }


?>

    <main>

        <div class="menu_admin">
            <ul>
                <li class="btn_primary"><a href="agregar/agregar.php">A Cambiar</a></li>
                <li class="btn_primary"><a href="usuario/agregar_usuario.php">A Cambiar</a></li>
            </ul>
        </div>
        <div class="carrito_compras">
            <div class="cards_carrito">
                <div class="img_carrito">
                    <figure>
                        <img src="../img_db/EstadosUnidos.webp.jpg" alt="Moneda del carrito">
                    </figure>
                </div>
                <div class="nombre_carrito">
                    <p>Nombre de la moneda del carritos</p>
                </div>
                <div class="cantidad_carrito">
                    <p>25 Un.</p>
                </div>
                <div class="precio_carrito">
                    <p>$250</p>
                </div>
            </div>

            <div class="cards_descripcion_carrito">
                <h2>Resumen de compra</h2>
                <div class="productos_totales">
                    <p>Productos totales</p>
                    <p>$2500</p>
                </div>
                <div class="envio_carrito">
                    <p>Envío</p>
                    <p>$100</p>
                </div>
                <div class="total_carrito">
                    <p>Total</p>
                    <p>$2600</p>
                </div>
                <div class="btn_carrito">
                    <a href="">Terminar Compra</a>
                </div>
            </div>
        </div>
    </main>


<?php
    include_once('../components/footer.php');
?>