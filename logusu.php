<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/styles.css">
    <title>Login</title>
  </head>
  <body class="registro-body">
    <?php require('header.php'); ?>

    <br>
    <br>

    <p><h3 class="registro">Entrá, para poder contratar servicios</h3></p>
<br>
<br>
<br>
<br>
<br>

<div class="form">
  <form class="" action="perfil.php" method="post">
    <!--<p class="blanco">Nombre Completo:</p>-->
      <p><input class="redondeadocolor" type="text" name="nombre" value="" placeholder="Nombre">
      <input class="redondeadocolor" type="text" name="apellido" value="" placeholder="Apellido"></p>
      <br>
	  <input class="redondeadocolor" type="text" name="nombreusu" value="" placeholder="Usuario (obligat)"></p>
      <br>
      <br>
	  <p><input class="redondeadocolor" type="email" name="email" value="" placeholder="E-mail"></p>
      <br>
      <!--<p class="blanco">Eleg� tu contrase�a</p>-->
      <p><input class="redondeadocolor" type="password" name="pass" value=""placeholder="Ingresá tu contraseña "></p>
      <br>
      <br>
      <br>
      <br>
      <input class="boton-registro"type="submit" name="enviar" value="Ingresar como usuario">
  </form>
  <br><br>
</div>
    <?php require('footer.php'); ?>

  </body>
</html>
