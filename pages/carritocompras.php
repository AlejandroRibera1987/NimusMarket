<?php

    session_start();

    if(isset($_SESSION['id_usuario'])){
        include_once('../components/header.php');
    }else{
        header('Location: login.php');
    }

    include_once('../components/header.php');
?>

    <main>
        
    </main>


<?php
    include_once('../components/footer.php');
?>