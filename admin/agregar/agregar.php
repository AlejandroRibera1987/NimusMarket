<?php

include_once('../../components/header.php');
include_once('../../components/config/conection.php');

if($conection != NULL) {
    $nombre;
    $pais;
    $categoria;
    $descripcion;
    $stock;
    $precio;


    if(isset($_POST['nombre']) and isset($_POST['pais']) and isset($_POST['categoria']) and isset($_POST['descripcion']) and isset($_POST['stock']) and isset($_POST['precio'])){


        $nombre = mysqli_real_escape_string ($conection,$_POST['nombre']);
        $pais = mysqli_real_escape_string ($conection,$_POST['pais']);
        $categoria = mysqli_real_escape_string ($conection,$_POST['categoria']);
        $descripcion = mysqli_real_escape_string ($conection,$_POST['descripcion']);
        $stock = mysqli_real_escape_string ($conection,$_POST['stock']);
        $precio = mysqli_real_escape_string ($conection,$_POST['precio']);

        
        //Guardamos la imagen
        $temporal = $_FILES ['img_producto']['tmp_name'];
        $nombreImg = $nombre . "_.jpg";
    
        move_uploaded_file($temporal, "../../img_db/$nombreImg");
    
        //Fin de Imagen Guardada

        //Guardo los datos

        $consulta = "INSERT INTO `productos`(`nombre_producto`, `descripcion_producto`, `pais`, `precio`, `stock`, `img_producto`, `fk_categoria`) VALUES ('$nombre','$descripcion','$pais','$precio','$stock', '$nombreImg', '$categoria')";

        //Ejecutamos la Consulta

        mysqli_query($conection, $consulta);

        header('Location: ../index.php?ok=ok');
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
            <h2>Agregar Producto</h2>
            <form action="agregar.php" method="post" enctype="multipart/form-data">
                <div class="form_1">
                    <div class="nombre_form">
                        <label for="nombre">Nombre</label>
                        <input type="text" id="nombre" name="nombre">
                    </div>
                    <div class="pais_form">
                        <label for="pais">Pais</label>
                        <input type="text" id="pais" name="pais">
                    </div>
                </div>
                    <div class="categoria_form">
                        <label for="categoria">Categoria</label>

                        <select name="categoria" id="categoria">
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
                        <textarea name="descripcion" id="descripcion"></textarea>
                    </div>
                    <div class="precio_form">
                        <label for="precio">Precio</label>
                        <input type="number" id="precio" name="precio">
                    </div>
                <div class="form_1">
                    <div class="img_form">
                        <label for="img_producto">Imagen del Producto</label>
                        <input type="file" accept="image/*" id="img_producto" name="img_producto">
                    </div>
                    <div class="stock_form">
                        <label for="stock">Inventario</label>
                        <input type="number" id="stock" name="stock">
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