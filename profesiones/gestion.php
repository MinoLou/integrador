<?php
require_once 'header.php'; 			//Es un copy-paste, no queda otra que replicarlo en este directorio (carpeta).
require_once '../serviceList.php';
  ?>

<!-- Servicios -->
  <?php 
		session_start();
		if(isset($_SESSION["usuario"])){
			echo "Hola, "; 
			echo ($_SESSION["nombre"]); echo "<br>";
  }?>
<html>
	<p class="registro">Gestión de usuario <?= $_SESSION['nombre']?> con <?=$_GET['profesion']?> <?=$_GET['nombre']?></p>
</html>

<?php
if(isset($_SESSION["usuario"])){
echo "<html>
	<form action='../log1.php'>
	<input type='submit' name='cerrar' value='cerrar'>
</html>";
} ?>

<?php require('footer.php'); ?>
