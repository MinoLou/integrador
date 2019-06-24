<html>
<head>
<title>Session Example</title>
</head>

</html>

<?php session_start();
if(isset($_SESSION["usuario"])){
	if($_GET["cerrar"]=="destroy")
	{
		unset($_SESSION["nombre"]);
		unset($_SESSION["usuario"]);
		unset($_SESSION["pais"]);
		unset($_SESSION["email"]);
		session_destroy();
		var_dump($_SESSION["nombre"]); echo "<br>";
		var_dump($_SESSION["usuario"]); echo "<br>";
		var_dump($_SESSION["pais"]); echo "<br>";
		var_dump($_SESSION["email"]); echo "<br>";
		echo "Sesión cerrada";
	}
}
?>
