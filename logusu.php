
    <?php require('header.php'); ?>

    <div class="containerb">

      <h1>Entrá, para poder contratar servicios</h1>

    <form class="" action="perfil.php" method="post">
    <!--<p class="blanco">Nombre Completo:</p>-->

       <div class="form-group">
      <input class="form-control"  type="text" name="nombreusu" value="" placeholder="Usuario (obligat)">
      <input class="form-control" type="email" name="email" value="" placeholder="E-mail">
      </div>

      <!--<p class="blanco">Eleg� tu contrase�a</p>-->
      <input class="form-control" type="password" name="pass" value=""placeholder="Ingresá tu contraseña ">

      <input class= "btn btn-success" type="submit" name="enviar" value="Ingresar como usuario">
     </form>
     </div>


<?php require('footer.php'); ?>
