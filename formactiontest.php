<?php	
	$valido = true;
	$usuario_existe = false;
	
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
		//var_dump($hash);
		echo "Hash calculado<br>";
	} else { echo "Pass y confirmación de pass no coinciden"; $valido = false;}
	
	//Lectura de archivo y chequeo de existencia previa de usuario
	
	$json_previo = file_get_contents("usuarios.json"); //Tomo el contenido del JSON
	
	if($json_previo){	//Si hay al menos un usuario
		$previo = json_decode($json_previo, true); //Paso de JSON a array asociativo. Hay que ponerle true para que devuelva arrays asoc y no objetos
	}
	
	//Creación de array asociativo de usuario
	if($valido){ //Si no falló ninguna de las validaciones del nuevo usuario
		$campo_usuario = [
				"nombre" => $nombre,
				"usuario" => $usuario,
				"pais" => $pais,
				"email" => $email,
				"hash" => $hash
			];
			
		//Agrego campo de array al array obtenido del json
	
		$cant_campos = 0;
	
	if($json_previo){
		foreach($previo as $valor){
		
			if ($usuario == $valor["usuario"]){ //Si ya existe un usuario con el nombre de usuario ingresado
				$usuario_existe = true;
				break;
			}
			$cant_campos++;
		}
	}
		if($usuario_existe == false){
			$previo[$cant_campos] = $campo_usuario; //Agrego el nuevo usuario al JSON
			$json = json_encode($previo); //Vuelvo a codificar a JSON		
			file_put_contents("usuarios.json", $json); //Escribo todo (con el agregado) en el archivo, pisando lo anterior
			echo "Usuario agregado<br>";
		} else {
			echo "Ese usuario ya existe<br>";
		}		
	}
?>