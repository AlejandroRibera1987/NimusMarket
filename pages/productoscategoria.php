<?php

include_once('../components/header.php');
include_once('../components/config/conection.php');

if($conection != NULL){
    $id;

    if(isset($_GET['id'])){

        $id = mysqli_real_escape_string ($conection, $_GET['id']);

        $consulta = "SELECT p.id_producto, p.nombre_producto, p.descripcion_producto, c.nombre_categoria, p.pais, p.precio, p.stock, p.img_producto, p.fk_categoria
        FROM productos p
        INNER JOIN categorias c ON p.fk_categoria = c.id_categoria
        WHERE `fk_categoria` = '$id';";

        $resultado = mysqli_query($conection, $consulta);
        
        if($id == 1){
            $categoria = "Oro";
        }if($id == 2) {
            $categoria = "Plata";
        }if($id == 3){
            $categoria = "Bronce";
        }

       

    }
}

?>

<main>
        <div class="pages_productos">        
            <?php include_once('../components/asidepages.php');?>
            <section class="productos">
                <h2 class="titulo_categorias">Monedas de <?php echo $categoria; ?></h2>
                <?php 
                    while($fila = mysqli_fetch_array($resultado) ){
                        echo "
                            <div class='productos_lista'>
                                <div class='cards_producto_lista'>
                                    <div class='titulo_img'>
                                        <h2>$fila[nombre_producto]</h2>
                                        <figure>
                                            <img src='../img_db/$fila[img_producto]' alt='Foto de la moneda'>
                                        </figure>
                                    </div>
                                    <div class='descripcion_cards_producto'>
                                        <p>$fila[descripcion_producto]</p>
                                        <div class='categoria_precio_cards'> 
                                            <p>$fila[nombre_categoria]</p>                                           
                                            <p>$$fila[precio]</p>
                                        </div>
                                    </div>
                                </div>
                                <div class='btn_cards_producto'>
                                    <a href='productoindividual.php?id=$fila[id_producto]'>Ver más</a>
                                </div>
                            </div>
                        ";
                    }
                ?>
            </section>
        </div>
    </main>

<?php

include_once('../components/footer.php');

?>