<?php

include_once('../components/header.php');
include_once('../components/config/conection.php');

if($conection != NULL) {

    $consulta = "SELECT p.id_producto, p.nombre_producto, p.descripcion_producto, c.nombre_categoria, p.pais, p.    precio, p.stock, p.img_producto
                FROM productos p
                INNER JOIN categorias c ON p.fk_categoria = c.id_categoria";

    $resultado = mysqli_query ($conection,$consulta);

    
}

?>

    <main>
        <div class="menu_admin">
            <ul>
                <li class="btn_primary"><a href="agregar/agregar.php">Agregar Producto</a></li>
                <li class="btn_primary"><a href="usuario/agregar_usuario.php">Agregar Usuario</a></li>
                <li class="btn_primary"><a href="">Categorias</a></li>
            </ul>
        </div>
        
        <div class="tabla_productos">
            <?php
                if(isset($_GET['modificacion'])){
                    echo"<p class='alerta_ok'>Se a modificado el producto Correctamente</p>";
                }
                if(isset($_GET['modificacionno'])){
                    echo"<p class='alerta_error'>Se a asdadasdasda el producto Correctamente</p>";
                }
                if(isset($_GET['Eliminar'])){
                    echo"<p class='alerta_error'>Se elimino el producto Correctamente</p>";
                }
            ?>
            <h2>Productos</h2>
            <table>
                <thead>
                    <tr>
                        <th>Codigo</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Categoria</th>
                        <th>Pais</th>
                        <th>Precio</th>
                        <th>inventario</th>
                        <th>Imagen</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    
                        <?php
                            while($fila = mysqli_fetch_array($resultado)) {
                        echo "
                        <tr>
                            <td>$fila[id_producto]</td>
                            <td>$fila[nombre_producto]</td>
                            <td>$fila[descripcion_producto]</td>
                            <td>$fila[nombre_categoria]</td>
                            <td>$fila[pais]</td>
                            <td>$ $fila[precio]</td>
                            <td>$fila[stock] Un.</td>
                            <td><img src='../img_db/$fila[img_producto]' alt='Fotos Moneda' class='img_tabla'></td>
                            <td>
                                <a href='modificar/modificar.php?id=$fila[id_producto]' class='tabla_acciones'><img src='../img/modificar.png' alt='' class='img_acciones'></a>
                                <a href='eliminar/eliminar.php?id=$fila[id_producto]' class='tabla_acciones'><img src='../img/eliminar.png' alt='' class='img_acciones'></a>
                            </td>
                        <tr>
                        ";
                                
                            } 
                        ?>
                    
                </tbody>
            </table>
        </div>
    </main>




<?php

include_once('../components/footer.php')

?>