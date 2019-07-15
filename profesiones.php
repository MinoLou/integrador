<?php
require_once 'header.php'; 			//Es un copy-paste, no queda otra que replicarlo en este directorio (carpeta).
require_once 'serviceList.php';
  ?>

<!-- Servicios -->
<html>
	<p class="registro">Listado de <?=$_GET["profesion"] ?> </p>
	<div style="margin-left: 20px;">

<?php
	//Lectura de archivo y chequeo de existencia previa de usuario

	$json_previo = file_get_contents("prestadores.json"); //Tomo el contenido del JSON

	if($json_previo){	//Si hay al menos un usuario
		$previo = json_decode($json_previo, true); //Paso de JSON a array asociativo. Hay que ponerle true para que devuelva arrays asoc y no objetos

		foreach($previo as $valor){
			if($valor['profesion'] == $_GET["profesion"]){
				echo "<p style='font-size: 20px;'>". $valor['nombre'] . '&nbsp&nbsp&nbsp&nbsp' ."<a href='gestion.php?profesion=arquitecto&nombre=" .$valor['nombre']."'>Contactar</a></p></br>";
				echo "<p style='font-size: 12px;'>". $valor['pais'] . "</p><br>";
				echo "<p style='font-size: 12px;'>". "Puntuación: " . "</p><br>";
				echo "<br>";
			}
		}
	}

?>
	</div>
</html>

<?php require('footer.php'); ?>
