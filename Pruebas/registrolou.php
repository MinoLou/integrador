<?php
$nacionalidades = [
"AR" => "Argentina",
"UY" => "Uruguay",
"BR" => "Brasil",
"PY" => "Paraguay",
"CH" => "Chile "
];
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/styles.css">
    <title>Registro</title>
  </head>
  <body class="registro-body">
    <?php require('header.php'); ?>

    <br>
    <br>

    <p><h3 class="registro">Registrate acá para que todos puedan contar con tus servicios</h3></p>
<br>
<br>
<br>
<br>
<br>

<div class="form">
  <form class="" action="registroaction.php" method="post">
    <!--<p class="blanco">Nombre Completo:</p>-->
      <p><input class="redondeadocolor" type="text" name="nombre" value="" placeholder="Nombre">
      <input class="redondeadocolor" type="text" name="apellido" value="" placeholder="Apellido"></p>
      <br>
    <!--<p class="blanco">Elegí tu Nombre de Usuario:</p>-->
      <p><input class="redondeadocolor" type="text" name="nombreusu" value="" placeholder="Usuario">
      <br>
      <br>
      <p class="blanco">Elegí tu profesión</p>
      <select class="redondeadocolor" name="profesion">
        <option value="arquitecto">Arquitect@</option>
        <option value="plomero">Plomer@</option>
        <option value="maestro mayor de obra">Maestr@ mayor de Obr@</option>
        <option value="gasista">Gasist@</option>
        <option value="electricista">Electricist@</option>
      </select>
      <br>
      <br>
      <p class="blanco">Sexo:</p>
      <!--<input type="radio" name="genero" value="male" checked> Masculino<br>
      <input type="radio" name="genero" value="female"> Femenino<br>
      <input type="radio" name="genero" value="other"> Otro-->

      <select class="redondeadocolor" name="sexo">
        <option value="Masculino">Masculino</option>
        <option value="Femenino">Femenino</option>
        <option value="Otro">Otro</option>
      </select>
      <br>
      <br>
      <!--<p class="blanco">Elegí tu País:</p>-->
      <p class="blanco">Nacionalidad</p>
      <p><select class="redondeadocolor" type="text" name="pais" value="" placeholder="Elegí un país"></p>
          <?php foreach ($nacionalidades as $key => $nacionalidad) : ?>
            <?php if($_GET['nacionalidades'] == $key) : ?>
            <option value="<?=$key?>" selected><?=$nacionalidad?>
            </option>
          <?php else : ?>
            <option value="<?=$key?>"><?=$nacionalidad?>
            </option>
          <?php endif; ?>
          <?php endforeach; ?>
        </select>
      <br>
      <br>
      <!--<p class="blanco">Fecha de Nacimiento:</p>-->
      <!--<p><input class="redondeadocolor" type="text" name="fecha-nacimiento" value="" placeholder="Fecha de Nacimiento"></p>
      <br>-->
      <!--<p class="blanco">Completá con tu E-mail:</p>-->
      <p><input class="redondeadocolor" type="email" name="email" value="" placeholder="E-mail"></p>
      <br>
      <!--<p class="blanco">Elegí tu contraseña</p>-->
      <p><input class="redondeadocolor" type="password" name="password" value=""placeholder="Elegí tu contraseña "></p>
      <br>
      <!--<p class="blanco">Confirmá la contraseña, por favor</p>-->
      <p><input class="redondeadocolor" type="password" name="rePassword" value="" placeholder="Reconfirmá tu contraseña acá"></p>
      <br>
      <br>
      <input class="boton-registro"type="submit" name="enviar" value="Registrarme">
  </form>
  <br><br>
</div>
    <?php require('footer.php'); ?>

  </body>
</html>