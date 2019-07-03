<?php
	require('header.php');
	$usuario = $_POST["nombreusu"];
	$pass = $_POST["pass"];
	$sesion = false;
	$usuario_encontrado = false;
	$mensaje_ok = "";
	$mensaje_error = "";
	$tipo_usuario = $_POST["enviar"];
	$kind_of_user = "";
	//echo $tipo_usuario;

	//Lectura de archivo y chequeo de existencia previa de usuario

	if($tipo_usuario == "Ingresar como usuario"){
		$json_previo = file_get_contents("usuarios.json"); //Tomo el contenido del JSON de usuarios
		$kind_of_user = "usuario";
	} else if ($tipo_usuario == "Ingresar como prestador"){
		$json_previo = file_get_contents("prestadores.json"); //Tomo el contenido del JSON de prestadores
		$kind_of_user = "prestador";
	} else {$mensaje_error = $mensaje_error . "No se identificó tipo de usuario<br>";}


	$previo = json_decode($json_previo, true); //Paso de JSON a array asociativo. Hay que ponerle true para que devuelva arrays asoc y no objetos

	//Agrego campo de array al array obtenido del json
	foreach($previo as $valor){
		echo "<h1>" . $usuario . "</h1>";
		if ($usuario == $valor["usuario"]){ //Si ya existe un usuario con el nombre de usuario ingresado
			$mensaje_ok = $mensaje_ok . "Usuario encontrado<br>";
			$hash = $valor["hash"]; //Levanto el hash para el usuario en cuestión del array que se levantó del JSON
			if(password_verify($pass, $hash)){
				$mensaje_ok = $mensaje_ok . "Inicio de sesión<br>";
				$usuario_encontrado = true;
				$sesion = true;
				session_start();
				$_SESSION["nombre"]=$valor["nombre"];
				$_SESSION["usuario"]=$valor["usuario"];
				$_SESSION["pais"]=$valor["pais"];
				$_SESSION["email"]=$valor["email"];
				$_SESSION["ext"]=$valor["ext"]; //Se agregó la extensión de la foto al json 1-7-19
				$nombre = "Hola " . $_SESSION["nombre"];
				//echo $nombre;
				//var_dump($_SESSION["nombre"]); echo "<br>";
				//var_dump($_SESSION["usuario"]); echo "<br>";
				//var_dump($_SESSION["pais"]); echo "<br>";
				//var_dump($_SESSION["email"]); echo "<br>";
			} else {
				$mensaje_error = $mensaje_error . "No coincide pass<br>";
				$usuario_encontrado = true;
			}
			break;
		}
	}
	if($usuario_encontrado == false){
		$mensaje_error = $mensaje_error . "No se encontró usuario<br>";
	}
?>


<?php if($sesion){
echo "<div class='profile-container'>
		<div class='side-menu'>
			<div class='side-menu-button'>Item 1</div>
			<div class='side-menu-button'>Item 2</div>
			<div class='side-menu-button'>Item 3</div>
			<div class='side-menu-button'>Item 4</div>
			<div class='side-menu-button'>Item 5</div>
			<div class='side-menu-button'>Item 6</div>
		</div>
		<div class='main-profile'>
			<br>";
		 $extension = $_SESSION["ext"];
		 $imagenUsuario = $_SESSION["usuario"].".".$extension;
			//echo $imagenUsuario;

		echo "<div class='main-profile'>
			<br>";
			if ($kind_of_user == "usuario"){
				echo "<img class='profile-picture' height='200px' src='usuarios/"; echo $imagenUsuario; echo "' alt='Usuario'>";
			} else if ($kind_of_user == "prestador"){
				echo "<img class='profile-picture' height='200px' src='prestadores/"; echo $imagenUsuario; echo "' alt='Prestador'>";
			}
			echo "<h2 style='text-align:center;'>"; echo($nombre); echo "</h2>
			<h3 style='text-align:center;'>";
			echo ($_SESSION["nombre"]); echo "<br>";
			echo ($_SESSION["usuario"]); echo "<br>";
			echo ($_SESSION["pais"]); echo "<br>";
			echo ($_SESSION["email"]); echo "<br>";
			echo "Tipo de usuario: "; echo ($kind_of_user); echo "<br>";
			echo "</h3>
			<p>Trabajos realizados: 10</p>
			<p>Calificación: 10 ladrillos</p>
			<p>Usuarios relacionados: Steve Jobs, Paul Allen, Bernardo Neustadt</p>
		</div>
	</div>";
} else {
	  echo "<body class='registro-body'>
		<br>
		<br>
		<p><h3 class='registro'>"; echo($mensaje_error); echo "</h3></p>";
		echo "<br><br><br><br><br><br><br><br>"; //Los malditos breaks
  }
?>
<html>
	<form action="log1.php">
	<input type="submit" name="cerrar" value="cerrar">
</html>
<?php require('footer.php'); ?>
