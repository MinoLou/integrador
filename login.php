<?php
if ($_POST && strlen($_POST["user"]) == 0){
   echo "Completa el usuario, por favor";
 }

 ?>

<?php require('header.php'); ?>

<h2></h2>
<section class="container">

<form class="" action="index.html" method="post">
  User <input type="text" name="user" value="">
  Password <input type="password" name="password" value="">
  <input type="submit" name="enviar" value="Enviar">

</form>

</section>
<br><br><br><br><br><br><br><br><br><br><br>

<?php require('footer.php'); ?>
