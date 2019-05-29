<?php
if ($_POST && strlen($_POST["user"]) == 0) {
   echo "Completa el usuario, por favor";

 }


 ?>


<form class="" action="index.html" method="post">
  User <input type="text" name="user" value="">
  Password <input type="password" name="password" value="">
  <input type="submit" name="enviar" value="Enviar">

</form>
