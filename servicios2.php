<?php
require_once 'header.php';
require_once 'serviceList.php';
  ?>

<!-- Servicios -->
<div class="containerb" >
<?php 
		session_start();
		if(isset($_SESSION["usuario"])){
			echo "Variables de sesión<br>"; 
			echo ($_SESSION["nombre"]); echo "<br>";
			echo ($_SESSION["usuario"]); echo "<br>";
			echo ($_SESSION["pais"]); echo "<br>";
			echo ($_SESSION["email"]); echo "<br>";
  }?>
<div class="servicios-list">
  <!-- Los servicios -->
  <?php foreach ($serviceList as $oneService) : ?>
    <div class="card-body">
    	<p class= ""><?= $oneService['title'] ?></p>
      <div class="construction-icons">
        <i class="fa fa-<?= $oneService['icon'] ?>"></i>
      </div>
    	<p class="card-text"><?= substr($oneService['description'], 0, 150) ?>...</p>
      <a href="prestadores.php?profesion=<?= $oneService['profesion'] ?>">Ver mas</a>
  	</div>
  <?php endforeach; ?>
  </div>
</div>
<?php
if(isset($_SESSION["usuario"])){
echo "<html>
	<form action='log1.php'>
	<input type='submit' name='cerrar' value='cerrar'>
</html>";
} ?>
<?php require('footer.php'); ?>
