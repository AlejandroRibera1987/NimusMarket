<?php

include_once('../components/header.php');

?>

    <main>
        <div class="pages_productos">        
            <aside class="aside_categoria">
                <h2>Categorias</h2>
                <div class="lista">
                    <ul>
                        <li><a href="">Monedas de Oro</a></li>
                        <li><a href="">Monedas de Plata</a></li>
                        <li><a href="">Monedas de Bronce</a></li>
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
            <section class="productos">
                <div class="productos_lista">
                    <div class="cards_producto_lista">
                        <div class="titulo_img">
                            <h2>Nombre de la moneda</h2>
                            <figure>
                                <img src="../img/moneda1.jpg" alt="Foto de la moneda">
                            </figure>
                        </div>
                        <div class="descripcion_cards_producto">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem .</p>
                            <div class="categoria_precio_cards">
                                <p>Oro</p>
                                <p>$17367</p>
                            </div>
                        </div>
                    </div>
                    <div class="btn_cards_producto">
                        <a href="">Ver más</a>
                    </div>
                </div>
            </section>
        </div>
    </main>


<?php

include_once('../components/footer.php');

?>