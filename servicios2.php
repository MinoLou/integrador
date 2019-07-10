<?php
require_once 'header.php';
require_once 'serviceList.php';
  ?>

<!-- Servicios -->
<div class="containerb" >
<?php 
		session_start();
		if(isset($_SESSION["usuario"])){
			echo "Hola, "; 
			echo ($_SESSION["nombre"]); echo "<br>";
  }?>
<div class="servicios-list" style="margin-top: 20px;">
  <!-- Los servicios -->
  <?php foreach ($serviceList as $oneService) : ?>
    <div class="card-body" style="margin-bottom: 20px;">
    	<p class= "" style="font-size: 20px;"><?= $oneService['title'] ?></p>
      <div class="construction-icons">
        <i class="fa fa-<?= $oneService['icon'] ?>"></i>
      </div>
    	<p class="card-text"><?= substr($oneService['description'], 0, 150) ?>...</p>
      <a href="profesiones/<?= $oneService['file'] ?>?profesion=<?= $oneService['profesion'] ?>">Ver mas</a>
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
