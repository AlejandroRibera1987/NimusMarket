<?php

include_once('../components/header.php');
include_once('../components/config/conection.php');

?>

    <main>
        <div class="menu_admin">
            <ul>
                <li class="btn_primary"><a href="agregar/agregar.php">Agregar Producto</a></li>
                <li class="btn_primary"><a href="">Agregar Usuario</a></li>
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
                        <td>1212</td>
                        <td>Croacia</td>
                        <td>Moneda de europa</td>
                        <td>Oro</td>
                        <td>Croacia</td>
                        <td>$20393</td>
                        <td>100</td>
                        <td><img src="../img/moneda_index.jpg" alt="Fotos Moneda" class="img_tabla"></td>
                        <td>
                            <a href="" class="tabla_acciones"><img src="../img/modificar.png" alt="" class="img_acciones"></a>
                            <a href="" class="tabla_acciones"><img src="../img/eliminar.png" alt="" class="img_acciones"></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>




<?php

include_once('../components/footer.php')

?>