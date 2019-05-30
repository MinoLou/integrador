<?php
if ($_POST && strlen($_POST["user"]) == 0){
   echo "Completa el usuario, por favor";
 }

 ?>
 
 <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <title>Proyecto</title>
    	<link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
<header class="container">
<nav>
  <ul>
    <li><a id="logo" href="nosotros">Construworld</a></li>
    <li><a class="nav1" href="preguntas.php">Preguntas Frecuentes</a></li>
    <li><a class="nav1" href="servicios.php">Servicios</a></li>
    <li><a class="nav1" href="registro.php">Registracion</a></li>
    <li><a class="nav1" href="login.php">Login</a></li>
  </ul>
</nav>
</header>
<h2></h2>
<section class="container">

<form class="" action="index.html" method="post">
  User <input type="text" name="user" value="">
  Password <input type="password" name="password" value="">
  <input type="submit" name="enviar" value="Enviar">

</form>

</section>
<br><br><br><br><br><br><br><br><br><br><br>
<footer>
  <a class="foot" href="contacto.php">Contacto</a>
</footer>
  </body>
</html>
