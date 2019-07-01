<?php
	echo "Tratamiento de imágenes<br>";
	if($_FILES["archivo"]["error"] === UPLOAD_ERR_OK){
		echo "UPLOAD_ERR_OK";
		$nombre = $_FILES["archivo"]["name"];
		$archivo = $_FILES["archivo"]["tmp_name"];
		$ext = pathinfo($nombre, PATHINFO_EXTENSION);
		
		echo "La extensión es: " . $ext . "<br>";
		
		$miArchivo = dirname(__FILE__);
		$miArchivo = $miArchivo. "\\" ."teQuedaPocoMacri.".$ext;
		
		echo "miArchivo es: " . $miArchivo . "<br>";
		
		move_uploaded_file($archivo, $miArchivo);
	} else {
		echo "ERROR<br>";
	}
?>