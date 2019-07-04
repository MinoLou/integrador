<?php
$paises = [
"00" => "",
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

    <p><h3 class="registro">Registrate acá para poder contratar servicios</h3></p>
<br>
<br>
<br>
<br>
<br>

<div class="form">
  <form class="" action="regusuaction.php" method="post" enctype="multipart/form-data">
    <!--<p class="blanco">Nombre Completo:</p>-->
      <p><input class="redondeadocolor" type="text" name="nombre" value="<?php isset($_POST['$nom']) ? $_POST['$nom'] : ' ';?>" placeholder="Nombre">
      <input class="redondeadocolor" type="text" name="apellido" value="<?php isset($_POST['$apel']) ? $_POST['$apel'] : ' ';?>" placeholder="Apellido"></p>
      <br>
      <br>
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
      <br>
	  <!--<p class="blanco">Elegí tu Nombre de Usuario:</p>-->
      <p><input class="redondeadocolor" type="text" name="nombreusu" value="<?php isset($_POST['$nombreusu']) ? $_POST['$nombreusu'] : ' ';?>" placeholder="Nombre de Usuario"></p>
      <br>
       <!--<p class="blanco">Elegí tu País:</p>-->
      <p class="blanco">Nacionalidad</p>
      <p><select class="redondeadocolor" type="text" name="pais" value="<?= $key ?>" <?php isset($_POST['$pais']) && $_POST['$pais'] == $key ? 'selected' : ''; ?>    placeholder="Elegí un país"></p>
          <?php foreach ($paises as $key => $pais) : ?>
            <?php if($_GET['paises'] == $key) : ?>
            <option value="<?=$key?>" selected><?=$pais?>
            </option>
          <?php else : ?>
            <option value="<?=$key?>"><?=$pais?>
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
      <p><input class="redondeadocolor" type="email" name="email" value="<?php isset($_POST['$email']) ? $_POST['$email'] : ' ';?>" placeholder="E-mail"></p>
      <br>
      <!--<p class="blanco">Elegí tu contraseña</p>-->
      <p><input class="redondeadocolor" type="password" name="password" value=""placeholder="Elegí tu contraseña "></p>
      <br>
      <!--<p class="blanco">Confirmá la contraseña, por favor</p>-->
      <p><input class="redondeadocolor" type="password" name="rePassword" value="" placeholder="Reconfirmá tu contraseña acá"></p>
      <br>
      <br>
	  <label for="archivo">Imagen de perfil (jpg, bmp): </label>
		<input type="file" name="archivo"><br>
      <input class="boton-registro"type="submit" name="enviar" value="Registrarme">
  </form>
  <br><br>
</div>
    <?php require('footer.php'); ?>

  </body>
</html>
