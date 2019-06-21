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
	
	//Lectura de archivo y chequeo de existencia previa de usuario
	
	$json_previo = file_get_contents("usuarios.json");
		
		//Prueba de funcionamiento
		echo "<br>JSON Previo:";
		var_dump($json_previo);
		echo "<br>";
	
	$previo = json_decode($json_previo, true); //Hay que ponerle true para que devuelva arrays asoc y no objetos
	
		//Prueba de funcionamiento
		echo "<br>Previo:";
		var_dump($previo);
		echo "<br>";
	
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
			
	//Agrego campo de array al array obtenido del json
	
	$cant_campos = sizeof($previo);
	
	echo "<br>Cantidad elementos array: ";
	var_dump($cant_campos);
	echo "<br>";
	
	$previo[2] = $campo_usuario[0];
	
	$json = json_encode($previo); //Vuelvo a codificar a JSON
			
	file_put_contents("usuarios.json", $json); //Escribo todo (con el agregado) en el archivo, pisando lo anterior
			
	//$json = json_encode($campo_usuario[0]);
		echo "<br> JSON: <br>";
		var_dump($json);
	
	//Hay que tomar el json, pasarlo a array, si no existe el usuario, agregarle un campo al array y luego pasarlo a json. No sirve appendear directamente el json porque el formato debe ser [{"campo":"valor", "campo":"valor"}, {"campo":"valor", "campo":"valor"}], y appendeando json te queda [{"campo":"valor", "campo":"valor"}], [{"campo":"valor", "campo":"valor"}]
	
	//Guardo registro en archivo (falta validar no existencia de usuario)
	//file_put_contents("usuarios.json", $json, FILE_APPEND);
	}

?>