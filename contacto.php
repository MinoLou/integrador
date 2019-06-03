<?php require('header.php'); ?>

<div>
  <form method="post" action="formulario.php">
    <p>
    <br><label for="nombre">Nombre: </label>
    <input id="nombre" type="text" name="nombre">
    </p>
    <p>
    <label for="">E - mail : </label>
    <input id="email" type="text" name="email">
    </p>
    <p>
    <label for="">Mensaje: </label>
    <input id="mensaje" type="text" name="mensaje">
    </p>
    <p>
    <input id="enviar" type="submit" value="Enviar">
    </p>
  </form>
</div>

<?php require('footer.php'); ?>
