<?php
include_once('../../components/security/admin.php');
include_once('../../components/header.php');
include_once('../../components/config/conection.php');


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
        <div class="menu_admin">
            <ul>
                <li class="btn_primary"><a href="../index.php">Volver</a></li>
            </ul>
        </div>
        <div class="agregar_producto modificar_producto">
            <h2>Modificar Producto</h2>
            <form action="modificar_ok.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
                <div class="nombre_pais">
                    <div class="nombre_form">
                        <input type="text" id="nombre" name="nombre" value="<?php echo $nombre;?>">
                    </div>
                    <div class="pais_form">
                        <input type="text" id="pais" name="pais" value="<?php echo $pais;?>">
                    </div>
                </div>
                <div class="categoria_form">
                    <select name="categoria" id="categoria">
                        <option value="<?php echo $id_categoria?>"><?php echo $categoria;?></option>
                        <?php 
                            $consulta_categoria = mysqli_query($conection,"SELECT * FROM categorias");
                            while($seccion = mysqli_fetch_array($consulta_categoria)){
                        ?>
                            <option value="<?php echo $seccion['id_categoria'];?>"><?php echo $seccion['nombre_categoria'];?></option>
                        <?php } ?>
                    </select>
                </div>    
                <div class="descripcion_form">
                    <label for="descripcion">Descripcion</label>
                    <textarea name="descripcion" id="descripcion"><?php echo $descripcion;?></textarea>
                </div>
                <div class="precio_stock">
                    <div class="precio_form">
                        <label for="precio">Precio</label>
                        <input type="text" id="precio" name="precio" value="$<?php echo $precio;?>">
                    </div>
                    <div class="stock_form">
                        <label for="stock">Inventario</label>
                        <input type="text" id="stock" name="stock" value="<?php echo $stock;?>">
                    </div>
                </div>
                <div class="img_form">
                    <label for="img_producto">Imagen</label>
                    <div class="img_modificar">
                        <img src="../../img_db/<?php echo $img_producto;?>" alt="Imagen del Producto">
                    </div>
                    <input type="file" accept="image/*" id="img_producto" name="img_producto">
                </div>
                <div class="btn_form">
                    <input type="submit" value="Modificar" >
                </div>
            </form>
        </div>
    </main>


<?php

    include_once('../../components/footer.php');

?>