<?php

include_once('../components/header.php');
include_once('../components/config/conection.php');

if($conection != NULL){
    $id;

    if(isset($_GET['id'])){

        $id = mysqli_real_escape_string ($conection, $_GET['id']);

        $consulta = "SELECT p.id_producto, p.nombre_producto, p.descripcion_producto, c.nombre_categoria, p.pais, p.precio, p.stock, p.img_producto, p.fk_categoria
        FROM productos p
        INNER JOIN categorias c ON p.fk_categoria = c.id_categoria
        WHERE p.id_producto = '$id'";
        $resultado = mysqli_query($conection, $consulta);
        
        
        $dato = mysqli_fetch_array($resultado);
        $nombre = $dato['nombre_producto'];
        $descripcion = $dato['descripcion_producto'];
        $pais = $dato['pais'];
        $precio = $dato['precio'];
        $stock = $dato['stock'];
        $categoria = $dato['nombre_categoria'];
        $id_categoria = $dato['fk_categoria'];
        $img_producto = $dato['img_producto'];
        
    }
}

?>


    <main>
        <div class="pages_productos">
            <aside class="aside_categoria">
                <h2>Categorias</h2>
                <div class="lista">
                    <ul>
                        <li><a href="">Monedas de Oro</a></li>
                        <li><a href="">Monedas de Plata</a></li>
                        <li><a href="">Monedas de Bronce</a></li>
                    </ul>
                </div>
                <h2>Ofertas</h2>
                <div class="lista">
                    <ul>
                        <li><a href="">Ofertas de la semana</a></li>
                        <li><a href="">Black Friday</a></li>
                        <li><a href="">Otras Ofertas</a></li>
                    </ul>
                </div>
            </aside>
            <section class="productos">
                <div class="moneda_individual">
                    <div class="datos_monedas">
                        <h2><?php echo $nombre ?></h2>
                        <div class="img_moneda">
                            <figure>
                                <img src="../img_db/<?php echo $img_producto;?>" alt="Foto de moneda">
                            </figure>
                        </div>
                        <div class="descripcion_moneda">
                            <p><?php echo $descripcion;?></p>
                            <div class="precio_categoria">
                                <p><?php echo $pais;?></p>
                                <p><?php echo $categoria;?></p>
                                <p>$<?php echo $precio;?></p>
                            </div>
                        </div>
                        <div class="btn_moneda">
                            <a href="productos.php">Volver</a>
                            <a href="">Agregar</a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    
    </main>


<?php

include_once('../components/footer.php');

?>