<?php	
	echo "Se muestran variables de sesión: <br><br>";
	session_start();
	echo "Hola, " + $_SESSION["usuario"];
	var_dump($_SESSION["nombre"]); echo "<br>";
	var_dump($_SESSION["usuario"]); echo "<br>";
	var_dump($_SESSION["pais"]); echo "<br>";
	var_dump($_SESSION["email"]); echo "<br>";
?>

<html>
	<form action="cerrses.php">
	<input type="submit" name="cerrar" value="Cerrar">
</html>