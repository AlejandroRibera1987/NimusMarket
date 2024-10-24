<?php

include_once('../../components/header.php');
include_once('../../components/config/conection.php');


    if($conection != NULL){
        $id;

        if(isset($_GET['id'])){

            $id = mysqli_real_escape_string ($conection, $_GET['id']);

            $consulta = "SELECT * FROM `productos` WHERE id_producto = '$id'";
            $resultado = mysqli_query($conection, $consulta);

            
            $dato = mysqli_fetch_array($resultado);
            $nombre = $dato['nombre_producto'];
            $descripcion = $dato['descripcion_producto'];
            $pais = $dato['pais'];
            $precio = $dato['precio'];
            $stock = $dato['stock'];
            $categoria = $dato['fk_categoria'];

        }
    }

?>

    <main>
        <div class="menu_admin">
            <ul>
                <li class="btn_primary"><a href="../index.php">Ver Producto</a></li>
            </ul>
        </div>
        <div class="agregar_producto">
            <h2>Modificar Producto</h2>
            <form action="agregar.php" method="post" enctype="multipart/form-data">
                
                <div class="form_1">
                    <div class="nombre_form">
                        <label for="nombre">Nombre</label>
                        <input type="text" id="nombre" name="nombre" value="<?php echo $nombre;?>">
                    </div>
                    <div class="pais_form">
                        <label for="pais">Pais</label>
                        <input type="text" id="pais" name="pais" value="<?php echo $pais;?>">
                    </div>
                </div>
                    <div class="categoria_form">
                        <label for="categoria">Categoria</label>
                        <input type="text" id="categoria" name="categoria">
                    </div>
                    <div class="descripcion_form">
                        <label for="descripcion">Descripcion</label>
                        <textarea name="descripcion" id="descripcion"><?php echo $descripcion;?></textarea>
                    </div>
                    <div class="precio_form">
                        <label for="precio">Precio</label>
                        <input type="number" id="precio" name="precio" value="<?php echo $precio;?>">
                    </div>
                <div class="form_1">
                    <div class="img_form">
                        <label for="img_producto">Imagen del Producto</label>
                        <input type="file" accept="image/*" id="img_producto" name="img_producto">
                    </div>
                    <div class="stock_form">
                        <label for="stock">Inventario</label>
                        <input type="number" id="stock" name="stock" value="<?php echo $stock;?>">
                    </div>
                </div>
                <div class="btn_form">
                    <input type="submit" value="Cargar" >
                </div>
            </form>
        </div>
    </main>


<?php

    include_once('../../components/footer.php');

?>