<?php
echo "Modificasion exitosa";
include_once('../../components/config/conection.php');

    if($conection != NULL){

        $id;
        $nombre;
        $descripcion;
        $pais;
        $precio;
        $stock;
        $categoria;

        if(isset($_POST['id']) and isset($_POST['nombre']) and isset($_POST['pais']) and isset($_POST['descripcion']) and isset($_POST['categoria']) and isset($_POST['precio']) and isset($_POST['stock'])){


            $id = mysqli_real_escape_string($conection, $_POST['id']);
            $nombre = mysqli_real_escape_string($conection, $_POST['nombre']);
            $pais = mysqli_real_escape_string($conection, $_POST['pais']);
            $descripcion = mysqli_real_escape_string($conection, $_POST['descripcion']);
            $categoria = mysqli_real_escape_string($conection, $_POST['categoria']);
            $precio = mysqli_real_escape_string($conection, $_POST['precio']);
            $stock = mysqli_real_escape_string($conection, $_POST['stock']);


            if($_FILES['img_producto']){
                //Guardamos la imagen
                $temporal = $_FILES ['img_producto']['tmp_name'];
                $nombreImg = $nombre . "_" . $categoria .".jpg";
            
                move_uploaded_file($temporal, "../../img_db/$nombreImg");
        
                //Fin de Imagen Guardada
                
                $consutla = "UPDATE `productos` SET `nombre_producto`='$nombre',`descripcion_producto`='$descripcion',`pais`='$pais',`precio`='$precio',`stock`='$stock',`img_producto`='$nombreImg',`fk_categoria`='$categoria' WHERE id_producto = '$id'";

                mysqli_query($conection, $consutla);

                header('Location: ../index.php');

            }else{
                $consutla = "UPDATE `productos` SET `nombre_producto`='$nombre',`descripcion_producto`='$descripcion',`pais`='$pais',`precio`='$precio',`stock`='$stock',`fk_categoria`='$categoria' WHERE id_producto = '$id'";

                mysqli_query($conection, $consutla);

                header('Location: ../index.php.php');
            }

          
        }



    }




?>