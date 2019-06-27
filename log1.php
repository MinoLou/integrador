<?php session_start();
if(isset($_SESSION["usuario"])){
	if($_GET["cerrar"]=="cerrar")
	{
		unset($_SESSION["nombre"]);
		unset($_SESSION["usuario"]);
		unset($_SESSION["pais"]);
		unset($_SESSION["email"]);
		session_destroy();
		//var_dump($_SESSION["nombre"]); echo "<br>";
		//var_dump($_SESSION["usuario"]); echo "<br>";
		//var_dump($_SESSION["pais"]); echo "<br>";
		//var_dump($_SESSION["email"]); echo "<br>";
		//echo "Sesión cerrada";
	}
}
?>

<html>
<head>
<title>Cierre de sesión</title>
</head>

</html>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/styles.css">
    <title>Registro</title>
  </head>
  <body class="registro-body">
    <?php require('header.php'); ?>

    <br>
    <br>

    <p><h3 class="registro">Entrá acá para que todos puedan contar con tus servicios o para contratar servicios</h3></p>
<br>
<br>
<br>
<br>
<br>

<div class="form">
  <!--<form class="" action="index.html" method="post">-->
      <br>
      <br>
	  <a href="logusu.php"><button class="boton-registro" style="font-size: 22px;"> Entrar como usuario </button></a>
      <!--<input href ="index.php" class="boton-registro"type="submit" name="enviar" value=" Registrarme como usuario ">-->
	  <br>
      <br>
	  <br>
      <br>
	  <a href="login.php"><button class="boton-registro" style="font-size: 22px;">Entrar como prestador</button></a>
	  <!--<input class="boton-registro"type="submit" name="enviar" value="Registrarme como prestador">-->
  <!--</form>-->
  <br><br>
</div>
    <?php require('footer.php'); ?>

  </body>
</html>
