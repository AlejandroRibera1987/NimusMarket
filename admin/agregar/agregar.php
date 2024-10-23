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
  



    if(isset($_GET['nombre']) || isset($_GET['pais']) || isset($_GET['categoria']) || isset($_GET['descripcion']) || isset($_GET['stock']) || isset($_GET['precio'])){


        $nombre = mysqli_real_escape_string ($conection,$_GET['nombre']);
        $pais = mysqli_real_escape_string ($conection,$_GET['pais']);
        $categoria = mysqli_real_escape_string ($conection,$_GET['categoria']);
        $descripcion = mysqli_real_escape_string ($conection,$_GET['descripcion']);
        $stock = mysqli_real_escape_string ($conection,$_GET['stock']);
        $precio = mysqli_real_escape_string ($conection,$_GET['precio']);

        //Guardamos la imagen
       // $temporal = $_FILES ['img_producto']['tmp_name'];
       // $nombreImg = $nombre . "_" . $categoria .".jpg";
    
      //  move_uploaded_file($temporal, "../../img_bd/$nombreImg");
    
        //Fin de Imagen Guardada

        //Guardo los datos

        $consulta = "INSERT INTO `productos`(`nombre_producto`, `descripcion_producto`, `pais`, `precio`, `stock`, `img_producto`) VALUES ('$nombre','$descripcion','$pais','$precio','$stock')";

        //Ejecutamos la Consulta

        mysqli_query($conection, $consulta);
    }
}

?>

    <main>
        <div class="agregar_producto">
            <h2>Agregar Producto</h2>
            <form action="agregar.php" method="get" enctype="multipart/form-data">
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
                            <option value="">Eliga Categoria</option>
                            <option value="oro">Oro</option>
                            <option value="plata">Plata</option>
                            <option value="bronce">Bronce</option>
                        </select>
                    </div>
                    <div class="descripcion_form">
                        <label for="descripcion">Descripcion</label>
                        <textarea name="descripcion" id="descripcion"></textarea>
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
                    <div class="precio_form">
                        <label for="precio">Precio</label>
                        <input type="number" id="precio" name="precio">
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