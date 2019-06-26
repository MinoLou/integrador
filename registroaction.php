<?php	
	$valido = true;
	$usuario_existe = false;
	$mensaje_ok = "";
	$mensaje_error = "";
	
	if (strlen($_POST["nombre"]) > 0){
		$mensaje_ok = $mensaje_ok . "Nombre ok <br>";
	} else {$mensaje_error = $mensaje_error . "No ingresó nombre <br>"; $valido = false;}
	
	if (strlen($_POST["apellido"]) > 0){
		$mensaje_ok = $mensaje_ok . "Apellido ok <br>";
	} else {$mensaje_error = $mensaje_error . "No ingresó nombre <br>"; $valido = false;}
	
	if (strlen($_POST["nombreusu"]) >= 8){
		$mensaje_ok = $mensaje_ok . "Usuario ok <br>";
	} else {$mensaje_error = $mensaje_error . "Nombre usuario debe tener al menos 8 caracteres <br>"; $valido = false;}
	
	if (strlen($_POST["pais"]) > 0){
		$mensaje_ok = $mensaje_ok . "País ok <br>";
	} else {$mensaje_error = $mensaje_error . "No ingresó país <br>"; $valido = false;}
	
	if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
		$mensaje_ok = $mensaje_ok . "Mail ok <br>";
	} else {$mensaje_error = $mensaje_error . "No ingresó formato de mail válido <br>"; $valido = false;}
	
	if (strlen($_POST["password"]) >= 8){
		$mensaje_ok = $mensaje_ok . "Pass ok <br>";
	} else {$mensaje_error = $mensaje_error . "Pass debe tener al menos 8 caracteres <br>"; $valido = false;}
	
	if (strlen($_POST["rePassword"]) >= 8){
		$mensaje_ok = $mensaje_ok . "Pass2 ok <br>";
	} else {$mensaje_error = $mensaje_error . "Pass repetido debe tener al menos 8 caracteres <br>"; $valido = false;}
	
	$nom = $_POST["nombre"];
	$apel = $_POST["apellido"];
	$nombre = $nom . " " . $apel;
	$usuario = $_POST["nombreusu"];
	$pais = $_POST["pais"];
	$email = $_POST["email"];
	$pass = $_POST["password"];
	$pass2 = $_POST["rePassword"];
	
	if ($pass == $pass2){
		$hash = password_hash($pass, PASSWORD_DEFAULT);
		//var_dump($hash);
		//echo "Hash calculado<br>";
	} else { $mensaje_error = $mensaje_error . "Pass y confirmación de pass no coinciden"; $valido = false;}
	
	//Lectura de archivo y chequeo de existencia previa de usuario
	
	$json_previo = file_get_contents("prestadores.json"); //Tomo el contenido del JSON
	
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
				$valido = false; //Para que rebote como pretendiente enamorado de histérica
				break;
			}
			$cant_campos++;
		}
	}
		if($usuario_existe == false){
			$previo[$cant_campos] = $campo_usuario; //Agrego el nuevo usuario al JSON
			$json = json_encode($previo); //Vuelvo a codificar a JSON		
			file_put_contents("prestadores.json", $json); //Escribo todo (con el agregado) en el archivo, pisando lo anterior
			//echo "Usuario agregado<br>";
		} else {
			$mensaje_error = $mensaje_error . "Ese usuario ya existe<br>";
		}		
	}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/styles.css">
    <title>Registro prestador</title>
  </head>
  <body class="registro-body">
    <?php require('header.php'); ?>

    <br>
    <br>

    
	
	<?php if($valido){
		echo "<p><h3 class='registro'>Prestador registrado exitosamente</h3></p>";
		echo "<p><h3 class='registro'>Felicidades, "; echo($nombre); echo "</h3></p>";
	} else {
		echo "<p><h3 class='registro'> Error <br> "; echo($mensaje_error); echo "</h3></p>";
	}?>
  </body>
</html>