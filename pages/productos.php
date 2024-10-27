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
                <div class="producto_lista">
                    <div class="titulo_e_img">
                        <h2>Nombre de la moneda</h2>
                        <figure>
                            <img src="" alt="Imagen de moneda">
                        </figure>
                    </div>
                    <div class="descripcion_producto">
                        <p>Aca va la descripcion del producto</p>
                        <a href="" class="btn_producto">Ver Más</a>
                    </div>
                </div>
                <div class="producto_lista">
                    <div class="titulo_e_img">
                        <h2>Nombre de la moneda</h2>
                        <figure>
                            <img src="" alt="Imagen de moneda">
                        </figure>
                    </div>
                    <div class="descripcion_producto">
                        <p>Aca va la descripcion del producto</p>
                        <a href="" class="btn_producto">Ver Más</a>
                    </div>
                </div>
            </section>
        </div>
    </main>


<?php

include_once('../components/footer.php');

?>