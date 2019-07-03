<?php require('header.php'); ?>

<div class="containerb">
	<section class="registration-landing">
		<h1>Login</h1>
		<p>Entrá acá para que todos puedan contar con tus servicios o para contratar servicios</p>

    <form class="" action="perfil.php" method="post">
      <div class="form-group">
        <input class="form-control" type="text" name="nombreusu" value="" placeholder="Usuario">
      </div>
      <div class="form-group">
        <input class="form-control" type="password" name="pass" value=""placeholder="Contraseña ">
      </div>
      <div class="form-check">
        <input  class="form-check-input"type="checkbox" class="form-check-input" name="recordar" value="">
        <label for="recordar" class="form-check-label">Recordarme?</label>
      </div>
      <input class="btn btn-success"type="submit" name="enviar" value="Ingresar como prestador">
    </form>
	</section>
</div>

<?php require('footer.php'); ?>
