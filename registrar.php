<?php
    include("bd.php");

    if (strlen($_POST['nombre']) <1 &&
        strlen($_POST['apellido']) <1 &&
        strlen($_POST['usuario']) <1 &&
        strlen($_POST['correo']) <1 &&
        strlen($_POST['contarseña']) <1 &&
        strlen($_POST['submit']) <1) {

    }
?>