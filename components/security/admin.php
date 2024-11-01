<?php

session_start();

if(!isset($_SESSION) OR $_SESSION['fk_rol'] != 1)
    die("Error 404!!!");
?>