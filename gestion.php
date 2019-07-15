<?php
require_once 'header.php'; 			//Es un copy-paste, no queda otra que replicarlo en este directorio (carpeta).
require_once 'serviceList.php';
  ?>

<!-- Servicios -->
<html>
	<p class="registro">Gestión de usuario <?= $_SESSION['nombre']?> con <?=$_GET['profesion']?> <?=$_GET['nombre']?></p>
	
	<div class="contenedor-imagenes-perfil">
		<img height="50px" src="images/bill_gates.jpg" alt="Usuario" class="profile-picture">
		<img height="50px" src="images/bill_gates.jpg" alt="Usuario" class="profile-picture">
	</div>
	
	<form method="post" action="formulario.php" style="margin-left: 30px;">
    <label for="">Enviar mensaje a prestador: </label></br>
    <input id="mensaje" type="text" name="mensaje" maxlength="100" style="height: 100px;">
    </p>
    <p>
    <input id="enviar" type="submit" value="Enviar">
    </p>
  </form>
	
</html>

<?php require('footer.php'); ?>
