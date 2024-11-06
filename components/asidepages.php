<?php
    include_once("config/conection.php");

    $consulta_categorias = "SELECT * FROM `categorias`";
    $resultado_categorias = mysqli_query($conection, $consulta_categorias);

?>
            <aside class="aside_categoria">
                <h2>Categorias</h2>
                <div class="lista">
                    <ul>

                    <?php
                        while($fila = mysqli_fetch_array($resultado_categorias)){
                            echo "<li><a href='../pages/productoscategoria.php?id=$fila[id_categoria]'>$fila[nombre_categoria]</a></li>";
                        }

                    ?>

                    </ul>
                </div>
                <h2>Ofertas</h2>
                <div class="lista">
                    <ul>
                        <li><a href="">Ofertas de la semana</a></li>
                        <li><a href="">Black Friday</a></li>
                        <li><a href="">Otras Ofertas</a></li>
                    </ul>
                </div>
            </aside>