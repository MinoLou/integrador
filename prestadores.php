<?php require("header.php"); ?>
<?php
  $tipo = $_GET['profesion'];
  $prestadores_file = file_get_contents("prestadores.json");
	$prestadores = json_decode($prestadores_file, true);
?>

  <?php foreach($prestadores as $prestador): ?>
    <?php if($prestador['profesion'] == $tipo): ?>

    <p><?= $prestador['nombre']; ?></p>

    <?php endif; ?>
  <?php endforeach; ?>


<?php require("footer.php"); ?>
