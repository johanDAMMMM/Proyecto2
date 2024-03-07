
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/estilo.css">
</head>
<body>

<form class="login-form" method="post">
  <p class="login-text">
    <span class="fa-stack fa-lg">
      <i class="fa fa-circle fa-stack-2x"></i>
      <i class="fa fa-lock fa-stack-1x"></i>
    </span>
  </p>
  <input type="text" class="login-firstname" name="nombre" required="true" placeholder="Nombre" />
  <input type="text" class="login-lastname" name="apellido" required="true" placeholder="Apellido" />
  <input type="text" class="login-username" name="usuario" required="true" placeholder="Usuario" />
  <input type="email" class="login-email" name="correo" autofocus="true" required="true" placeholder="Correo" />
  <input type="password" class="login-password" name="contraseña" required="true" placeholder="Contraseña" minlength="5" maxlength="15"/>
  <button type="submit" name="submit" value="Registrar" class="login-submit"> Registrar</button>
</form>
<div class="underlay-photo"></div>
<div class="underlay-black"></div>
<?php
  include("registrar.php");
?>

</body>
</html>
