<?php
include_once('../../components/security/admin.php');
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
        $nombre_img_original = $_FILES['img_producto']['name'];
        $nombreImg = $nombre_img_original . ".jpg";
    
        move_uploaded_file($temporal, "../../img_db/$nombreImg");
    
        //Fin de Imagen Guardada

        //Guardo los datos

        $consulta = "INSERT INTO `productos`(`nombre_producto`, `descripcion_producto`, `pais`, `precio`, `stock`, `img_producto`, `fk_categoria`) VALUES ('$nombre','$descripcion','$pais','$precio','$stock', '$nombreImg', '$categoria')";

        //Ejecutamos la Consulta

        mysqli_query($conection, $consulta);

        header('Location: ../index.php?productook=ok');
    }else{
        //header('Location: ../index.php?no=ok');
    }
            
    
}

?>

    <main>
        <div class="menu_admin">
            <ul>
                <li class="btn_primary"><a href="../index.php">Volver</a></li>
            </ul>
        </div>

        <div class="agregar_producto">
            <h2>Agregar Producto</h2>
            <form action="agregar.php" method="post" enctype="multipart/form-data">
                <div class="nombre_pais">
                    <div class="nombre_form">
                        <input type="text" id="nombre" name="nombre" value="Nombre" onfocus="this.value=''">
                    </div>
                    <div class="pais_form">
                        <input type="text" id="pais" name="pais" value="Pais" onfocus="this.value=''">
                    </div>
                </div>
                <div class="categoria_form">
                    <select name="categoria" id="categoria">
                        <option value="">Seleccione Categoria</option>
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
                <div class="precio_stock">
                    <div class="precio_form">
                        <input type="text" id="precio" name="precio" value="Precio" onfocus="this.value=''">
                    </div>
                    <div class="stock_form">
                        <input type="text" id="stock" name="stock" value="Stock" onfocus="this.value=''">
                    </div>
                </div>                
                <div class="img_form">
                    <label for="img_producto">Imagen del Producto</label>
                    <input type="file" accept="image/*" id="img_producto" name="img_producto">
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