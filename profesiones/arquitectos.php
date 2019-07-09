<?php
require_once 'header.php'; 			//Es un copy-paste, no queda otra que replicarlo en este directorio (carpeta).
require_once '../serviceList.php';
  ?>

<!-- Servicios -->
  <?php 
		session_start();
		if(isset($_SESSION["usuario"])){
			echo "Variables de sesión<br>"; 
			echo ($_SESSION["nombre"]); echo "<br>";
			echo ($_SESSION["usuario"]); echo "<br>";
			echo ($_SESSION["pais"]); echo "<br>";
			echo ($_SESSION["email"]); echo "<br>";
  }?>
<html>
	<p class="registro">Listado de arquitectos</p>
	<div style="margin-left: 20px;">

<?php
	//Lectura de archivo y chequeo de existencia previa de usuario

	$json_previo = file_get_contents("../prestadores.json"); //Tomo el contenido del JSON

	if($json_previo){	//Si hay al menos un usuario
		$previo = json_decode($json_previo, true); //Paso de JSON a array asociativo. Hay que ponerle true para que devuelva arrays asoc y no objetos
		
		foreach($previo as $valor){
			if($valor['profesion'] == 'arquitecto'){
				echo "<p style='font-size: 20px'>". $valor['nombre'] . "<p><br>";
				echo "<p style='font-size: 12px'>". $valor['pais'] . "<p><br>";
				echo "<p style='font-size: 12px'>". "Puntuación: " . "<p><br>";
				echo "<br>";
			}
		}
	}

?>
	</div>
</html>

<?php
if(isset($_SESSION["usuario"])){
echo "<html>
	<form action='log1.php'>
	<input type='submit' name='cerrar' value='cerrar'>
</html>";
} ?>

<?php require('footer.php'); ?>
