<?php require('header.php');
	require_once 'serviceList.php';
  ?>

<!-- Servicios -->
<div class="container" style="margin-top:30px; margin-bottom: 30px;">
  <div class="row">
    <!-- Los servicios -->
    <?php foreach ($serviceList as $oneService) : ?>
      <div class="col-md-6 col-lg-4">
				<div class="card">
					<img src="images/<?= $oneService['image'] ?>" class="card-img-top" alt="imagen del servicio">
					<div class="card-body">
						<h5 class="btn btn-success"><?= $oneService['title'] ?></h5>
						<p class="card-text"><?= substr($oneService['description'], 0, 150) ?>...
            </p>
						<p class="card-text">
							<?php for ($i = 1; $i <= $oneService['ranking']; $i++): ?>
								<i class="fa fa-star"></i>
							<?php endfor; ?>
						</p>
          </div>
				</div>
			</div>
			<?php endforeach; ?>
	</div>
</div>

<?php require('footer.php'); ?>