<?php

include('components/header.php');

?>

<main>
        <div class="fondo_index">
            <div class="section_1_index">
                <div class="oferta_index">
                    <p>Oferta de la Semana</p>
                    <h2>MONEDA DE CROACIA - 1 KUNA</h2>
                    <p>Año 2003 Ruiseñor</p>
                    <div class="btn_primary">
                        <a href="">Comprar Ahora</a>
                    </div>
                </div>
                <div class="img_oferta">
                    <figure>
                        <img src="img/moneda_index.jpg" alt="Foto de la Oferta">
                    </figure>
                </div>
            </div>
        </div>

        <div class="mas_vendidos">
            <div class="titulo_vendidos">
                <h2>MAS VENDIDOS</h2>
                <div class="btn_primary">
                    <a href="">Ver todo</a>
                </div>
            </div>

            <div class="card_vendidos">
                <div class="cards_productos">
                    <figure>
                        <img src="img/moneda1.jpg" alt="Producto mas vendido">
                        <p>Moneda Austriaca 1817</p>
                        <p><span>$5,562</span></p>
                    </figure>
                    <div class="btn_primary">
                        <a href="">Agregar</a>
                    </div>
                </div>
                <div class="cards_productos">
                    <figure>
                        <img src="img/moneda2.jpg" alt="Producto mas vendido">
                        <p>Moneda Austriaca 1817</p>
                        <p><span>$5,562</span></p>
                    </figure>
                    <div class="btn_primary">
                        <a href="">Agregar</a>
                    </div>
                </div>
                <div class="cards_productos">
                    <figure>
                        <img src="img/moneda3.jpg" alt="Producto mas vendido">
                        <p>Moneda Austriaca 1817</p>
                        <p><span>$5,562</span></p>
                    </figure>
                    <div class="btn_primary">
                        <a href="">Agregar</a>
                    </div>
                </div>
                <div class="cards_productos">
                    <figure>
                        <img src="img/moneda4.jpg" alt="Producto mas vendido">
                        <p>Moneda Austriaca 1817</p>
                        <p><span>$5,562</span></p>
                    </figure>
                    <div class="btn_primary">
                        <a href="">Agregar</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="categorias">
            <h2>CATEGORIAS</h2>
            <div class="cards_categorias">
                <div class="oro">
                    <a href="pages/productoscategoria.php?id=1">
                        <figure>
                            <img src="img/MonedaOro.jpg" alt="Categoria Oro" class="imagen_zoom">
                            <p>ORO</p>
                        </figure>
                    </a>
                </div>
                <div class="plata">
                    <a href="pages/productoscategoria.php?id=2">
                        <figure>
                            <img src="img/MonedaPlata.jpg" alt="Categoria Plata" class="imagen_zoom">
                            <p>PLATA</p>
                        </figure>
                    </a>
                </div>
                <div class="bronce">
                    <a href="pages/productoscategoria.php?id=3">
                        <figure>
                            <img src="img/MonedaBronce.jpg" alt="Categoria Bronce" class="imagen_zoom">
                            <p>BRONCE</p>
                        </figure>
                    </a>
                </div>
            </div>
        </div>
    </main>

<?php

    include('components/footer.php');

?>