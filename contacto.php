<?php require('header.php'); ?>

<div>
  <a href="contacto.php" style="font-size: 20px;">Contacto</a><br>
  <form method="post" action="formulario.php">
    <p>
    <br><label for="nombre">Nombre: </label>
    <input id="nombre" type="text" name="nombre">
    </p>
    <p>
    <label for="">E - mail : </label>
    <input id="email" type="text" name="email">
    </p>
    <p>
    <label for="">Mensaje: </label>
    <input id="mensaje" type="text" name="mensaje">
    </p>
    <p>
    <input id="enviar" type="submit" value="Enviar">
    </p>
  </form>
</div>

  <footer class="page-footer">
    <div style="background-image: url('images/patron-ladrillos.jpg');">
		<br><br><br><br><br><br><br>
    </div>
	<div style="background-color: black; height: 110px;">
		<p class="footer-legend" style="color: white; padding: 20px;">Copyright 2019 - The Bill Gates Group @ Digital House Lima.<br>Buenos Aires, Argentina <br>Todos los derechos reservados.</p>
	</div>
  </footer>
  </body>
</html>
