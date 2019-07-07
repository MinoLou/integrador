<?php
require_once 'header.php';
require_once 'serviceList.php';
  ?>

<!-- Servicios -->
<div class="containerb" >

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

<?php require('footer.php'); ?>
