<?php

include_once('../components/header.php');
include_once('../components/config/conection.php');

if($conection != NULL) {

    $consulta = "SELECT `id_producto`, `nombre_producto`, `descripcion_producto`, `fk_categoria`, `pais`, `precio`, `stock` FROM `productos`";

    $resultado = mysqli_query ($conection,$consulta);
}

?>

    <main>
        <div class="menu_admin">
            <ul>
                <li class="btn_primary"><a href="agregar/agregar.php">Agregar Producto</a></li>
                <li class="btn_primary"><a href="">Usuario</a></li>
                <li class="btn_primary"><a href="">Categorias</a></li>
            </ul>
        </div>

        <div class="tabla_productos">
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
                    <tr>
                        <?php
                            while($fila = mysqli_fetch_array($resultado)) {
                        echo "
                        <td><?php echo $fila[id_producto];?></td>
                        <td><?php echo $fila[nombre_producto];?></td>
                        <td><?php echo $fila[descripcion_producto];?></td>
                        <td><?php echo $fila[fk_categoria];?></td>
                        <td><?php echo $fila[pais];?></td>
                        <td>$<?php echo $fila[precio];?></td>
                        <td><?php echo $fila[stock];?> Un.</td>
                        <td><img src='../img/moneda_index.jpg' alt='Fotos Moneda' class='img_tabla'></td>
                        <td>
                            <a href="" class='tabla_acciones'><img src='../img/modificar.png' alt="" class='img_acciones'></a>
                            <a href="" class='tabla_acciones'><img src='../img/eliminar.png' alt="" class='img_acciones'></a>
                        </td>
                        ";
                                
                            } 
                        ?>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>




<?php

include_once('../components/footer.php')

?>