<?php
require_once 'header.php';
require_once 'serviceList.php';
  ?>

<!-- Servicios -->
<div class="containerb" >

<!-- Los servicios -->
<?php foreach ($serviceList as $oneService) : ?>
  <div class="card-body">
  	<p class= "btn btn-outline-dark"><?= $oneService['title'] ?></p>
  	<p class="card-text"><?= substr($oneService['description'], 0, 150) ?>...</p>

		</p>
     <div class="construction-icons">
       <i class="fa fa-<?= $oneService['icon'] ?>"></i>
     </div>
	</div>
<?php endforeach; ?>

</div>

<?php require('footer.php'); ?>
