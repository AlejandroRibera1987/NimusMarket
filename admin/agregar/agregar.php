<?php

include_once('../../components/header.php')

?>

    <main>
        <div class="agregar_producto">
            <h2>Agregar Producto</h2>
            <form action="agregar.php" method="get">
                <div class="form_1">
                    <div class="nombre_form">
                        <label for="nombre">Nombre</label>
                        <input type="text" id="nombre">
                    </div>
                    <div class="pais_form">
                        <label for="pais">Pais</label>
                        <input type="text" id="pais">
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
                        <input type="file" id="img_producto">
                    </div>
                    <div class="stock_form">
                        <label for="stock">Inventario</label>
                        <input type="number" id="stock">
                    </div>
                </div>

                <div class="btn_form">
                    <input type="submit" value="Cargar" >
                </div>
            </form>
        </div>
    </main>



<?php

include_once('../../components/footer.php')

?>