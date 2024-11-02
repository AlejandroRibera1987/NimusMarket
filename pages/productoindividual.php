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
        <?php include_once('../components/asidepages.php');?>
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
                        <form action="../components/security/agregar_carrito.php" method="get">
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                            <div class="cantidad">
                                <label for="cantidad">Cantidad</label>
                                <select name="cantidad" id="cantidad">
                                    <?php
                                        for ($i=1; $i <= $stock; $i++) { 
                                            echo "
                                                <option value=$i>$i</option>
                                            ";
                                        }
                                    ?>

                                </select>
                                
                            </div>
                        <br><br>
                            <div class="btn_moneda">
                                <a href="productos.php">Volver</a>
                                <input type="submit" value="Agregar">
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    
    </main>


<?php

include_once('../components/footer.php');

?>