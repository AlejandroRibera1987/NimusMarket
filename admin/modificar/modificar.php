<?php

include_once('../../components/header.php');
include_once('../../components/config/conection.php');


    if($conection != NULL){
        $id;

        if(isset($_GET['id'])){

            $id = mysqli_real_escape_string ($conection, $_GET['id']);

            $consulta = "SELECT p.id_producto, p.nombre_producto, p.descripcion_producto, c.nombre_categoria, p.pais, p.precio, p.stock, p.img_producto
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
            $img_producto = $dato['img_producto'];

        }
    }

?>

    <main>
        <div class="menu_admin">
            <ul>
                <li class="btn_primary"><a href="../index.php">Ver Producto</a></li>
            </ul>
        </div>
        <div class="agregar_producto modificar_producto">
            <h2>Modificar Producto</h2>
            <form action="modificar_ok.php" method="post" enctype="multipart/form-data">
                
                <div class="form_modificar">
                    <label for="nombre">Producto</label>
                    <input type="text" id="nombre" name="nombre" value="<?php echo $nombre;?>">
                </div>
                <div class="form_modificar">
                    <label for="pais">Pais</label>
                    <input type="text" id="pais" name="pais" value="<?php echo $pais;?>">
                </div>
                <div class="form_modificar">
                    <label for="categoria">Categoria</label>
                    <?php ?>
                    <input type="text" id="categoria" name="categoria" value="<?php echo $categoria;?>">
                </div>
                <div class="form_modificar descripcion_modificar">
                    <label for="descripcion">Descripcion</label>
                    <textarea name="descripcion" id="descripcion"><?php echo $descripcion;?></textarea>
                </div>
                <div class="form_modificar">
                    <label for="precio">Precio</label>
                    <input type="number" id="precio" name="precio" value="<?php echo $precio;?>">
                </div>
                <div class="form_modificar">
                    <label for="stock">Inventario</label>
                    <input type="number" id="stock" name="stock" value="<?php echo $stock;?>">
                </div>
                <div class="form_modificar">
                    <label for="img_producto">Imagen</label>
                    <div class="img_modificar">
                        <img src="../../img_db/<?php echo $img_producto;?>" alt="Imagen del Producto">
                    </div>
                    <input type="file" accept="image/*" id="img_producto" name="img_producto">
                </div>
            </form>
        </div>
    </main>


<?php

    include_once('../../components/footer.php');

?>