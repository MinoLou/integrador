<?php
require_once 'header.php';
require_once 'serviceList.php';
  ?>

<!-- Servicios -->
<div class="containerb" >

<!-- Los servicios -->
<?php foreach ($serviceList as $oneService) : ?>
  <div class="card-body">
  	<p class="btn btn-warning"><?= $oneService['title'] ?></p>
  	<p class="card-text"><?= substr($oneService['description'], 0, 150) ?>...</p>
			<?php for ($i = 1; $i <= $oneService['ranking']; $i++): ?>
				<i class="fa fa-jedi"></i>
			<?php endfor; ?>
		</p>
     <div class="construction-icons">
     <i class="fa fa-<?= $oneService['icon'] ?>"></i>
     </div>
	</div>
<?php endforeach; ?>

</div>

<?php require('footer.php'); ?>
