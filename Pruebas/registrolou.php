<?php
$nacionalidades = [
"00" => " ",
"AR" => "Argentina",
"UY" => "Uruguay",
"BR" => "Brasil",
"PY" => "Paraguay",
"CH" => "Chile "
];
 ?>

<?php
if ($_POST) {
  if (strlen($_POST['$nombre']) == 0) {
    echo "El nombre es un dato obligatorio <br>";
  }
  if (strlen($_POST['$errorApellido']) == 0) {
    echo "El apellido es un dato obligatorio <br>";
  }
  if (strlen($_POST['$usuario']) < 8) {
    echo "El usuario debe tener al menos 8 caracteres <br>";
  }
    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) == false) {
    echo "Formato de mail incorrecto <br>";
  }//
}
 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registro</title>
    </head>
  <body class="registro-body">
  <?php require('header.php'); ?>
  <h3 class="registro">Registrate acá para que todos puedan contar con tus servicios</h3>
    <form class="" action="registroLou.php" method="POST">
      <div class="dato">
        <label for="">Nombre:</label>
        <input class="redondeadocolor" type="text" name="nombre" value="" placeholder="Completá tu nombre">
      </div>
      <div class="dato">
        <label for="">Apellido:</label>
        <input class="redondeadocolor" type="text" name="apellido" value="" placeholder="Completá tu apellido">
      </div>
      <div class="opcion">
        <label class="dato" for="">Sexo</label>
        <input type="radio" name="sexo" value="f">Femenino
        <input type="radio" name="sexo" value="m">Masculino
        <input type="radio" name="sexo" value="o">Otro
      </div>
        <div class="dato">
        <label for="">Usuario: </label>
        <input class="redondeadocolor" type="text" name="nombreusu" value="" placeholder="Elige un nombre de usuario">
      </div>
      <div class="dato">
        <label for="">Email:</label>
        <input class="redondeadocolor" type="email" name="email" value="" placeholder="Completa tu email">
      </div>
      <div class="opcion">
        <label class="dato" for="">Elegí tu profesión:</label>
          <input type="checkbox" name="profesion" value="A">Arquitect@
          <input type="checkbox" name="profesion" value="P">Plomer@
          <input type="checkbox" name="profesion" value="M">Maestr@ Mayor de Obras
          <input type="checkbox" name="profesion" value="G">Gasista@
          <input type="checkbox" name="profesion" value="E">Electricist@
          <input type="checkbox" name="profesion" value="C">Carpintero@
      </div>
      <div class="">
        <label class="dato" for="">Nacionalidad:</label><select class="redondeadocolor" type="text" name="pais" value="" placeholder="Elegí un país"></p>
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
      </div>
      <div class="boton">
        <input class="botonRegistro" type="submit" name="" value="Enviar">
      </div>
    </form>
  </body>
</html>
<?php require('footer.php'); ?>
