<?php
$usuario = $_POST["usuario"];
$contraseña = $_POST["contraseña"];
session_start();
$_SESSION["usuario"]=$usuario;

$conexion=mysqli_connect("localhost", "root", "", "usuario");

$consulta="SELECT * FROM usuario where usuario='$usuario' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas = mysqli_num_rows($resultado);

if($filas){
    header("location:home.php");
}
else{
    ?>
    <?php
    include("index.php");
    ?>
    <h1 class="bad">ERROR EM LA AUTENTICACIÓN</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<header>
    
</header>
<body>
</body>
</html>