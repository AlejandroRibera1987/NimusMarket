<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
   // var_dump($_SESSION);
    $rol = isset($_SESSION['fk_rol']) ? $_SESSION['fk_rol'] : null;
    $nombre = isset($_SESSION['nombre']) ? $_SESSION['nombre'] : null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/generalStyle.css">
    <link rel="stylesheet" href="../../css/styleAdmin.css">
    <link rel="stylesheet" href="../../css/stylePages.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="icon" href="../../img/icono.ico" type="image/x-icon">
    <title>NumisMarket</title>
</head>
<body>
    <header>
        <div class="logo">
            <figure>
                <a href="../index.php"><img src="../../img/logo.png" alt="Logo de numisMarket"></a>
            </figure>
        </div>
        <div class="menu">
            <nav>
                <ul>
                    <li><a href="../pages/productos.php">Productos</a></li>
                    <li><a href="">Ofertas</a></li>
                    <?php
                        if($rol == 1){
                            echo "<li><a href='../admin/index.php'>Administración</a></li>";
                        }
                        if($rol == 1 OR $rol == 2){
                            echo "
                                <li class='link_usuario'>
                                    <figure>
                                        <img src='../../img/user.png' alt='Contacto'>
                                    </figure>
                                    <a href='../components/security/logout.php'>Cerrar Sesión<br>$nombre</a>
                                </li>
                            ";

                        }else{
                            echo"
                                <li class='link_usuario'>
                                    <figure>
                                        <img src='../../img/user.png' alt='Contacto'>
                                    </figure>
                                    <a href='../pages/login.php'>Entrar</a>
                                </li>
                            ";
                        }
                    ?>
                    <li>
                        <figure>
                            <a href="../pages/carritocompras.php">
                                <img src="../../img/carrito.png" alt="Carrito de compras">
                            </a>
                        </figure>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

