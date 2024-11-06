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

        $id_usuario = $_SESSION['id_usuario'];

        $consulta = "SELECT * FROM `carrito` where fk_usuario = '$id_usuario'";

        $resultado = mysqli_query($conection, $consulta);

        

        $consulta_total = "Select SUM(carrito_precio * carrito_cantidad) AS precio_total FROM carrito";
        $resultado_consulta_total = mysqli_query($conection, $consulta_total);
        $total_fila = mysqli_fetch_assoc($resultado_consulta_total);
        $total_precio = $total_fila['precio_total'];
        $costo_envio = 100;
        $total_final = $total_precio + $costo_envio;
    }


?>

    <main>

        <div class="menu_admin">
            <ul>
                <li class="btn_primary"><a href="agregar/agregar.php">A Cambiar</a></li>
                <li class="btn_primary"><a href="usuario/agregar_usuario.php">A Cambiar</a></li>
            </ul>
        </div>
        <div class="container_carrito">
            <div class="carrito_compras">
                
                <div class="articulos_carrito">
                    <?php
                        while($fila = mysqli_fetch_array($resultado)){
                            echo "
                                
                                <div class='cards_carrito'>
                                        <div class='img_carrito'>
                                            <figure>
                                                <img src='../img_db/$fila[carrito_img]' alt='Moneda del carrito'>
                                            </figure>
                                        </div>
                                    <div class='nombre_carrito'>
                                        <p>$fila[carrito_nombre]</p>
                                        <div class='opciones_carrito'>
                                            <ul>
                                                <li><a href='../components/security/eliminar_prod_carrito.php?id=$fila[fk_producto]'>Eliminar</a></li>
                                                <li><a href=''>Guardar</a></li>
                                                <li><a href=''>Comprar ahora</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class='cantidad_carrito'>
                                        <p>$fila[carrito_cantidad] Un.</p>
                                    </div>
                                    <div class='precio_carrito'>
                                        <p>$ $fila[carrito_precio]</p>
                                    </div>                   
                                </div>
                            
                            ";
                        }
                    ?>
                </div>
                
    
                <div class="cards_descripcion_carrito">
                    <h2>Resumen de compra</h2>
                    <div class="productos_totales">
                        <p>Productos</p>
                        <p>$<?php echo number_format($total_precio, 2); ?></p>
                    </div>
                    <div class="envio_carrito">
                        <p>Envío</p>
                        <p>$<?php echo number_format($costo_envio, 2);?></p>
                    </div>
                    <div class="descuento_carrito">
                        <a href="">Ingrese código de cupón</a>
                    </div>
                    <br>
                    <hr>
                    <div class="total_carrito">
                        <p>Total</p>
                        <p>$<?php echo number_format($total_final, 2);?></p>
                    </div>
                    <div class="btn_carrito">
                        <a href="../components/security/compraterminada.php?id=<?php echo $dato['id_carrito'];?>">Terminar Compra</a>
                    </div>
                </div>
            </div>
        </div>
    </main>


<?php
    include_once('../components/footer.php');
?>