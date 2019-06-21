<?php
	var_dump($_POST);
	echo "<br> Soy formactiontest.php <br><br>";
	
	$valido = true;
	
	if (strlen($_POST["nombre"]) > 0){
		echo "Nombre ok <br>";
	} else {echo "No ingresó nombre <br>"; $valido = false;}
	
	if (strlen($_POST["nombreusu"]) >= 8){
		echo "Usuario ok <br>";
	} else {echo "Nombre usuario debe tener al menos 8 caracteres <br>"; $valido = false;}
	
	if (strlen($_POST["pais"]) > 0){
		echo "País ok <br>";
	} else {echo "No ingresó país <br>"; $valido = false;}
	
	if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
		echo "Mail ok <br>";
	} else {echo "No ingresó formato de mail válido <br>"; $valido = false;}
	
	if (strlen($_POST["pass"]) >= 8){
		echo "Pass ok <br>";
	} else {echo "Pass debe tener al menos 8 caracteres <br>"; $valido = false;}
	
	if (strlen($_POST["pass"]) >= 8){
		echo "Pass2 ok <br>";
	} else {echo "Pass debe tener al menos 8 caracteres <br>"; $valido = false;}
	
	$nombre = $_POST["nombre"];
	$usuario = $_POST["nombreusu"];
	$pais = $_POST["pais"];
	$email = $_POST["email"];
	$pass = $_POST["pass"];
	$pass2 = $_POST["pass2"];
	
	if ($pass == $pass2){
		$hash = password_hash($pass, PASSWORD_DEFAULT);
		var_dump($hash);
	} else { echo "Pass y confirmación de pass no coinciden"; $valido = false;}
	
	//Creación de array asociativo de usuario
	if($valido){
		$campo_usuario = [
			0 => [
				"nombre" => $nombre,
				"usuario" => $usuario,
				"pais" => $pais,
				"email" => $email,
				"hash" => $hash
				]
			];
	$json = json_encode($campo_usuario);
	echo "<br> JSON: <br>";
	var_dump($json);
	
	//Guardo registro en archivo (falta validar no existencia de usuario)
	file_put_contents("usuarios.json", $json, FILE_APPEND);
	}

?>